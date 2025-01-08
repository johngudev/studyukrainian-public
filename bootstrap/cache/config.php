<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://studyukrainian.test',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:14d2LglwlXV8lGmof5U24kyXS0FZHk0Co0Jcg9SV7uo=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\IgnitionServiceProvider',
      1 => 'Illuminate\\Auth\\AuthServiceProvider',
      2 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      3 => 'Illuminate\\Bus\\BusServiceProvider',
      4 => 'Illuminate\\Cache\\CacheServiceProvider',
      5 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      6 => 'Illuminate\\Cookie\\CookieServiceProvider',
      7 => 'Illuminate\\Database\\DatabaseServiceProvider',
      8 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      9 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      10 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      11 => 'Illuminate\\Hashing\\HashServiceProvider',
      12 => 'Illuminate\\Mail\\MailServiceProvider',
      13 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      15 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      16 => 'Illuminate\\Queue\\QueueServiceProvider',
      17 => 'Illuminate\\Redis\\RedisServiceProvider',
      18 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      19 => 'Illuminate\\Session\\SessionServiceProvider',
      20 => 'Illuminate\\Translation\\TranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'statamic',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/john/Sites/studyukrainian/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
      'statamic' => 
      array (
        'driver' => 'statamic',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'studyukrainian',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'studyukrainian',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'studyukrainian',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'studyukrainian',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/john/Sites/studyukrainian/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Users/john/Sites/studyukrainian/storage/app/public',
        'url' => 'http://studyukrainian.test/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
    ),
    'links' => 
    array (
      '/Users/john/Sites/studyukrainian/public/storage' => '/Users/john/Sites/studyukrainian/storage/app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => NULL,
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Users/john/Sites/studyukrainian/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/john/Sites/studyukrainian/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/Users/john/Sites/studyukrainian/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'mailhog',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -t -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Users/john/Sites/studyukrainian/resources/views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'studyukrainian.test',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/john/Sites/studyukrainian/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'statamic' => 
  array (
    'antlers' => 
    array (
      'version' => 'runtime',
      'debugbar' => true,
      'guardedVariables' => 
      array (
        0 => 'config.app.key',
      ),
      'guardedTags' => 
      array (
      ),
      'guardedModifiers' => 
      array (
      ),
    ),
    'api' => 
    array (
      'enabled' => false,
      'resources' => 
      array (
        'collections' => false,
        'navs' => false,
        'taxonomies' => false,
        'assets' => false,
        'globals' => false,
        'forms' => false,
        'users' => false,
      ),
      'route' => 'api',
      'middleware' => 'api',
      'pagination_size' => 50,
      'cache' => 
      array (
        'expiry' => 60,
      ),
      'excluded_keys' => 
      array (
      ),
    ),
    'assets' => 
    array (
      'image_manipulation' => 
      array (
        'route' => 'img',
        'secure' => true,
        'driver' => 'gd',
        'additional_extensions' => 
        array (
        ),
        'cache' => false,
        'cache_path' => '/Users/john/Sites/studyukrainian/public/img',
        'defaults' => 
        array (
        ),
        'presets' => 
        array (
        ),
        'generate_presets_on_upload' => true,
        'append_original_filename' => false,
      ),
      'auto_crop' => true,
      'thumbnails' => 
      array (
        'max_width' => 10000,
        'max_height' => 10000,
      ),
      'google_docs_viewer' => false,
      'cache_meta' => true,
      'focal_point_editor' => true,
      'lowercase' => true,
      'additional_uploadable_extensions' => 
      array (
      ),
      'svg_sanitization_on_upload' => true,
    ),
    'autosave' => 
    array (
      'enabled' => false,
      'interval' => 5000,
    ),
    'cp' => 
    array (
      'enabled' => true,
      'route' => 'cp',
      'start_page' => 'dashboard',
      'widgets' => 
      array (
        0 => 'getting_started',
      ),
      'date_format' => 'Y-m-d',
      'pagination_size' => 50,
      'pagination_size_options' => 
      array (
        0 => 10,
        1 => 25,
        2 => 50,
        3 => 100,
        4 => 500,
      ),
      'link_to_docs' => true,
      'support_url' => 'https://statamic.com/support',
      'theme' => 'rad',
      'custom_cms_name' => 'Statamic',
      'custom_logo_url' => NULL,
      'custom_favicon_url' => NULL,
      'custom_css_url' => NULL,
      'thumbnail_presets' => 
      array (
      ),
    ),
    'editions' => 
    array (
      'pro' => false,
      'addons' => 
      array (
      ),
    ),
    'forms' => 
    array (
      'forms' => '/Users/john/Sites/studyukrainian/resources/forms',
      'submissions' => '/Users/john/Sites/studyukrainian/storage/forms',
      'email_view_folder' => NULL,
      'send_email_job' => 'Statamic\\Forms\\SendEmail',
      'exporters' => 
      array (
        'csv' => 
        array (
          'class' => 'Statamic\\Forms\\Exporters\\CsvExporter',
        ),
        'json' => 
        array (
          'class' => 'Statamic\\Forms\\Exporters\\JsonExporter',
        ),
      ),
    ),
    'git' => 
    array (
      'enabled' => false,
      'automatic' => true,
      'queue_connection' => NULL,
      'dispatch_delay' => 0,
      'use_authenticated' => true,
      'user' => 
      array (
        'name' => 'Spock',
        'email' => 'spock@example.com',
      ),
      'paths' => 
      array (
        0 => '/Users/john/Sites/studyukrainian/content',
        1 => '/Users/john/Sites/studyukrainian/users',
        2 => '/Users/john/Sites/studyukrainian/resources/blueprints',
        3 => '/Users/john/Sites/studyukrainian/resources/fieldsets',
        4 => '/Users/john/Sites/studyukrainian/resources/forms',
        5 => '/Users/john/Sites/studyukrainian/resources/users',
        6 => '/Users/john/Sites/studyukrainian/resources/preferences.yaml',
        7 => '/Users/john/Sites/studyukrainian/storage/forms',
        8 => '/Users/john/Sites/studyukrainian/public/assets',
      ),
      'binary' => 'git',
      'commands' => 
      array (
        0 => ' add {{ paths }}',
        1 => ' -c "user.name={{ name }}" -c "user.email={{ email }}" commit -m "{{ message }}"',
      ),
      'push' => false,
      'ignored_events' => 
      array (
      ),
      'locale' => NULL,
    ),
    'graphql' => 
    array (
      'enabled' => false,
      'resources' => 
      array (
        'collections' => false,
        'navs' => false,
        'taxonomies' => false,
        'assets' => false,
        'globals' => false,
        'forms' => false,
        'sites' => false,
        'users' => false,
      ),
      'queries' => 
      array (
      ),
      'middleware' => 
      array (
      ),
      'cache' => 
      array (
        'expiry' => 60,
      ),
    ),
    'live_preview' => 
    array (
      'devices' => 
      array (
        'Laptop' => 
        array (
          'width' => 1440,
          'height' => 900,
        ),
        'Tablet' => 
        array (
          'width' => 1024,
          'height' => 786,
        ),
        'Mobile' => 
        array (
          'width' => 375,
          'height' => 812,
        ),
      ),
      'inputs' => 
      array (
      ),
    ),
    'markdown' => 
    array (
      'configs' => 
      array (
        'default' => 
        array (
        ),
      ),
    ),
    'oauth' => 
    array (
      'enabled' => false,
      'email_login_enabled' => true,
      'providers' => 
      array (
      ),
      'routes' => 
      array (
        'login' => 'oauth/{provider}',
        'callback' => 'oauth/{provider}/callback',
      ),
      'remember_me' => true,
    ),
    'protect' => 
    array (
      'default' => NULL,
      'schemes' => 
      array (
        'ip_address' => 
        array (
          'driver' => 'ip_address',
          'allowed' => 
          array (
            0 => '127.0.0.1',
          ),
        ),
        'logged_in' => 
        array (
          'driver' => 'auth',
          'login_url' => '/login',
          'append_redirect' => true,
        ),
        'password' => 
        array (
          'driver' => 'password',
          'allowed' => 
          array (
            0 => 'secret',
          ),
          'form_url' => NULL,
        ),
      ),
    ),
    'revisions' => 
    array (
      'enabled' => false,
      'path' => '/Users/john/Sites/studyukrainian/storage/statamic/revisions',
    ),
    'routes' => 
    array (
      'enabled' => true,
      'bindings' => false,
      'action' => '!',
      'middleware' => 'web',
    ),
    'search' => 
    array (
      'default' => 'default',
      'indexes' => 
      array (
        'default' => 
        array (
          'driver' => 'local',
          'searchables' => 'all',
          'fields' => 
          array (
            0 => 'title',
          ),
        ),
      ),
      'drivers' => 
      array (
        'local' => 
        array (
          'path' => '/Users/john/Sites/studyukrainian/storage/statamic/search',
        ),
        'algolia' => 
        array (
          'credentials' => 
          array (
            'id' => '',
            'secret' => '',
          ),
        ),
      ),
      'defaults' => 
      array (
        'fields' => 
        array (
          0 => 'title',
        ),
      ),
    ),
    'sites' => 
    array (
      'sites' => 
      array (
        'default' => 
        array (
          'name' => 'Laravel',
          'locale' => 'en_US',
          'url' => '/',
        ),
      ),
    ),
    'stache' => 
    array (
      'watcher' => true,
      'stores' => 
      array (
        'taxonomies' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\TaxonomiesStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/taxonomies',
        ),
        'terms' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\TermsStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/taxonomies',
        ),
        'collections' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\CollectionsStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/collections',
        ),
        'entries' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\EntriesStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/collections',
        ),
        'navigation' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\NavigationStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/navigation',
        ),
        'collection-trees' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\CollectionTreeStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/trees/collections',
        ),
        'nav-trees' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\NavTreeStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/trees/navigation',
        ),
        'globals' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\GlobalsStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/globals',
        ),
        'global-variables' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\GlobalVariablesStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/globals',
        ),
        'asset-containers' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\AssetContainersStore',
          'directory' => '/Users/john/Sites/studyukrainian/content/assets',
        ),
        'assets' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\AssetsStore',
        ),
        'users' => 
        array (
          'class' => 'Statamic\\Stache\\Stores\\UsersStore',
          'directory' => '/Users/john/Sites/studyukrainian/users',
        ),
      ),
      'indexes' => 
      array (
      ),
      'lock' => 
      array (
        'enabled' => true,
        'timeout' => 30,
      ),
    ),
    'static_caching' => 
    array (
      'strategy' => NULL,
      'strategies' => 
      array (
        'half' => 
        array (
          'driver' => 'application',
          'expiry' => NULL,
        ),
        'full' => 
        array (
          'driver' => 'file',
          'path' => '/Users/john/Sites/studyukrainian/public/static',
          'lock_hold_length' => 0,
          'permissions' => 
          array (
            'directory' => 493,
            'file' => 420,
          ),
        ),
      ),
      'exclude' => 
      array (
        'class' => NULL,
        'urls' => 
        array (
        ),
      ),
      'invalidation' => 
      array (
        'class' => NULL,
        'rules' => 
        array (
        ),
      ),
      'ignore_query_strings' => false,
      'replacers' => 
      array (
        0 => 'Statamic\\StaticCaching\\Replacers\\CsrfTokenReplacer',
        1 => 'Statamic\\StaticCaching\\Replacers\\NoCacheReplacer',
      ),
      'warm_queue' => NULL,
    ),
    'system' => 
    array (
      'license_key' => NULL,
      'addons_path' => '/Users/john/Sites/studyukrainian/addons',
      'send_powered_by_header' => true,
      'date_format' => 'F jS, Y',
      'charset' => 'UTF-8',
      'track_last_update' => true,
      'cache_tags_enabled' => true,
      'php_memory_limit' => '-1',
      'php_max_execution_time' => '0',
      'ajax_timeout' => '600000',
      'pcre_backtrack_limit' => '-1',
      'debugbar' => 
      array (
        'pretty_print_variables' => true,
      ),
      'ascii_replace_extra_symbols' => false,
      'update_references' => true,
      'row_id_handle' => 'id',
    ),
    'users' => 
    array (
      'repository' => 'eloquent',
      'repositories' => 
      array (
        'file' => 
        array (
          'driver' => 'file',
          'paths' => 
          array (
            'roles' => '/Users/john/Sites/studyukrainian/resources/users/roles.yaml',
            'groups' => '/Users/john/Sites/studyukrainian/resources/users/groups.yaml',
          ),
        ),
        'eloquent' => 
        array (
          'driver' => 'eloquent',
        ),
      ),
      'avatars' => 'initials',
      'new_user_roles' => 
      array (
      ),
      'new_user_groups' => 
      array (
      ),
      'registration_form_honeypot_field' => NULL,
      'wizard_invitation' => true,
      'passwords' => 
      array (
        'resets' => 'users',
        'activations' => 'users',
      ),
      'database' => 'mysql',
      'tables' => 
      array (
        'users' => 'users',
        'role_user' => 'role_user',
        'roles' => false,
        'group_user' => 'group_user',
        'groups' => false,
      ),
      'guards' => 
      array (
        'cp' => 'web',
        'web' => 'web',
      ),
      'impersonate' => 
      array (
        'enabled' => true,
        'redirect' => NULL,
      ),
      'sort_field' => 'email',
      'sort_direction' => 'asc',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/john/Sites/studyukrainian/resources/views',
    ),
    'compiled' => '/Users/john/Sites/studyukrainian/storage/framework/views',
  ),
  'archetype' => 
  array (
    'roots' => 
    array (
      'input' => 
      array (
        'driver' => 'local',
        'root' => '/Users/john/Sites/studyukrainian',
      ),
      'output' => 
      array (
        'driver' => 'local',
        'root' => '/Users/john/Sites/studyukrainian',
      ),
      'debug' => 
      array (
        'driver' => 'local',
        'root' => '/Users/john/Sites/studyukrainian/storage/archetype/debug',
      ),
    ),
    'ignored_paths' => 
    array (
      0 => 'node_modules',
      1 => 'vendor',
      2 => '_ide_helper.php',
      3 => '.git',
    ),
    'snippets_path' => 'resources/snippets',
    'locations' => 
    array (
      'namespace_map' => 
      array (
        'app' => 'App',
      ),
      'app_path' => 'app',
      'app_namespace' => 'App',
      'file_root' => '',
      'class_root' => '',
      'commands_root' => 'app/HTTP/Controllers',
      'controllers_root' => 'app/HTTP/Controllers',
      'factories_root' => 'database/factories',
      'migrations_root' => 'database/migrations',
      'models_root' => 'app/Models',
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '/Users/john/Sites/studyukrainian',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'graphql' => 
  array (
    'route' => false,
    'default_schema' => 'default',
    'batching' => 
    array (
      'enable' => true,
    ),
    'schemas' => 
    array (
      'default' => 'Statamic\\GraphQL\\DefaultSchema',
    ),
    'types' => 
    array (
    ),
    'lazyload_types' => true,
    'error_formatter' => 
    array (
      0 => 'Rebing\\GraphQL\\GraphQL',
      1 => 'formatError',
    ),
    'errors_handler' => 
    array (
      0 => 'Rebing\\GraphQL\\GraphQL',
      1 => 'handleErrors',
    ),
    'security' => 
    array (
      'query_max_complexity' => NULL,
      'query_max_depth' => NULL,
      'disable_introspection' => false,
    ),
    'pagination_type' => 'Rebing\\GraphQL\\Support\\PaginationType',
    'simple_pagination_type' => 'Rebing\\GraphQL\\Support\\SimplePaginationType',
    'graphiql' => 
    array (
      'display' => false,
    ),
    'defaultFieldResolver' => NULL,
    'headers' => 
    array (
    ),
    'json_encoding_options' => 0,
    'apq' => 
    array (
      'enable' => false,
      'cache_driver' => 'statamic',
      'cache_prefix' => 'laravel_cache:graphql.apq',
      'cache_ttl' => 300,
    ),
    'execution_middleware' => 
    array (
      0 => 'Rebing\\GraphQL\\Support\\ExecutionMiddleware\\ValidateOperationParamsMiddleware',
      1 => 'Rebing\\GraphQL\\Support\\ExecutionMiddleware\\AutomaticPersistedQueriesMiddleware',
      2 => 'Rebing\\GraphQL\\Support\\ExecutionMiddleware\\AddAuthUserContextValueMiddleware',
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
