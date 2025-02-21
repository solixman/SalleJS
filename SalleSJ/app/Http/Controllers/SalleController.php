<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Salle ;
// use App\resources\views\ClientDashboard;
 
class SalleController extends Controller
{
    public function ShowSalles(){
        $Salles = Salle::get();
        
        return view('ClientDashboard',compact('Salles'));
    }
}
