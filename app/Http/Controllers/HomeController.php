<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $clients = Client::all();

        $clients_by_package = DB::table('clients')
                 ->select('package', DB::raw('count(*) as total'))
                 ->groupBy('package')
                 ->get();

               //  dd($clients_by_package);
        return view('home', compact('clients','clients_by_package'));
    }
}
