<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index2(){
        $trainerData = Trainer::all();
        return view('lobby', compact('trainerData'));
    }
}
