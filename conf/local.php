<?php
// Example local.php to test install (to adapt of course)
$parameters = array(
  // Do not set db_driver and mailer_from_name as they are used to assume Mautic is installed
  'db_host' => 'localhost',
  'db_table_prefix' => null,
  'db_port' => 3306,
  'db_name' => '__DB_NAME__',
  'db_user' => '__DB_USER__',
  'db_password' => '__DB_PWD__',
  'db_backup_tables' => false,
  'db_backup_prefix' => 'bak_',
  'admin_email' => '__EMAIL__',
  'admin_password' => '__PASSWORD__',
  'mailer_transport' => smtp,
  'mailer_host' => 127.0.0.1 ,
  'mailer_port' => 25,
  'mailer_user' => __APP__,
  'mailer_password' => __MAIL_PWD__ ,
  'mailer_api_key' => null,
  'mailer_encryption' => null,
  'mailer_auth_mode' => null,
);