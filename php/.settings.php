
<?php
return array (
  /*Отвечает за кодиорвку*/
//   'utf_mode' => 
//   array (
//     'value' => true,
//     'readonly' => true,
//   ),
  
  /*Отвечает за кодиорвку по умолчанию*/
//   'default_charset' => 
//   array (
//     'value' => 'cp866',
//     'readonly' => false,
//   ),
  
  /*Отключение сброса кэша, для решения некоторых проблем с php Zend Optimizer+*/
  'no_accelerator_reset' => 
  array (
    'value' => false,
    'readonly' => false,
  ),
  
  /*Установка константы BX_HTTP_STATUS используется в Configuration::wnc*/
  'http_status' => 
  array (
    'value' => true,
    'readonly' => false,
  ),
  
  /*Время кэширования в секундах*/
  'cache_flags' => 
  array (
    'value' => 
    array (
      'config_options' => 3600,
      'site_domain' => 3600,
    ),
    'readonly' => false,
  ),
  
  /*Отвечает за куки на сайте*/
  'cookies' => 
  array (
    'value' => 
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  
  /*Отвечает за обработку и логирование ошибок*/
  'exception_handling' => 
  array (
    'value' => 
    array (
      'debug' => true,
      'handled_errors_types' => 20853,
      'exception_errors_types' => 20853,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => 
      array (
        'settings' => 
        array (
          'file' => NULL,
          'log_size' => NULL,
        ),
      ),
    ),
    'readonly' => false,
  ),
  
  /*Отвечает за соединения с базами данных*/
  'connections' => 
  array (
    'value' => 
    array (
      'default' => 
      array (
        'className' => '\\Bitrix\\Main\\DB\\MysqlConnection',
        'host' => 'mysql',
        'database' => 'bitrix',
        'login' => 'root',
        'password' => 'root',
        'options' => 2,
      ),
    ),
    'readonly' => true,
  ),
  
  /*Отвечает за кэширование*/
  'cache' => 
  array (
    'value' => 
    array (
      'type' => 'memcache', /*memcache, apc, xcache, files, none*/
      'sid' => '',
      'memcache' => 
      array (
        'host' => '127.0.0.1',
      ),
    ),
    'readonly' => false,
  ),
);