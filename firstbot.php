<?php
  $botToken = "550038506:AAEJhUC9t-j-SPPyDZ_g0zQofXT2n9ln0UU";
  $website = "https://api.telegram.org/bot".$botToken;

  $update = file_get_contents($webite."/getupdates");

  print_r($update);
?>
