<? php

$botToken = "583118228:AAED8bPuKUkT4lEexUMVSnR9D26uT2sLOlE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($webite."/getupdates");

print_r($update);
?>
