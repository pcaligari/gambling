<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invites', function () {
    $foo = new stdClass();
    $foo->affiliate_id = null;
    $foo->name = 'Yosef Giles';
    $foo->latitude = null;
    $foo->longitude = null;
    $bar[] = $foo;
    return view('invites', [
        'affiliateList' => $bar
    ]);
});
