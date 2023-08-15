<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

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
        // Get total counts
        $totalUsers = User::count();
        $totalClients = Client::count();

        // Get active counts
        $activeUsers = User::whereNotNull('email_verified_at')->count();
        $activeClients = Client::whereNotNull('email_verified_at')->count();

        // Get latest users and clients
        $latestUsers = User::latest()->limit(5)->get();
        $latestClients = Client::latest()->limit(5)->get();

        return view('home', compact(
            'totalUsers',
            'activeUsers',
            'totalClients',
            'activeClients',
            'latestUsers',
            'latestClients'
        ));
    }
}
