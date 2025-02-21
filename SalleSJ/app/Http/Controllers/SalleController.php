<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Salle ;
use PDO;
use PDOException;

// use App\resources\views\ClientDashboard;
 
class SalleController extends Controller
{
    public function ShowSalles(){
        $Salles = Salle::get();
        
        return view('ShowsalleforAdmin',compact('Salles'));
    }

    public function editSalle($id,Request $request){

        $salle = Salle::find($id);
        $salle->name = $request['name'];
        $salle->image= $request['image'];
        $salle->price=$request['price'];
        $salle->type=$request['type'];
        $salle->status= $request['status'];
        $salle->capacity=$request['capacity'];
        $salle->description= $request['description'];
        
        $salle->save();
        return view('ShowsalleforAdmin',compact('Salles'));

    }
    
    public function ShowOneSalle(Request $request){
    $salle = Salle::find($request['id']);
    return view('UpdateFrom',$salle);
    }
    
   public function CreateSalle(Request $request){
    $salle = new Salle();
    $salle->name = $request['name'];
    $salle->image= $request['image'];
    $salle->price=$request['price'];
    $salle->type=$request['type'];
    $salle->status= $request['status'];
    $salle->capacity=$request['capacity'];
    $salle->description= $request['description'];

    $salle->save();

}

}
