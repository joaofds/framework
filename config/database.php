<?php

return [
    /**
     * Options drivers (sqlite, mysql)
     * Change 'driver' => 'mysql' or 'sqlite'
     */

     'driver'=> 'mysql',

     'sqlite' => [
         'host' => 'database.db'
     ],

     'mysql' => [
         'host' => 'localhost',
         'database' => 'framework_php',
         'user' => 'root',
         'pass' => '',
         'charset' => 'utf8',
         'collation' => 'utf8_unicode_ci'
     ]
];