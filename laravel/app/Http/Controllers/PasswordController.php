<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Recipe as Recipe;
use App\User;
use Session;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PasswordController extends Controller
{
   
   public function update(Request $request)
    {   
       if (Auth::check()) {
           $input = $request->all();
           
           $auth_user=Auth::user();
           
           $name = $request->input('name');
           $email = $request->input('email');
           
           if($name){
               $auth_user->name = $name;
               $auth_user->save();
               $request->session()->flash('alert-success', 'Successfully changed');
                   
           }
            if($email){
               $auth_user->email = $email;
               $auth_user->save();
               $request->session()->flash('alert-success', 'Successfully changed');
                   
           }
           return view('edit',compact('name'));
       }

    
       
                
            
    }
}
