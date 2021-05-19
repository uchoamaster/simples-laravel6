<?php

namespace App\Http\Controllers\Admin;

use App\Charts\ReportsChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function months(ReportsChart $chart)
    {
        $chart->labels(['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL']);
        $chart->dataset('2019','bar',[
            12,14,38,22,47,56,45
        ])
        ->options([
            'backgroundColor' => '#34e345',
        ]);

        return view('admin.charts.chart', compact('chart'));

    }
}
