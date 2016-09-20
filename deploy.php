<?php
  echo "Deploying Code";
  $message=shell_exec("/www/deploy.sh");
  print_r($message);
  echo "Deployed"
 ?>
