<?php

namespace App\Http\Controllers\Admin;

use App\Charts\ReportsChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ReportsRepositoryInterface;


class ReportsController extends Controller
{
    private $repository;

    public function __construct(ReportsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function months(ReportsChart $chart)
    {

        $chart->labels(['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL']);
        $chart->dataset('2018','bar', $this->repository->byMonths(2018))
        ->options([
            'backgroundColor' => '#111',
        ]);


        $chart->labels(['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL']);
        $chart->dataset('2019','bar',[
            12,14,38,22,47,56,45
        ])
        ->options([
            'backgroundColor' => '#999',
        ]);


        return view('admin.charts.chart', compact('chart'));

    }
}
