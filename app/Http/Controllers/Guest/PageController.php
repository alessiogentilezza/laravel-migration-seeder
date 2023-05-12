<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // echo 'ciao';

        //$trains = Train::all();


        $trains = Train::where('Orario_di_partenza', 'like', '2023-05-12%')->get();
        $trainsNumber = Train::count();

        $trainsToday = Train::
        select(Train::raw('count(*) as train_count'))
        ->where('Orario_di_partenza', 'like', '%2023-05-12%')
        ->get();

        // dd($trainsToday);

        return view('home', compact('trains','trainsNumber','trainsToday'));
    }
}
