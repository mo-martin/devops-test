<?php
  /*$message=shell_exec("/www/deploy.sh");
  exec("git pull origin master");
  print_r($message);*/

define('PRIVATE_KEY', 'id_rsa');

if ($_SERVER['REQUEST_METHOD'] === 'POST'
        && $_REQUEST['thing'] === PRIVATE_KEY)
{
    echo shell_exec("git pull");
}
  echo "Code Deployed"
 ?>
