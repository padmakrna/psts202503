<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

route::get("/", [StudentsController::class, 'index'])->name('index.index');