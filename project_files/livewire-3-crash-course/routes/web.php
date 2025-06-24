<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookList;
use App\Livewire\CreateBook;

Route::get('/', BookList::class);
Route::get('/create', CreateBook::class);

