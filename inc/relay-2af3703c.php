<?php
// Signup relay for subscribe.thetyee.ca
//
// 2026-09-29: signups now go SERVER-SIDE through the webhooks subscribe app, which
// subscribes via the Mailchimp API and, for anyone who unsubscribed before, retries
// as status 'pending' so Mailchimp sends them a double opt-in confirmation email
// (the only route back for a compliance-locked contact) instead of the 2005 error.
// The reader stays on our page and sees the result inline. If the app can't be
// reached we still have the local log and fall back to Mailchimp's hosted form so a
// signup is never lost.

$APP     = 'https://webhooks.thetyee.ca/subscribe/';
// Fallback-only: Mailchimp's hosted form, used if the app is unreachable.
$MC_POST = 'https://thetyee.us14.list-manage.com/subscribe/post'
         . '?u=6f3c7ed70f931876787963307&id=979b7d233e&f_id=0072efe0f0';

// page slug -> Mailchimp interest-group checkbox value
$GROUP_OF = [
  'daily'     => '1',
  'weekly'    => '2',
  'national'  => '4',
  'alberta'   => '64',
  'run'       => '128',
  'weekender' => '256',
];
$GID = '45921';                 // newsletter selection group
$ALWAYS = ['45933' => ['8','16']];   // Tyee News + Sponsor News (hosted-form fallback only)

$email = trim($_POST['email'] ?? $_POST['EMAIL'] ?? '');
$slug  = preg_replace('/[^a-z_]/', '', strtolower($_POST['list'] ?? ''));
$camp  = trim($_POST['custom_campaign'] ?? $_POST['CAMPAIGN'] ?? '');
$hp    = trim($_POST['hp_check'] ?? '');

// Bots fill the honeypot; humans never see it. Drop silently.
if ($hp !== '') { header('Location: /success/'); exit; }

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: /?err=1'); exit;
}

// Which newsletters did they pick? Single-list pages send `list`; the multi-select
// pages keep Mailchimp's own group[45921][N] checkbox names.
$groups = [];
if (isset($GROUP_OF[$slug])) $groups[] = $GROUP_OF[$slug];
if (!empty($_POST['group']) && is_array($_POST['group'])) {
    foreach ($_POST['group'] as $g => $vals) {
        if ((string)$g === $GID && is_array($vals)) {
            foreach (array_keys($vals) as $v) $groups[] = (string)$v;
        }
    }
}
$groups = array_values(array_unique($groups));
if (!$groups) $groups[] = $GROUP_OF['daily'];    // site root with nothing ticked

// --- local record, before we call the app ---------------------------------
@file_put_contents(__DIR__ . '/signup-relay.log',
    json_encode(['ts'=>gmdate('c'), 'email'=>$email, 'list'=>$slug,
                 'groups'=>$groups, 'campaign'=>$camp,
                 'ip'=>$_SERVER['REMOTE_ADDR'] ?? '',
                 'ref'=>$_SERVER['HTTP_REFERER'] ?? '']) . "\n",
    FILE_APPEND | LOCK_EX);

// --- subscribe via the webhooks app (real subscribe + pending fallback) ----
$fields = ['email'=>$email, 'custom_campaign'=>$camp];
foreach ($groups as $g) {
    foreach ($GROUP_OF as $s => $n) if ($n === $g) $fields['custom_pref_enews_' .
        ($s === 'alberta' ? 'alberta_edge' : $s)] = '1';
}
$ch = curl_init($APP);
curl_setopt_array($ch, [CURLOPT_POST=>true, CURLOPT_POSTFIELDS=>http_build_query($fields),
    CURLOPT_RETURNTRANSFER=>true, CURLOPT_TIMEOUT=>15, CURLOPT_CONNECTTIMEOUT=>5]);
$resp = curl_exec($ch);
$code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

// --- app unreachable: fall back to Mailchimp's hosted form (never lose a signup) --
if ($resp === false || $code === 0) {
    ?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>Subscribing&hellip;</title>
<style>body{font-family:Georgia,serif;background:#eee;color:#231f20;margin:0}
.w{max-width:560px;margin:0 auto;background:#fff;padding:40px 28px;text-align:center}
button{font-family:Arial,sans-serif;background:#fcd136;border:2px solid #231f20;
color:#231f20;font-size:17px;padding:12px 22px;cursor:pointer}</style></head>
<body><div class="w">
<p>One moment &mdash; finishing your subscription&hellip;</p>
<form id="f" method="post" action="<?= h($MC_POST) ?>">
  <input type="hidden" name="EMAIL" value="<?= h($email) ?>">
  <input type="hidden" name="CAMPAIGN" value="<?= h($camp) ?>">
  <?php foreach ($groups as $g): ?>
    <input type="hidden" name="group[<?= h($GID) ?>][<?= h($g) ?>]" value="<?= h($g) ?>">
  <?php endforeach; ?>
  <?php foreach ($ALWAYS as $gid => $vals): foreach ($vals as $v): ?>
    <input type="hidden" name="group[<?= h($gid) ?>][<?= h($v) ?>]" value="<?= h($v) ?>">
  <?php endforeach; endforeach; ?>
  <noscript><button type="submit">Continue</button></noscript>
</form>
<script>document.getElementById('f').submit();</script>
</div></body></html><?php
    exit;
}

// --- render the app's result inline ---------------------------------------
$j        = json_decode((string)$resp, true);
$ok       = ($code >= 200 && $code < 300);
$pending  = is_array($j) && (($j['resultStr'] ?? '') === 'pending-reoptin');
if ($ok && $pending) {
    $heading = 'Almost done — please confirm';
    $body    = 'You unsubscribed from our list before, so to add you back we need your okay. '
             . 'We just emailed you a confirmation link — click it and you are all set.';
} elseif ($ok) {
    $heading = 'Thanks for subscribing!';
    $body    = 'Check your inbox for a message from The Tyee. If you do not see it, have a look in '
             . 'your spam or promotions folder.';
} else {
    $heading = 'Something went wrong';
    $body    = 'We could not complete your subscription. Please email '
             . '<a href="mailto:subscribe@thetyee.ca">subscribe@thetyee.ca</a> and we will add you.';
}
?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($heading) ?></title>
<style>
  body{font-family:Georgia,serif;background:#eee;color:#231f20;margin:0}
  .w{max-width:560px;margin:0 auto;background:#fff;padding:40px 28px;text-align:center}
  h1{font-family:Arial,sans-serif;font-size:24px;margin:0 0 14px}
  p{font-size:17px;line-height:1.5}
  a{color:#c8102e}
  .home{display:inline-block;margin-top:22px;font-family:Arial,sans-serif;
    background:#fcd136;border:2px solid #231f20;color:#231f20;font-size:16px;
    padding:11px 20px;text-decoration:none}
</style></head>
<body><div class="w">
  <img src="https://thetyee.ca/design-article.thetyee.ca/ui/img/thetyee.svg" alt="The Tyee" width="120" style="margin-bottom:18px">
  <h1><?= h($heading) ?></h1>
  <p><?= $body ?></p>
  <a class="home" href="https://thetyee.ca/">Back to The Tyee</a>
</div></body></html>
