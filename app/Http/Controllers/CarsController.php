<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        //get data from Car model.
        $cars = Car::all();
        //send data to view:
        return view('cars.index', compact('cars'));
    }

    public function show($id){
        //get data from Car model.
        $car = Car::find($id);
        //send data to view:
        return view('cars.show', compact('car'));
    }

}
