<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowCounter;

Route::get('/counter/{counter}', ShowCounter::class)->name('counter.show');
