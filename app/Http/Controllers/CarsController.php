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

    public function show(Car $car){
        //send data to view directly from the parameter.
        return view('cars.show', compact('car'));
    }

}
