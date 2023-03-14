<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function inscription(Request $request){
        $request->validate(['email'=>'unique:clients,email']);
        Clients::create([
            'nom'=>$request->nomPrenom,
            'prenom'=>"",
            'adresse'=>$request->adresse,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'admin'=>0
        ]);
        return redirect()->back();
        
    }

    public function connexion(Request $request){
        // dd($request->all());
        $credentials= $request->validate(['email'=>'required','password'=>'required']);
        $auth = Auth::attempt($credentials);
        $user = auth()->user();
        if($auth == true){

            session()->put('user_id', $user->id);
            session()->put('email', $user->email);
            return redirect('/dashboard');
        }
            
        
        
    }
}
