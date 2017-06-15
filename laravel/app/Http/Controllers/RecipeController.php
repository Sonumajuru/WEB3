<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Recipe as Recipe;
use App\Order as Order;
use Input;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RecipeController extends Controller
{
    public function getAllNumber($id){  
   return view('recepta',array( 'order' => Order::find($id)));
               }


      public function getAllOrder(){  
       
          
        return view('orders', array( 'orders' => Order::all()) );
    }

    public function getRecipe(){  
        return view('recipe');
    }

    public function getAbout(){  
          $name = 'Simon Onumajuru';
          return view('about')->with('name', $name);
      }

    public function upload(){
    if(Input::hasFile('file')){
      echo 'Uploaded';
      $file = Input::file('file');
      $file->move('uploads', $file->getClientOriginalName());
      echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
    }

  }

}
