<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        // $ventasmes=DB::select('SELECT month(v.sale_date) as mes, sum(v.total) as totalmes 
        // from sales v where v.status="VALID" group by month(v.sale_date) order by month(v.sale_date) desc limit 12');

        $ventasdia=DB::select('SELECT DATE_FORMAT(v.sale_date,"%d/%m/%Y") as dia, sum(v.total) as totaldia from sales v 
        where v.status="VALID" group by v.sale_date order by day(v.sale_date) desc limit 15');


        return view('home',compact('ventasdia'));
    }
}
