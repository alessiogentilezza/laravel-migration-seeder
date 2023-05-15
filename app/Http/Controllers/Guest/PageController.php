<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //$trains = Train::all();

        // $trains = Train::where('Orario_di_partenza', 'like', '2023-05-12%')->get();

        $trains = Train::whereDate('Orario_di_partenza', date('Y-m-d'))->get();
        $trainsNumber = Train::count();

        $trainsSelect = Train::select(Train::raw('count(*) as train_count'))
            ->whereDate('Orario_di_partenza', date('Y-m-d'))->get();

        return view('home', compact('trains', 'trainsNumber', 'trainsSelect'));
    }
}
