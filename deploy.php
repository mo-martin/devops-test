<?php
  $message=shell_exec("/www/deploy.sh");
  print_r($message);
  echo "Code Deployed"
 ?>
