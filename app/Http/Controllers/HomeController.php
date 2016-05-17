<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Asset;
use App\Location;
use Khill\Lavacharts\Lavacharts;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allowed_units_total = Location::all()->sum('allowed_units');
        $assets_total = Asset::all()->sum('quantity');
        $space_left = $allowed_units_total - $assets_total;

        /* CHART SETUP */
        $units_chart = \Lava::DataTable(); //create the chart
        $units_chart->addStringColumn('Storage space') //data for the chart
                    ->addNumberColumn('Percent')
                    ->addRow(['Space left', $space_left])
                    ->addRow(['Taken space', $assets_total]);
        \Lava::PieChart('Storage space', $units_chart, ['title' => 'Storage space', 'pieSliceText' => 'value']); //chart's extra options

        return view('home', compact($units_chart));
    
    }
}
