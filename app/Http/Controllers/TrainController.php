<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
    // prendo i dati dal db con il model
    // non ho scritto all, ma tutta sta riba perché al consegna chiedeva di nserire i treni partenti oggi
        $trains = Train::whereDate('orario_di_partenza', today())->get();
        return view('trains.index', compact('trains'));
    }
}
