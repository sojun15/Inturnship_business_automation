<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $userid = $request -> input('userid');
        $password = $request -> input('password');
        $userName = $request -> input('userName');

        return view('homePage',['userName'=>$userName]);
    }
}
?>