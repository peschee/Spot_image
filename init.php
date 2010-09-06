<?php defined('SYSPATH') or die('No direct script access.');

Route::set('image', 'image/get/<file>', array('file' => '.+.(?:jpe?g|png|gif)'))
    ->defaults(array(
        'directory'  => 'spot',
        'controller' => 'image',
    ));