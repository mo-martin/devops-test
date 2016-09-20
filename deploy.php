<?php
  $message=shell_exec("/www/deploy.sh");
  exec("git pull origin master");
  print_r($message);
  echo "Code Deployed"
 ?>
