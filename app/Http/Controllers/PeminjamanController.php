<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class PeminjamanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('inventaris.peminjaman.tabel-peminjaman');
    }

    public function inputPeminjaman()
    {
        return view('inventaris.peminjaman.input-peminjaman');
    }

    public function viewDetail()
    {
        return view('inventaris.peminjaman.view-peminjaman');
    }
}