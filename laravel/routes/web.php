<?php

use App\Http\Controllers\InvitesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invites', [InvitesController::class, 'index']);
