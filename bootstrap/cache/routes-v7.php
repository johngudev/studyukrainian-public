<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aPmjmNg3vF4CXjo5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5lDPeZuHtoy8Pb6o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5W1AL31MMqOvciJC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs/2018/09/29/how-i-learned-ukrainian' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog-how-i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs/2018/09/22/where-to-learn-ukrainian-in-lviv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog-where-to',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs/2018/09/15/how-to-learn-ukrainian-online' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog-how-to',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p6HaTqRlbKmopdo1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EyWrRwxLPc0EYnvv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nwsYk2WXPK1eMiWB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z3KzMaZYW2YBKwCo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YoShZK9Zqj6rfAly',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::50WVfYBxCqsPKXKy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gwyPJxxyS6r90MFL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5IA5TGfJ6aYT0CmT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yuLm94AAy7WYAufV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLZpiNh4Bjq5i2fR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/grammar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A35gP6QBbmWV0S5i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lessons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ebSmY5hP7kKqqWyZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/topical-lesson' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q02dE4pDEgGCqHhi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/grammar/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gIl96nUCyPZGzXbj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fIXioJPqTWmebcCA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/grammar/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fIsDDk8c60igei7v',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/grammar/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pJRtIVUXnvv6Kyme',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topical-lesson/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7TtCts0bKXBpAj8S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZOJxTKF92bF5twp7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/flashcard/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CRbsYQ631jGE2ZRm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wMzJUTJSSHLlMzgv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/flashcard/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K0XCH8LvDwXQolGf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/flashcard/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CJJl76ACfXHOb4tp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/flashcard-studying' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7hJMJ4UplYObWXQ3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/flashcard-studying/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ejk1AacyDBbQFO11',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/study-record/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IG3pKQbPYvD4Nzrd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/study-record/pass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QwI5jS2IMrT9r75a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/study-record/fail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9sv45v2jJOldJf4R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6VgWfYlIB35LUrWI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/premium-1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3gWL5W4pNXeEK7ge',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.password.reset.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.token',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/extend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.extend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/unauthorized' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.unauthorized',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/auth/stop-impersonating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.impersonation.stop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/navigation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/navigation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/collections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/collections/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/taxonomies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/taxonomies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/globals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/globals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/asset-containers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/asset-containers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/assets/actions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.actions.run',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/assets/actions/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.actions.bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/assets/browse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.browse.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/assets-fieldtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::rKFRKDvsXyJ0QEXV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/assets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/assets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fields.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fields.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fields.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/field-meta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::uwWXHfdhiko8ULTF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/fieldsets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fieldsets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fieldsets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/fieldsets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fieldsets.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/blueprints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.blueprints.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fields/fieldtypes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::Eg0gnzQ6wUijictR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/updater' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.updater',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/updater/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::ZQVJVl3UAzC95Eyo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/duplicates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.duplicates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/duplicates/regenerate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.duplicates.regenerate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/addons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.addons.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/addons/editions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::MxZIsuWplGxhU4E5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/forms/actions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.actions.run',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/forms/actions/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.actions.bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/forms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/forms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/users/actions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.actions.run',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/users/actions/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.actions.bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/users/blueprint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.blueprint.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.blueprint.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/user-groups/blueprint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.blueprint.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.blueprint.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/user-groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/user-groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/user-exists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user.exists',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities/phpinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.phpinfo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.search.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.email.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities/licensing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.licensing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/utilities/licensing/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.licensing.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fieldtypes/relationship' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.relationship.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fieldtypes/relationship/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.relationship.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fieldtypes/relationship/filters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.relationship.filters',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fieldtypes/markdown' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.markdown.preview',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/fieldtypes/files/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.files.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/api/addons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.api.addons.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/api/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.api.templates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.user.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.user.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/default/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.default.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.default.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/nav' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.user.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.user.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/nav/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.user.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/nav/default/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.default.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/preferences/nav/default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.default.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.default.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/session-timeout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.session.timeout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/playground' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.playground',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/protect/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.protect.password.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.protect.password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.password.reset.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/auth/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.account.activate.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/!/nocache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/blogs/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:49)|/admin/(?|blogs/edit/([^/]++)(?|(*:88))|grammar/edit/([^/]++)(*:117)|topical\\-lesson/edit/([^/]++)(?|(*:157)))|/reset\\-password/([^/]++)(*:192)|/verify\\-email/([^/]++)/([^/]++)(*:232)|/grammar/([^/]++)(*:257)|/lessons/(?|([^/]++)(*:285)|flashcards/([^/]++)(*:312))|/topical\\-lesson/([^/]++)(*:346)|/cp/(?|a(?|uth/password/reset/([^/]++)(*:392)|sset(?|\\-containers/([^/]++)(?|(*:431)|/(?|edit(*:447)|folders(?|(*:465)|/(.*)(*:478))|blueprint(?|(*:499)))|(*:509))|s/(?|browse/(?|search/([^/]++)(?:/(.*))?(*:558)|folders/([^/]++)(?|/actions(*:593)|(?:/(.*))?(*:611))|([^/]++)(?|/(.*)/edit(*:641)|(?:/(.*))?(*:659)))|([^/]++)(?|(*:680)|/(?|edit(*:696)|download(*:712))|(*:721)))))|s(?|elect\\-site/([^/]++)(*:757)|vgs/([^/]++)(*:777))|navigation/([^/]++)(?|(*:808)|/(?|edit(*:824)|blueprint(?|(*:844))|tree(?|(*:860))|pages(?|(*:877)|/(?|create(*:895)|([^/]++)/edit(*:916))))|(*:927))|collections/([^/]++)(?|(*:959)|/(?|e(?|dit(*:978)|ntries(?|(*:995)|/(?|actions(?|(*:1017)|/list(*:1031))|create/([^/]++)(?|(*:1059)|/preview(*:1076))|reorder(*:1093)|([^/]++)(?|(*:1113)|(*:1122)|/(?|p(?|ublish(*:1145)|review(?|(*:1163)))|unpublish(*:1183)|localize(*:1200)|re(?|visions(?|(*:1224)|/([^/]++)(*:1242))|store\\-revision(*:1267))|([^/]++)(*:1285))|(*:1295)))))|scaffold(?|(*:1319))|blueprints(?|(*:1342)|/(?|create(*:1361)|([^/]++)(?|(*:1381)|/edit(*:1395)|(*:1404))|reorder(*:1421))|(*:1431))|tree(?|(*:1448)))|(*:1459))|t(?|axonomies/([^/]++)(?|(*:1494)|/(?|edit(*:1511)|blueprints(?|(*:1533)|/(?|create(*:1552)|([^/]++)(?|(*:1572)|/edit(*:1586)|(*:1595))|reorder(*:1612))|(*:1622))|terms(?|(*:1640)|/(?|actions(?|(*:1663)|/list(*:1677))|create/([^/]++)(?|(*:1705)|/preview(*:1722))|([^/]++)(?|(*:1743)|(?:/([^/]++))?(?|(*:1769))|/([^/]++)/(?|re(?|visions(?|(*:1807)|/([^/]++)(*:1825))|store\\-revision(*:1850))|preview(?|(*:1870)))|(?:/([^/]++))?(*:1895)))))|(*:1908))|humbnails/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:1964))|globals/([^/]++)(?|/(?|edit(*:2001)|variables(*:2019)|blueprint(?|(*:2040)))|(*:2051))|p(?|dfs/([^/]++)(*:2077)|references/(?|roles/([^/]++)(?|/edit(*:2122)|(*:2131))|js/([^/]++)(*:2152)|nav/roles/([^/]++)(?|/edit(*:2187)|(*:2196))))|f(?|ields/(?|fieldsets/([^/]++)(?|/edit(*:2247)|(*:2256))|blueprints/([^/]++)/([^/]++)(?|(*:2297)))|orms/([^/]++)(?|/(?|submissions(?|/(?|actions(?|(*:2356)|/list(*:2370))|create(*:2386)|([^/]++)(?|(*:2406)|/edit(*:2420)|(*:2429)))|(*:2440))|e(?|dit(*:2457)|xport/([^/]++)(*:2480))|blueprint(?|(*:2502)))|(*:2513)))|u(?|pdater/([^/]++)(?|(*:2546)|/changelog(*:2565))|ser(?|s/([^/]++)(?|(*:2594)|/(?|edit(*:2611)|password(*:2628))|(*:2638))|\\-groups/([^/]++)(?|(*:2668)|/edit(*:2682)|(*:2691)))|tilities/cache/cache/([^/]++)(?|(*:2734)|/warm(*:2748)))|roles/([^/]++)(?|(*:2776)|/edit(*:2790)|(*:2799))|(.*)(*:2813))|/img/(?|asset/([^/]++)(?:/(.*))?(*:2855)|http/([^/]++)(?:/([^/]++))?(*:2891)|(.*)(*:2904))|/\\!/(?|forms/([^/]++)(*:2935)|auth/(?|password/reset/([^/]++)(*:2975)|activate/([^/]++)(*:3001)))|/et/phone/home/([^/]++)(*:3035)|/(.*)?(*:3050))/?$}sDu',
    ),
    3 => 
    array (
      49 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3q8ZJ2P2MJoff8la',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
            2 => 'day',
            3 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OnLA3GCqqRHaQpen',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s6aX4ByZG1dQWJyt',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IuN6e5MEu3VyJo04',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m0vop1vz82J0r8Kx',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FViY6r8OQzbbjC5G',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ed5JAp3xsuEuI1wK',
          ),
          1 => 
          array (
            0 => 'grammar_topic',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6p17exHpY8eIXNth',
          ),
          1 => 
          array (
            0 => 'dialogue_number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::myL13OfVPUTmZMw3',
          ),
          1 => 
          array (
            0 => 'dialogue_number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MQSQrfcaYTYJbVe3',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.show',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.edit',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::Kn7rY9XkIcFyBWYr',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::PGJ4RJ7iBw2Mqnlo',
          ),
          1 => 
          array (
            0 => 'asset_container',
            1 => 'path',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.blueprint.edit',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.blueprint.update',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.update',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.asset-containers.destroy',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::z09tbsNW5efDEuGU',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'asset_container',
            1 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.folders.actions.run',
          ),
          1 => 
          array (
            0 => 'asset_container',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::Q0XUHYlmyjewRfuY',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'asset_container',
            1 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.browse.edit',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'asset_container',
            1 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.browse.show',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'asset_container',
            1 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.show',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.edit',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.download',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.update',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.destroy',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::KbH2C47sujnvTw6y',
          ),
          1 => 
          array (
            0 => 'handle',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.svgs.show',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.show',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.edit',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.blueprint.edit',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.blueprint.update',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.tree.index',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.tree.update',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.pages.update',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.pages.create',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.pages.edit',
          ),
          1 => 
          array (
            0 => 'navigation',
            1 => 'edit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.update',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.navigation.destroy',
          ),
          1 => 
          array (
            0 => 'navigation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.show',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.edit',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.index',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.actions.run',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.actions.bulk',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.create',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.preview.create',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.reorder',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.store',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.edit',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.published.store',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.preview.edit',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.preview.popout',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.published.destroy',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.localize',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.revisions.index',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.revisions.store',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.revisions.show',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
            2 => 'revision',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.restore-revision',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::s6VWc4WQx2axXJUr',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
            2 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.entries.update',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'entry',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.scaffold',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.scaffold.create',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.index',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.create',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.show',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.edit',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.update',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.destroy',
          ),
          1 => 
          array (
            0 => 'collection',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.reorder',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.blueprints.store',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.tree.index',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.tree.update',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.update',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.collections.destroy',
          ),
          1 => 
          array (
            0 => 'collection',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.show',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.edit',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.index',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.create',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.show',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.edit',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.update',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.destroy',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'blueprint',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.reorder',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.blueprints.store',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.index',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.actions.run',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.actions.bulk',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.create',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.preview.create',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.store',
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.edit',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.published.store',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.published.destroy',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.revisions.index',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.revisions.store',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.revisions.show',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
            3 => 'revision',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.restore-revision',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.preview.edit',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.preview.popout',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.terms.update',
            'site' => NULL,
          ),
          1 => 
          array (
            0 => 'taxonomy',
            1 => 'term',
            2 => 'site',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.update',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.taxonomies.destroy',
          ),
          1 => 
          array (
            0 => 'taxonomy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.thumbnails.show',
            'size' => NULL,
            'orientation' => NULL,
          ),
          1 => 
          array (
            0 => 'encoded_asset',
            1 => 'size',
            2 => 'orientation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.edit',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.variables.update',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.blueprint.edit',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.blueprint.update',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.update',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.destroy',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.globals.variables.edit',
          ),
          1 => 
          array (
            0 => 'global_set',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.assets.pdfs.show',
          ),
          1 => 
          array (
            0 => 'encoded_asset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.role.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.destroy',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.role.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.preferences.nav.role.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fieldsets.edit',
          ),
          1 => 
          array (
            0 => 'fieldset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fieldsets.update',
          ),
          1 => 
          array (
            0 => 'fieldset',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.fieldsets.destroy',
          ),
          1 => 
          array (
            0 => 'fieldset',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.blueprints.edit',
          ),
          1 => 
          array (
            0 => 'namespace',
            1 => 'handle',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.blueprints.update',
          ),
          1 => 
          array (
            0 => 'namespace',
            1 => 'handle',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.actions.run',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.actions.bulk',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.create',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.show',
          ),
          1 => 
          array (
            0 => 'form',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.edit',
          ),
          1 => 
          array (
            0 => 'form',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.update',
          ),
          1 => 
          array (
            0 => 'form',
            1 => 'submission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.destroy',
          ),
          1 => 
          array (
            0 => 'form',
            1 => 'submission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.index',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.submissions.store',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.edit',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.export',
          ),
          1 => 
          array (
            0 => 'form',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.blueprint.edit',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.blueprint.update',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.show',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.update',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.forms.destroy',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.updater.product',
          ),
          1 => 
          array (
            0 => 'marketplaceProductSlug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.generated::6e8OWCZ7zreIGJyA',
          ),
          1 => 
          array (
            0 => 'marketplaceProductSlug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.password.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.show',
          ),
          1 => 
          array (
            0 => 'user_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.edit',
          ),
          1 => 
          array (
            0 => 'user_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.update',
          ),
          1 => 
          array (
            0 => 'user_group',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.user-groups.destroy',
          ),
          1 => 
          array (
            0 => 'user_group',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.cache.clear',
          ),
          1 => 
          array (
            0 => 'cache',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.utilities.cache.warm',
          ),
          1 => 
          array (
            0 => 'cache',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.cp.404',
          ),
          1 => 
          array (
            0 => 'segments',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::njAHceqb21EBYZvG',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'container',
            1 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4bxqnZScUDxtwjIE',
            'filename' => NULL,
          ),
          1 => 
          array (
            0 => 'url',
            1 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uo8p0P09oa4dq9lX',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.forms.submit',
          ),
          1 => 
          array (
            0 => 'form',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.account.activate',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.phone-home',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statamic.site',
            'segments' => NULL,
          ),
          1 => 
          array (
            0 => 'segments',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::aPmjmNg3vF4CXjo5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::aPmjmNg3vF4CXjo5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5lDPeZuHtoy8Pb6o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bf80000000000000000";}";s:4:"hash";s:44:"lZpVpI0C7jYAYme5PE2bxnKO3Xg0fNTDlBDiQNMJ/sA=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5lDPeZuHtoy8Pb6o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5W1AL31MMqOvciJC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5W1AL31MMqOvciJC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog-how-i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/2018/09/29/how-i-learned-ukrainian',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@showHowILearnedUkrainian',
        'controller' => 'App\\Http\\Controllers\\BlogController@showHowILearnedUkrainian',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog-how-i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog-where-to' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/2018/09/22/where-to-learn-ukrainian-in-lviv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@showWhereToLearnUkrainianInLviv',
        'controller' => 'App\\Http\\Controllers\\BlogController@showWhereToLearnUkrainianInLviv',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog-where-to',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog-how-to' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/2018/09/15/how-to-learn-ukrainian-online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@showHowToLearnUkrainianOnline',
        'controller' => 'App\\Http\\Controllers\\BlogController@showHowToLearnUkrainianOnline',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog-how-to',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3q8ZJ2P2MJoff8la' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/{year}/{month}/{day}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@show',
        'controller' => 'App\\Http\\Controllers\\BlogController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3q8ZJ2P2MJoff8la',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p6HaTqRlbKmopdo1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:343:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:124:"function() {
    if (\\Auth::user()->id != 1) {
        return \\redirect(\'/\');
    }

    return \\view(\'create_blog_post\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bf10000000000000000";}";s:4:"hash";s:44:"fbabX3dxN8oBDQa6TuXiBOOAlNJKkDoebi7FQ93y/es=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::p6HaTqRlbKmopdo1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EyWrRwxLPc0EYnvv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:612:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:393:"function() {

    if (\\Auth::user()->id != 1) {
        return \\redirect(\'/\');
    }

    $title = \\request()->title;
    $slug = \\Carbon\\Carbon::now()->toDateString() . "-". \\Illuminate\\Support\\Str::slug($title);
    $content = $title . "\\r\\n" . \\request()->content;

    \\Illuminate\\Support\\Facades\\Storage::put("/blogs-text/blog-".$slug.".txt", $content);

    return \\redirect(\'/blogs\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bef0000000000000000";}";s:4:"hash";s:44:"4eMlb/SSyuDfr/6tcgkUkppbTOGK15YitAzy1uCAEX8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EyWrRwxLPc0EYnvv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OnLA3GCqqRHaQpen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:948:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:729:"function($slug) {

    $file_path = \'/blogs-text/blog-\' . $slug . \'.txt\';

    $content = \\Illuminate\\Support\\Facades\\Storage::get($file_path);
    
    // Strips the title of the blog post
    // Find the position of the first "\\r\\n"
    $position = \\strpos($content, "\\r\\n");

    if ($position !== false) {
        // If "\\r\\n" is found, extract the substring starting from the next character
        $title = \\substr($content, 0, $position);
        $content = \\substr($content, $position + 2);
    } else {
        // If "\\r\\n" is not found, return the original string
        $content = $content;
        $title = "";
    }

    return \\view(\'edit_blog_post\', [\'title\' => $title, \'content\' => $content, \'slug\' => $slug]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bed0000000000000000";}";s:4:"hash";s:44:"Jzbuz4grthz8G2ka0XO1I6ww4kM4bXjrBaBHC6/ZTns=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OnLA3GCqqRHaQpen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s6aX4ByZG1dQWJyt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:452:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:233:"function($slug) {


    $title = \\request()->title;
    $content = $title . "\\r\\n" .  \\request()->content;

    \\Illuminate\\Support\\Facades\\Storage::put("/blogs-text/blog-".$slug.".txt", $content);

    return \\redirect(\'/blogs\');

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000beb0000000000000000";}";s:4:"hash";s:44:"SEk77rp01vJwZrO/EddFhMuUy5bmVAjevr48hNmE6CM=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s6aX4ByZG1dQWJyt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nwsYk2WXPK1eMiWB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nwsYk2WXPK1eMiWB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z3KzMaZYW2YBKwCo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::z3KzMaZYW2YBKwCo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YoShZK9Zqj6rfAly' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YoShZK9Zqj6rfAly',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::50WVfYBxCqsPKXKy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::50WVfYBxCqsPKXKy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:264:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000be90000000000000000";}";s:4:"hash";s:44:"x9DCKhORevV7l5HgoSYMUjo6H71f+CrMYEjClNe3vUs=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gwyPJxxyS6r90MFL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:342:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:123:"function() {
    if (\\Auth::user()->id != 1) {
        return \\redirect(\'/\');
    }

    return \\view(\'admin_dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000010420000000000000000";}";s:4:"hash";s:44:"lWGK/nTNO0Hb1NeVtv5xHlWKvEJbxbgnlL02O0+snXE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gwyPJxxyS6r90MFL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5IA5TGfJ6aYT0CmT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@homePage',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@homePage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5IA5TGfJ6aYT0CmT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuLm94AAy7WYAufV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@aboutPage',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@aboutPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yuLm94AAy7WYAufV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hLZpiNh4Bjq5i2fR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@linksPage',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@linksPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hLZpiNh4Bjq5i2fR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A35gP6QBbmWV0S5i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grammar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@grammarTableOfContents',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@grammarTableOfContents',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::A35gP6QBbmWV0S5i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ed5JAp3xsuEuI1wK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'grammar/{grammar_topic}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@grammarTopic',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@grammarTopic',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ed5JAp3xsuEuI1wK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ebSmY5hP7kKqqWyZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lessons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@lessonTableOfContents',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@lessonTableOfContents',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ebSmY5hP7kKqqWyZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6p17exHpY8eIXNth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lessons/{dialogue_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@lessonPage',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@lessonPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6p17exHpY8eIXNth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::myL13OfVPUTmZMw3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lessons/flashcards/{dialogue_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@lessonFlashcardsPage',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@lessonFlashcardsPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::myL13OfVPUTmZMw3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q02dE4pDEgGCqHhi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'topical-lesson',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@topicalLessonTableOfContents',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@topicalLessonTableOfContents',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::q02dE4pDEgGCqHhi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MQSQrfcaYTYJbVe3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'topical-lesson/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticPagesController@topicalLessonPage',
        'controller' => 'App\\Http\\Controllers\\StaticPagesController@topicalLessonPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MQSQrfcaYTYJbVe3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gIl96nUCyPZGzXbj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/grammar/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminGrammarController@create',
        'controller' => 'App\\Http\\Controllers\\AdminGrammarController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gIl96nUCyPZGzXbj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IuN6e5MEu3VyJo04' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/grammar/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminGrammarController@edit',
        'controller' => 'App\\Http\\Controllers\\AdminGrammarController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IuN6e5MEu3VyJo04',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fIXioJPqTWmebcCA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/grammar/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminGrammarController@store',
        'controller' => 'App\\Http\\Controllers\\AdminGrammarController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fIXioJPqTWmebcCA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fIsDDk8c60igei7v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/grammar/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminGrammarController@update',
        'controller' => 'App\\Http\\Controllers\\AdminGrammarController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fIsDDk8c60igei7v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pJRtIVUXnvv6Kyme' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/grammar/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminGrammarController@index',
        'controller' => 'App\\Http\\Controllers\\AdminGrammarController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pJRtIVUXnvv6Kyme',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7TtCts0bKXBpAj8S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topical-lesson/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@create',
        'controller' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7TtCts0bKXBpAj8S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZOJxTKF92bF5twp7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topical-lesson/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@store',
        'controller' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZOJxTKF92bF5twp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m0vop1vz82J0r8Kx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topical-lesson/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@edit',
        'controller' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m0vop1vz82J0r8Kx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FViY6r8OQzbbjC5G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/topical-lesson/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@update',
        'controller' => 'App\\Http\\Controllers\\AdminTopicalLessonsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FViY6r8OQzbbjC5G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CRbsYQ631jGE2ZRm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/flashcard/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminFlashcardController@create',
        'controller' => 'App\\Http\\Controllers\\AdminFlashcardController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CRbsYQ631jGE2ZRm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K0XCH8LvDwXQolGf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/flashcard/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminFlashcardController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdminFlashcardController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K0XCH8LvDwXQolGf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wMzJUTJSSHLlMzgv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/flashcard/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminFlashcardController@store',
        'controller' => 'App\\Http\\Controllers\\AdminFlashcardController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wMzJUTJSSHLlMzgv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CJJl76ACfXHOb4tp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/flashcard/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminFlashcardController@index',
        'controller' => 'App\\Http\\Controllers\\AdminFlashcardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CJJl76ACfXHOb4tp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7hJMJ4UplYObWXQ3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'flashcard-studying',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FlashcardManagerController@showFlashcardManager',
        'controller' => 'App\\Http\\Controllers\\FlashcardManagerController@showFlashcardManager',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7hJMJ4UplYObWXQ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ejk1AacyDBbQFO11' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'flashcard-studying/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FlashcardManagerController@store',
        'controller' => 'App\\Http\\Controllers\\FlashcardManagerController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ejk1AacyDBbQFO11',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IG3pKQbPYvD4Nzrd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'study-record/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FlashcardStudyRecordController@test',
        'controller' => 'App\\Http\\Controllers\\FlashcardStudyRecordController@test',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IG3pKQbPYvD4Nzrd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QwI5jS2IMrT9r75a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'study-record/pass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FlashcardStudyRecordController@pass',
        'controller' => 'App\\Http\\Controllers\\FlashcardStudyRecordController@pass',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QwI5jS2IMrT9r75a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9sv45v2jJOldJf4R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'study-record/fail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\FlashcardStudyRecordController@fail',
        'controller' => 'App\\Http\\Controllers\\FlashcardStudyRecordController@fail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9sv45v2jJOldJf4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VgWfYlIB35LUrWI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'premium\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000010600000000000000000";}";s:4:"hash";s:44:"ph5d94NfgOKCnJb6qyvyhZlMLQaJjuo3C/fwb44hRrg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6VgWfYlIB35LUrWI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3gWL5W4pNXeEK7ge' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'premium-1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:264:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'premium-1\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000010620000000000000000";}";s:4:"hash";s:44:"u1HlFMOMcZv4i7ArhQ9Y1cZnEiap+2qc1iqh8/rEGj4=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3gWL5W4pNXeEK7ge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\LoginController@showLoginForm',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\LoginController@showLoginForm',
        'as' => 'statamic.cp.login',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\LoginController@login',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\LoginController@login',
        'as' => 'statamic.cp.',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\LoginController@logout',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\LoginController@logout',
        'as' => 'statamic.cp.logout',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'statamic.cp.password.request',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/auth/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'statamic.cp.password.email',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ResetPasswordController@showResetForm',
        'as' => 'statamic.cp.password.reset',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.password.reset.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ResetPasswordController@reset',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ResetPasswordController@reset',
        'as' => 'statamic.cp.password.reset.action',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\CsrfTokenController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\CsrfTokenController',
        'as' => 'statamic.cp.token',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.extend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/extend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ExtendSessionController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ExtendSessionController',
        'as' => 'statamic.cp.extend',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.unauthorized' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/unauthorized',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\UnauthorizedController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\UnauthorizedController',
        'as' => 'statamic.cp.unauthorized',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.impersonation.stop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/auth/stop-impersonating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ImpersonationController@stop',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Auth\\ImpersonationController@stop',
        'as' => 'statamic.cp.impersonation.stop',
        'namespace' => NULL,
        'prefix' => 'cp/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\StartPageController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\StartPageController',
        'as' => 'statamic.cp.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\DashboardController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\DashboardController@index',
        'as' => 'statamic.cp.dashboard',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::KbH2C47sujnvTw6y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/select-site/{handle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\SelectSiteController@select',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\SelectSiteController@select',
        'as' => 'statamic.cp.generated::KbH2C47sujnvTw6y',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/navigation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/{navigation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/{navigation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/navigation/{navigation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/navigation/{navigation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.navigation.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.blueprint.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/{navigation}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationBlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationBlueprintController@edit',
        'as' => 'statamic.cp.navigation.blueprint.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.blueprint.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/navigation/{navigation}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationBlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationBlueprintController@update',
        'as' => 'statamic.cp.navigation.blueprint.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.tree.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/{navigation}/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationTreeController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationTreeController@index',
        'as' => 'statamic.cp.navigation.tree.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.tree.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/navigation/{navigation}/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationTreeController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationTreeController@update',
        'as' => 'statamic.cp.navigation.tree.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/navigation/{navigation}/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationPagesController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationPagesController@update',
        'as' => 'statamic.cp.navigation.pages.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/{navigation}/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationPagesController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationPagesController@create',
        'as' => 'statamic.cp.navigation.pages.create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.navigation.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/navigation/{navigation}/pages/{edit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationPagesController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Navigation\\NavigationPagesController@edit',
        'as' => 'statamic.cp.navigation.pages.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/collections/{collection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/collections/{collection}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.scaffold' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/scaffold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ScaffoldCollectionController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ScaffoldCollectionController@index',
        'as' => 'statamic.cp.collections.scaffold',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.scaffold.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/scaffold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ScaffoldCollectionController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ScaffoldCollectionController@create',
        'as' => 'statamic.cp.collections.scaffold.create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/blueprints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/blueprints/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/blueprints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/blueprints/{blueprint}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/blueprints/{blueprint}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/collections/{collection}/blueprints/{blueprint}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/collections/{collection}/blueprints/{blueprint}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.blueprints.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionBlueprintsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.blueprints.reorder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/blueprints/reorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ReorderCollectionBlueprintsController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ReorderCollectionBlueprintsController',
        'as' => 'statamic.cp.collections.blueprints.reorder',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.tree.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionTreeController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionTreeController@index',
        'as' => 'statamic.cp.collections.tree.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.tree.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/collections/{collection}/tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionTreeController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\CollectionTreeController@update',
        'as' => 'statamic.cp.collections.tree.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@index',
        'as' => 'statamic.cp.collections.entries.index',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryActionController@run',
        'as' => 'statamic.cp.collections.entries.actions.run',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.actions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/actions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryActionController@bulkActions',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryActionController@bulkActions',
        'as' => 'statamic.cp.collections.entries.actions.bulk',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries/create/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@create',
        'as' => 'statamic.cp.collections.entries.create',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.preview.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/create/{site}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryPreviewController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryPreviewController@create',
        'as' => 'statamic.cp.collections.entries.preview.create',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.reorder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/reorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ReorderEntriesController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\ReorderEntriesController',
        'as' => 'statamic.cp.collections.entries.reorder',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@store',
        'as' => 'statamic.cp.collections.entries.store',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@edit',
        'as' => 'statamic.cp.collections.entries.edit',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.published.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\PublishedEntriesController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\PublishedEntriesController@store',
        'as' => 'statamic.cp.collections.entries.published.store',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.published.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/unpublish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\PublishedEntriesController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\PublishedEntriesController@destroy',
        'as' => 'statamic.cp.collections.entries.published.destroy',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.localize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/localize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\LocalizeEntryController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\LocalizeEntryController',
        'as' => 'statamic.cp.collections.entries.localize',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.revisions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/revisions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.entries.revisions.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryRevisionsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryRevisionsController@index',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.revisions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/revisions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.entries.revisions.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryRevisionsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryRevisionsController@store',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.revisions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/revisions/{revision}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.collections.entries.revisions.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryRevisionsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryRevisionsController@show',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.restore-revision' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/restore-revision',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\RestoreEntryRevisionController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\RestoreEntryRevisionController',
        'as' => 'statamic.cp.collections.entries.restore-revision',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.preview.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryPreviewController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryPreviewController@edit',
        'as' => 'statamic.cp.collections.entries.preview.edit',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.preview.popout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryPreviewController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntryPreviewController@show',
        'as' => 'statamic.cp.collections.entries.preview.popout',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.collections.entries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Collections\\EntriesController@update',
        'as' => 'statamic.cp.collections.entries.update',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::s6VWc4WQx2axXJUr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/collections/{collection}/entries/{entry}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:281:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:63:"fn ($collection, $entry, $slug) => \\redirect($entry->editUrl())";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000010ab0000000000000000";}";s:4:"hash";s:44:"W+XoIEQmQ1jFVS7Oac6AXXvPtV7kwpkaR5d2g+ae/VA=";}}',
        'as' => 'statamic.cp.generated::s6VWc4WQx2axXJUr',
        'namespace' => NULL,
        'prefix' => 'cp/collections/{collection}/entries/{entry}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomiesController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints/{blueprint}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints/{blueprint}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints/{blueprint}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints/{blueprint}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.blueprints.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TaxonomyBlueprintsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.blueprints.reorder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/blueprints/reorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\ReorderTaxonomyBlueprintsController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\ReorderTaxonomyBlueprintsController',
        'as' => 'statamic.cp.taxonomies.blueprints.reorder',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@index',
        'as' => 'statamic.cp.taxonomies.terms.index',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermActionController@run',
        'as' => 'statamic.cp.taxonomies.terms.actions.run',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.actions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/actions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermActionController@bulkActions',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermActionController@bulkActions',
        'as' => 'statamic.cp.taxonomies.terms.actions.bulk',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/create/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@create',
        'as' => 'statamic.cp.taxonomies.terms.create',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.preview.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/create/{site}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermPreviewController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermPreviewController@create',
        'as' => 'statamic.cp.taxonomies.terms.preview.create',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@store',
        'as' => 'statamic.cp.taxonomies.terms.store',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@edit',
        'as' => 'statamic.cp.taxonomies.terms.edit',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.published.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\PublishedTermsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\PublishedTermsController@store',
        'as' => 'statamic.cp.taxonomies.terms.published.store',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.published.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\PublishedTermsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\PublishedTermsController@destroy',
        'as' => 'statamic.cp.taxonomies.terms.published.destroy',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.revisions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}/revisions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.terms.revisions.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermRevisionsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermRevisionsController@index',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.revisions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}/revisions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.terms.revisions.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermRevisionsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermRevisionsController@store',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.revisions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}/revisions/{revision}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.taxonomies.terms.revisions.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermRevisionsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermRevisionsController@show',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.restore-revision' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}/restore-revision',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\RestoreTermRevisionController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\RestoreTermRevisionController',
        'as' => 'statamic.cp.taxonomies.terms.restore-revision',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.preview.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermPreviewController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermPreviewController@edit',
        'as' => 'statamic.cp.taxonomies.terms.preview.edit',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.preview.popout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermPreviewController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermPreviewController@show',
        'as' => 'statamic.cp.taxonomies.terms.preview.popout',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.taxonomies.terms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Taxonomies\\TermsController@update',
        'as' => 'statamic.cp.taxonomies.terms.update',
        'namespace' => NULL,
        'prefix' => 'cp/taxonomies/{taxonomy}/terms/{term}/{site?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/globals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@index',
        'as' => 'statamic.cp.globals.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/globals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@create',
        'as' => 'statamic.cp.globals.create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/globals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@store',
        'as' => 'statamic.cp.globals.store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/globals/{global_set}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@edit',
        'as' => 'statamic.cp.globals.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/globals/{global_set}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@update',
        'as' => 'statamic.cp.globals.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/globals/{global_set}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsController@destroy',
        'as' => 'statamic.cp.globals.destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.variables.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/globals/{global_set}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalVariablesController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalVariablesController@edit',
        'as' => 'statamic.cp.globals.variables.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.variables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/globals/{global_set}/variables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalVariablesController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalVariablesController@update',
        'as' => 'statamic.cp.globals.variables.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.blueprint.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/globals/{global_set}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsBlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsBlueprintController@edit',
        'as' => 'statamic.cp.globals.blueprint.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.globals.blueprint.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/globals/{global_set}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsBlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Globals\\GlobalsBlueprintController@update',
        'as' => 'statamic.cp.globals.blueprint.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/asset-containers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/asset-containers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/asset-containers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/asset-containers/{asset_container}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/asset-containers/{asset_container}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/asset-containers/{asset_container}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/asset-containers/{asset_container}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.asset-containers.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainersController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::Kn7rY9XkIcFyBWYr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/asset-containers/{asset_container}/folders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FoldersController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FoldersController@store',
        'as' => 'statamic.cp.generated::Kn7rY9XkIcFyBWYr',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::PGJ4RJ7iBw2Mqnlo' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/asset-containers/{asset_container}/folders/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FoldersController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FoldersController@update',
        'as' => 'statamic.cp.generated::PGJ4RJ7iBw2Mqnlo',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.blueprint.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/asset-containers/{asset_container}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainerBlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainerBlueprintController@edit',
        'as' => 'statamic.cp.asset-containers.blueprint.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.asset-containers.blueprint.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/asset-containers/{asset_container}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainerBlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetContainerBlueprintController@update',
        'as' => 'statamic.cp.asset-containers.blueprint.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/assets/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\ActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\ActionController@run',
        'as' => 'statamic.cp.assets.actions.run',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.actions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/assets/actions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\ActionController@bulkActions',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\ActionController@bulkActions',
        'as' => 'statamic.cp.assets.actions.bulk',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.browse.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/browse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@index',
        'as' => 'statamic.cp.assets.browse.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::z09tbsNW5efDEuGU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/browse/search/{asset_container}/{path?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@search',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@search',
        'as' => 'statamic.cp.generated::z09tbsNW5efDEuGU',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.folders.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/assets/browse/folders/{asset_container}/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FolderActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FolderActionController@run',
        'as' => 'statamic.cp.assets.folders.actions.run',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::Q0XUHYlmyjewRfuY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/browse/folders/{asset_container}/{path?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@folder',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@folder',
        'as' => 'statamic.cp.generated::Q0XUHYlmyjewRfuY',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.browse.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/browse/{asset_container}/{path?}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@edit',
        'as' => 'statamic.cp.assets.browse.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.browse.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/browse/{asset_container}/{path?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\BrowserController@show',
        'as' => 'statamic.cp.assets.browse.show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::rKFRKDvsXyJ0QEXV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/assets-fieldtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FieldtypeController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\FieldtypeController@index',
        'as' => 'statamic.cp.generated::rKFRKDvsXyJ0QEXV',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/assets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/{encoded_asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/{encoded_asset}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/assets/{encoded_asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/assets/{encoded_asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.assets.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/assets/{encoded_asset}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@download',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\AssetsController@download',
        'as' => 'statamic.cp.assets.download',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.thumbnails.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/thumbnails/{encoded_asset}/{size?}/{orientation?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\ThumbnailController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\ThumbnailController@show',
        'as' => 'statamic.cp.assets.thumbnails.show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.svgs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/svgs/{encoded_asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\SvgController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\SvgController@show',
        'as' => 'statamic.cp.assets.svgs.show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.assets.pdfs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/pdfs/{encoded_asset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Assets\\PdfController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Assets\\PdfController@show',
        'as' => 'statamic.cp.assets.pdfs.show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fields.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsController@index',
        'as' => 'statamic.cp.fields.index',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fields.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/fields/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsController@edit',
        'as' => 'statamic.cp.fields.edit',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fields.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/fields/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsController@update',
        'as' => 'statamic.cp.fields.update',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::uwWXHfdhiko8ULTF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/field-meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\MetaController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\MetaController@show',
        'as' => 'statamic.cp.generated::uwWXHfdhiko8ULTF',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fieldsets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/fieldsets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.fieldsets.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@index',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fieldsets.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/fieldsets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.fieldsets.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@create',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fieldsets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/fields/fieldsets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.fieldsets.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@store',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fieldsets.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/fieldsets/{fieldset}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.fieldsets.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@edit',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fieldsets.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/fields/fieldsets/{fieldset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.fieldsets.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@update',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.fieldsets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/fields/fieldsets/{fieldset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.fieldsets.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldsetController@destroy',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.blueprints.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/blueprints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\BlueprintController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\BlueprintController@index',
        'as' => 'statamic.cp.blueprints.index',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.blueprints.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/blueprints/{namespace}/{handle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\BlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\BlueprintController@edit',
        'as' => 'statamic.cp.blueprints.edit',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.blueprints.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/fields/blueprints/{namespace}/{handle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\BlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\BlueprintController@update',
        'as' => 'statamic.cp.blueprints.update',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::Eg0gnzQ6wUijictR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fields/fieldtypes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldtypesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fields\\FieldtypesController@index',
        'as' => 'statamic.cp.generated::Eg0gnzQ6wUijictR',
        'namespace' => NULL,
        'prefix' => 'cp/fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.updater' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/updater',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdaterController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdaterController@index',
        'as' => 'statamic.cp.updater',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::ZQVJVl3UAzC95Eyo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/updater/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdaterController@count',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdaterController@count',
        'as' => 'statamic.cp.generated::ZQVJVl3UAzC95Eyo',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.updater.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/updater/{marketplaceProductSlug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdateProductController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdateProductController@show',
        'as' => 'statamic.cp.updater.product',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::6e8OWCZ7zreIGJyA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/updater/{marketplaceProductSlug}/changelog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdateProductController@changelog',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Updater\\UpdateProductController@changelog',
        'as' => 'statamic.cp.generated::6e8OWCZ7zreIGJyA',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.duplicates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/duplicates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\DuplicatesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\DuplicatesController@index',
        'as' => 'statamic.cp.duplicates',
        'namespace' => NULL,
        'prefix' => 'cp/duplicates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.duplicates.regenerate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/duplicates/regenerate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\DuplicatesController@regenerate',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\DuplicatesController@regenerate',
        'as' => 'statamic.cp.duplicates.regenerate',
        'namespace' => NULL,
        'prefix' => 'cp/duplicates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.addons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/addons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\AddonsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\AddonsController@index',
        'as' => 'statamic.cp.addons.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.generated::MxZIsuWplGxhU4E5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/addons/editions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\AddonEditionsController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\AddonEditionsController',
        'as' => 'statamic.cp.generated::MxZIsuWplGxhU4E5',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/forms/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\ActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\ActionController@run',
        'as' => 'statamic.cp.forms.actions.run',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.actions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/forms/actions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\ActionController@bulkActions',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\ActionController@bulkActions',
        'as' => 'statamic.cp.forms.actions.bulk',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/forms/{form}/submissions/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\SubmissionActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\SubmissionActionController@run',
        'as' => 'statamic.cp.forms.submissions.actions.run',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.actions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/forms/{form}/submissions/actions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\SubmissionActionController@bulkActions',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\SubmissionActionController@bulkActions',
        'as' => 'statamic.cp.forms.submissions.actions.bulk',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/submissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/submissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/forms/{form}/submissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/submissions/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/submissions/{submission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/forms/{form}/submissions/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.submissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/forms/{form}/submissions/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.forms.submissions.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormSubmissionsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/export/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormExportController@export',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormExportController@export',
        'as' => 'statamic.cp.forms.export',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.blueprint.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/forms/{form}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormBlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormBlueprintController@edit',
        'as' => 'statamic.cp.forms.blueprint.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.forms.blueprint.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/forms/{form}/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormBlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Forms\\FormBlueprintController@update',
        'as' => 'statamic.cp.forms.blueprint.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.actions.run' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/users/actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserActionController@run',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserActionController@run',
        'as' => 'statamic.cp.users.actions.run',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.actions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/users/actions/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserActionController@bulkActions',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserActionController@bulkActions',
        'as' => 'statamic.cp.users.actions.bulk',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.blueprint.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/users/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserBlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserBlueprintController@edit',
        'as' => 'statamic.cp.users.blueprint.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.blueprint.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/users/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserBlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserBlueprintController@update',
        'as' => 'statamic.cp.users.blueprint.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.users.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UsersController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.users.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/users/{user}/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\PasswordController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\PasswordController@update',
        'as' => 'statamic.cp.users.password.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\AccountController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\AccountController',
        'as' => 'statamic.cp.account',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.blueprint.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/user-groups/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupBlueprintController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupBlueprintController@edit',
        'as' => 'statamic.cp.user-groups.blueprint.edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.blueprint.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/user-groups/blueprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupBlueprintController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupBlueprintController@update',
        'as' => 'statamic.cp.user-groups.blueprint.update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/user-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/user-groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/user-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/user-groups/{user_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/user-groups/{user_group}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/user-groups/{user_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user-groups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/user-groups/{user_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.user-groups.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserGroupsController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.create',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@create',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@create',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.store',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@store',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.show',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@show',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.edit',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@edit',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'cp/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.update',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@update',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.roles.destroy',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\RolesController@destroy',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.user.exists' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/user-exists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserWizardController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Users\\UserWizardController',
        'as' => 'statamic.cp.user.exists',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\SearchController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\SearchController',
        'as' => 'statamic.cp.search',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UtilitiesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UtilitiesController@index',
        'as' => 'statamic.cp.utilities.index',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access cache utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\CacheController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\CacheController@index',
        'as' => 'statamic.cp.utilities.cache',
        'namespace' => '',
        'prefix' => 'cp/utilities',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.cache.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/utilities/cache/cache/{cache}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access cache utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\CacheController@clear',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\CacheController@clear',
        'as' => 'statamic.cp.utilities.cache.clear',
        'namespace' => '',
        'prefix' => 'cp/utilities/cache',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.cache.warm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/utilities/cache/cache/{cache}/warm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access cache utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\CacheController@warm',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\CacheController@warm',
        'as' => 'statamic.cp.utilities.cache.warm',
        'namespace' => '',
        'prefix' => 'cp/utilities/cache',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.phpinfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities/phpinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access phpinfo utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\PhpInfoController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\PhpInfoController',
        'as' => 'statamic.cp.utilities.phpinfo',
        'namespace' => '',
        'prefix' => 'cp/utilities',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access search utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UtilitiesController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UtilitiesController@show',
        'as' => 'statamic.cp.utilities.search',
        'namespace' => '',
        'prefix' => 'cp/utilities',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.search.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/utilities/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access search utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UpdateSearchController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UpdateSearchController@update',
        'as' => 'statamic.cp.utilities.search.update',
        'namespace' => '',
        'prefix' => 'cp/utilities/search',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access email utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UtilitiesController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\UtilitiesController@show',
        'as' => 'statamic.cp.utilities.email',
        'namespace' => '',
        'prefix' => 'cp/utilities',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.email.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/utilities/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access email utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\EmailController@send',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Utilities\\EmailController@send',
        'as' => 'statamic.cp.utilities.email.',
        'namespace' => '',
        'prefix' => 'cp/utilities/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.licensing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities/licensing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access licensing utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\LicensingController@show',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\LicensingController@show',
        'as' => 'statamic.cp.utilities.licensing',
        'namespace' => '',
        'prefix' => 'cp/utilities',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.utilities.licensing.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/utilities/licensing/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'can:access licensing utility',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\LicensingController@refresh',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\LicensingController@refresh',
        'as' => 'statamic.cp.utilities.licensing.refresh',
        'namespace' => '',
        'prefix' => 'cp/utilities/licensing',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.relationship.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fieldtypes/relationship',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\RelationshipFieldtypeController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\RelationshipFieldtypeController@index',
        'as' => 'statamic.cp.relationship.index',
        'namespace' => NULL,
        'prefix' => 'cp/fieldtypes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.relationship.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/fieldtypes/relationship/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\RelationshipFieldtypeController@data',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\RelationshipFieldtypeController@data',
        'as' => 'statamic.cp.relationship.data',
        'namespace' => NULL,
        'prefix' => 'cp/fieldtypes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.relationship.filters' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/fieldtypes/relationship/filters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\RelationshipFieldtypeController@filters',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\RelationshipFieldtypeController@filters',
        'as' => 'statamic.cp.relationship.filters',
        'namespace' => NULL,
        'prefix' => 'cp/fieldtypes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.markdown.preview' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/fieldtypes/markdown',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\MarkdownFieldtypeController@preview',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\MarkdownFieldtypeController@preview',
        'as' => 'statamic.cp.markdown.preview',
        'namespace' => NULL,
        'prefix' => 'cp/fieldtypes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.files.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/fieldtypes/files/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\FilesFieldtypeController@upload',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Fieldtypes\\FilesFieldtypeController@upload',
        'as' => 'statamic.cp.files.upload',
        'namespace' => NULL,
        'prefix' => 'cp/fieldtypes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.api.addons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/api/addons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.api.addons.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\API\\AddonsController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\API\\AddonsController@index',
        'namespace' => NULL,
        'prefix' => 'cp/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.api.templates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/api/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'as' => 'statamic.cp.api.templates.index',
        'uses' => 'Statamic\\Http\\Controllers\\CP\\API\\TemplatesController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\API\\TemplatesController@index',
        'namespace' => NULL,
        'prefix' => 'cp/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\PreferenceController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\PreferenceController@index',
        'as' => 'statamic.cp.preferences.index',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\UserPreferenceController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\UserPreferenceController@edit',
        'as' => 'statamic.cp.preferences.user.edit',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/preferences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\UserPreferenceController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\UserPreferenceController@update',
        'as' => 'statamic.cp.preferences.user.update',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\RolePreferenceController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\RolePreferenceController@edit',
        'as' => 'statamic.cp.preferences.role.edit',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/preferences/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\RolePreferenceController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\RolePreferenceController@update',
        'as' => 'statamic.cp.preferences.role.update',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.default.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/default/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\DefaultPreferenceController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\DefaultPreferenceController@edit',
        'as' => 'statamic.cp.preferences.default.edit',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.default.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/preferences/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\DefaultPreferenceController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\DefaultPreferenceController@update',
        'as' => 'statamic.cp.preferences.default.update',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/preferences/js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\PreferenceController@store',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\PreferenceController@store',
        'as' => 'statamic.cp.preferences.store',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/preferences/js/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\PreferenceController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\PreferenceController@destroy',
        'as' => 'statamic.cp.preferences.destroy',
        'namespace' => NULL,
        'prefix' => 'cp/preferences',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/nav',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\NavController@index',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\NavController@index',
        'as' => 'statamic.cp.preferences.nav.index',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/nav/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\UserNavController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\UserNavController@edit',
        'as' => 'statamic.cp.preferences.nav.user.edit',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/preferences/nav',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\UserNavController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\UserNavController@update',
        'as' => 'statamic.cp.preferences.nav.user.update',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/preferences/nav',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\UserNavController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\UserNavController@destroy',
        'as' => 'statamic.cp.preferences.nav.user.destroy',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/nav/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\RoleNavController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\RoleNavController@edit',
        'as' => 'statamic.cp.preferences.nav.role.edit',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/preferences/nav/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\RoleNavController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\RoleNavController@update',
        'as' => 'statamic.cp.preferences.nav.role.update',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/preferences/nav/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\RoleNavController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\RoleNavController@destroy',
        'as' => 'statamic.cp.preferences.nav.role.destroy',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.default.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/preferences/nav/default/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\DefaultNavController@edit',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\DefaultNavController@edit',
        'as' => 'statamic.cp.preferences.nav.default.edit',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.default.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'cp/preferences/nav/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\DefaultNavController@update',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\DefaultNavController@update',
        'as' => 'statamic.cp.preferences.nav.default.update',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.preferences.nav.default.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'cp/preferences/nav/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
          3 => 'Statamic\\Http\\Middleware\\RequireStatamicPro',
          4 => 'can:manage preferences',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\DefaultNavController@destroy',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\Preferences\\Nav\\DefaultNavController@destroy',
        'as' => 'statamic.cp.preferences.nav.default.destroy',
        'namespace' => NULL,
        'prefix' => 'cp/preferences/nav',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.session.timeout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/session-timeout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\SessionTimeoutController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\SessionTimeoutController',
        'as' => 'statamic.cp.session.timeout',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.playground' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/playground',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'statamic.cp.playground',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'statamic::playground',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.cp.404' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/{segments}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Statamic\\Http\\Middleware\\CP\\SwapExceptionHandler',
          1 => 'statamic.cp',
          2 => 'statamic.cp.authenticated',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\CP\\CpController@pageNotFound',
        'controller' => 'Statamic\\Http\\Controllers\\CP\\CpController@pageNotFound',
        'as' => 'statamic.cp.404',
        'namespace' => NULL,
        'prefix' => '/cp',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'segments' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::njAHceqb21EBYZvG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'img/asset/{container}/{path?}',
      'action' => 
      array (
        'uses' => 'Statamic\\Http\\Controllers\\GlideController@generateByAsset',
        'controller' => 'Statamic\\Http\\Controllers\\GlideController@generateByAsset',
        'namespace' => NULL,
        'prefix' => '//img',
        'where' => 
        array (
        ),
        'as' => 'generated::njAHceqb21EBYZvG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4bxqnZScUDxtwjIE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'img/http/{url}/{filename?}',
      'action' => 
      array (
        'uses' => 'Statamic\\Http\\Controllers\\GlideController@generateByUrl',
        'controller' => 'Statamic\\Http\\Controllers\\GlideController@generateByUrl',
        'namespace' => NULL,
        'prefix' => '//img',
        'where' => 
        array (
        ),
        'as' => 'generated::4bxqnZScUDxtwjIE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uo8p0P09oa4dq9lX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'img/{path}',
      'action' => 
      array (
        'uses' => 'Statamic\\Http\\Controllers\\GlideController@generateByPath',
        'controller' => 'Statamic\\Http\\Controllers\\GlideController@generateByPath',
        'namespace' => NULL,
        'prefix' => '//img',
        'where' => 
        array (
        ),
        'as' => 'generated::Uo8p0P09oa4dq9lX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.forms.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/forms/{form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Illuminate\\Foundation\\Http\\Middleware\\HandlePrecognitiveRequests',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\FormController@submit',
        'controller' => 'Statamic\\Http\\Controllers\\FormController@submit',
        'as' => 'statamic.forms.submit',
        'namespace' => NULL,
        'prefix' => '/!',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.protect.password.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '!/protect/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Statamic\\Auth\\Protect\\Protectors\\Password\\Controller@show',
        'controller' => 'Statamic\\Auth\\Protect\\Protectors\\Password\\Controller@show',
        'as' => 'statamic.protect.password.show',
        'namespace' => NULL,
        'prefix' => '/!',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.protect.password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/protect/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Statamic\\Auth\\Protect\\Protectors\\Password\\Controller@store',
        'controller' => 'Statamic\\Auth\\Protect\\Protectors\\Password\\Controller@store',
        'as' => 'statamic.protect.password.store',
        'namespace' => NULL,
        'prefix' => '/!',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\UserController@login',
        'controller' => 'Statamic\\Http\\Controllers\\UserController@login',
        'as' => 'statamic.login',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '!/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\UserController@logout',
        'controller' => 'Statamic\\Http\\Controllers\\UserController@logout',
        'as' => 'statamic.logout',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\UserController@register',
        'controller' => 'Statamic\\Http\\Controllers\\UserController@register',
        'as' => 'statamic.register',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\UserController@profile',
        'controller' => 'Statamic\\Http\\Controllers\\UserController@profile',
        'as' => 'statamic.profile',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\UserController@password',
        'controller' => 'Statamic\\Http\\Controllers\\UserController@password',
        'as' => 'statamic.password',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Statamic\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'statamic.password.email',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '!/auth/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Statamic\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'as' => 'statamic.password.reset',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.password.reset.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Statamic\\Http\\Controllers\\ResetPasswordController@reset',
        'as' => 'statamic.password.reset.action',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.account.activate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '!/auth/activate/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\CP\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\ActivateAccountController@showResetForm',
        'controller' => 'Statamic\\Http\\Controllers\\ActivateAccountController@showResetForm',
        'as' => 'statamic.account.activate',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.account.activate.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/auth/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\Http\\Middleware\\CP\\AuthGuard',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\ActivateAccountController@reset',
        'controller' => 'Statamic\\Http\\Controllers\\ActivateAccountController@reset',
        'as' => 'statamic.account.activate.action',
        'namespace' => NULL,
        'prefix' => '!/auth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '!/nocache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Statamic\\StaticCaching\\NoCache\\NoCacheLocalize',
        ),
        'uses' => 'Statamic\\StaticCaching\\NoCache\\Controller@__invoke',
        'controller' => 'Statamic\\StaticCaching\\NoCache\\Controller',
        'prefix' => '!/',
        'as' => 'statamic.',
        'namespace' => NULL,
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'App\\Http\\Middleware\\VerifyCsrfToken',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.phone-home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'et/phone/home/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Illuminate\\Routing\\Middleware\\ThrottleRequests:1',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\PhoneHomeController@__invoke',
        'controller' => 'Statamic\\Http\\Controllers\\PhoneHomeController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'statamic.phone-home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'statamic.site' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{segments?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Statamic\\Http\\Controllers\\FrontendController@index',
        'controller' => 'Statamic\\Http\\Controllers\\FrontendController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'statamic.site',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'segments' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
