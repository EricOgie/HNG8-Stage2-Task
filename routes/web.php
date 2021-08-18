<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\OutputNameController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ResumeController::class, 'resume'])->name('resume');
Route::get('/myname', [OutputNameController::class, 'outputMyName']);
Route::post('/message', [MailController::class, 'sendMail'])->name('contact-me');
