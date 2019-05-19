<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PagesControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['home','product','stat']]);
    }

    public function home(){
        $title='HOME';
        return view('pages.home')->with('title',$title);
    }

    public function  dashboard(){
        return view('pages.dashboard');
    }


    public function product(){
        return view('pages.product');
    }

    public function stat()
    {
        $chartjs = app()->chartjs
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Label x', 'Label y'])
        ->datasets([
            [
                "label" => "My First dataset",
                'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                'data' => [58, 59]
            ],
            [
                "label" => "My First dataset",
                'backgroundColor' => ['rgba(255, 99, 132, 0.3)', 'rgba(54, 162, 235, 0.3)'],
                'data' => [65, 12]
            ]
        ])
        ->options([]);

return view('pages.stat', compact('chartjs'));  
    }
}
