<?php

use Core\Route;

Route::set('kaa', 'kaa(/<action>(/<param>))')
    ->defaults(
        [
            'namespace' => 'Kaa',
            'controller'    => 'index',
            'action'        => 'index',
        ]
    );
