<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $userid = $request -> input('userid');
        $password = $request -> input('password');

        // return "user id".$userid." password:".$password;
        echo "user id:". $userid . " password:". $password;
    }

    public function element_method(){
        $name = 'sojun';
        $student = ['sojun',15,'cse'];
        return view('condition_loop',['name'=> $name, 'student' => $student]);
    }
}
?>