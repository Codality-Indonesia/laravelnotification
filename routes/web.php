<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\NotifikasiEmail;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('kirim-notifikasi', function() {
    $user = User::first();
    $user->notify(new NotifikasiEmail());
    return 'OK';
});