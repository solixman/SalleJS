<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Salle ;
use PDO;
use PDOException;

// use App\resources\views\ClientDashboard;
 
class SalleController extends Controller
{
    public function ShowSallesforAdmin(){
        $Salles = Salle::get();
        
        return view('AdminDashoard',compact('Salles'));
    }

    public function ShowSallesforClient(){
        $Salles = Salle::get();
        
        return view('ClientDashboard',compact('Salles'));
    }
    
    public function ShowRoomDetails(Request $request){
        $salle = Salle::find($request['id']);
        
        return view('room',compact('salle'));
    }


    public function showUpdateForm(Request $request){

        $salle = Salle::find($request['id']);
        
        return view('UpdateForm',compact('salle'));

    }
    




    public function updateSalle(Request $request){
        $salle = Salle::find($request['id']);
        $salle->name = $request['name'];
        $salle->image= $request['image'];
        $salle->price=$request['price'];
        $salle->type=$request['type'];
        $salle->status= $request['status'];
        $salle->capacity=$request['capacity'];
        $salle->description= $request['description'];
        $salle->save();
        return redirect('/admin/salle');

    }
    
    public function ShowOneSalle(Request $request){
    $salle = Salle::find($request['id']);
    return view('UpdateFrom',compact('salle'));
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
    return back();

}
public function deleteSalle(Request $request){
    $salle = Salle::find($request['id']);

    if($salle){
        $salle->delete();
    }
    return back();
}

}
