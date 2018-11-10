<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Menampilkan halaman awal task
     *
     * @return void
     */
    public function index()
    {
        return view('task.index');
    }
}
