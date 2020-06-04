<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trips;
class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = trips::latest()->paginate(5);
        return view('admin/home', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show(){
        
        $data = trips::latest()->paginate(5);
        return view('admin/home', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}