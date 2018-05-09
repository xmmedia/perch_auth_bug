<?php
    switch($_SERVER['SERVER_NAME']) {

        default:
            include('config.production.php');
            break;
    }

    define('PERCH_LICENSE_KEY', '--key--');
    define('PERCH_EMAIL_FROM', 'email@email.com');
    define('PERCH_EMAIL_FROM_NAME', 'F L');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'UTC');

    define('PERCH_AUTH_PLUGIN', 'symfony');