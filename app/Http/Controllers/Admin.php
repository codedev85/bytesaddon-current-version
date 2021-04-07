<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin as ADManager;
use App\Mail\CreateAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class Admin extends Controller
{
    //
    public function index(){

       $admins = ADManager::all();

       return view('Adminmanager.index',compact('admins'));
    }

    public function add(){

        return view('Adminmanager.create');
    }


    public function store(Request $request){

        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $pass = '';
        for ($i = 0; $i < 5; $i++) {
            $pass .= $characters[rand(0, $charactersLength - 1)];
        }
      
        $user = $request->all();
        Mail::to($request['email'])->send(new CreateAdmin($user ,$pass));
        $admin = new ADManager();
        $admin->name = $request['name'];
        $admin->email = $request['email'];
        $admin->password = Hash::make($pass);
        $admin->save();

        alert()->success('user added as admin successfully', 'Successfully')->autoclose(3500);
        return back();
        
    }

    public function edit($id){

        $data = ADManager::where('id',$id)->first();

        return response()->json(['data'=> $data]);
    }

    public function update(Request $request ,$id){

        $name = $request['name'];
        $id = $request['id'];
        $email = $request['email'];

        $data = ADManager::where('id',$id)->update([
                                        'name'=> $name,
                                        'email'=> $email,
                                    ]);

        return response()->json(['data'=> $data]);
    }

    public function destroy($id){

    }
}
