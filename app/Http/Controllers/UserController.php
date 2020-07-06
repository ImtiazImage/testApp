<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $data = [
          'name' => 'S.M.Imtiaz Hussain',
          'email'=> 'test@g.c',
          'password'=>'password'
        ];
//        User::create($data);
//        $user = new User();
//        $user->name     = 'Imtiaz';
//        $user->email    = 'imtiaz@test.com';
//        $user->Password = bcrypt('password');
//        $user->save();
//        dd($user);
//        User::where('id',3)->update(['name'=>'S.M.Imtiaz']);
//        $user = User::all();
//        return $user;
//        $user = User::where('id',1)->delete();
        return 'Hello People!';
    }

    public function uploadAvatar( Request $request) {
        if($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded!');
        }
        return redirect()->back()->with('error', 'Image not uploaded!');
    }

}
