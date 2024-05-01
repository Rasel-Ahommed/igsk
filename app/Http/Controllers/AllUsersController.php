<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('backoffice.alluser.alluser',compact('users'));
    }


    // delete 

    public function destroy($id){
        $data = User::findOrFail($id);

        if($data){
            $data->delete();
            return redirect()->back()->with('delete', 'User delete successfully');
        }
    }
}
