<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BinnacleController;
use App\binnacle;
use DB;
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $binnacle = binnacle::all();
        $binnacle = DB::table('binnacles')->join('users', 'users.id','=','binnacles.id_user')->paginate(10);
        // dd($binnacle);

        BinnacleController::AddBinnacle('Vista Dashboard','/home');

        return view('dashboard', compact('binnacle'));
    }
}
