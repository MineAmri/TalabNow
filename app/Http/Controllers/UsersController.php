<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
     public function Showusers() {

        $data['title'] = "All users list";
        $data['users'] = User::all();
        //$users = DB::table('users')->where('xrole', 'Administrateur')->get();
        return view('dashboard.users',compact('data'));
  
    }

    public function showUsersbyID($id) {

        $data['user'] = User::where('id', $id)->first();
        return view('dashboard.showuser',compact('data'));
     }

     public function destroyClient($id) {
        $cliente = User::find($id); 
        $cliente->delete();
        return redirect()->route('admin.users')->with('primary', 'Your User is Deleted !'); 
        }
}
