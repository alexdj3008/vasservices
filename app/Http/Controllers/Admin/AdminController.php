<?php

namespace App\Http\Controllers\Admin;
use DB;
use Charts;
use App\User;
use App\Clinica;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))
            ->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title("Usuarios registrados por mes")
            ->elementLabel("Total de usuarios")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByMonth(date('Y'), true);
        return view('admin.dashboard', compact('chart'));
        $clinicas = Clinica::all();
        return view('admin.dashboard', compact('clinicas'));
    }
}
