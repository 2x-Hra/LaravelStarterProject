<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * this controller made by auth
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');// example of checking user auth
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//        $request->session()->put(['Hos'=>"master instructor"]);  //for adding to session
        //remember session in global
        // session(["hos"=> "master instructro"]);  // you can use this instead of using $request
//        return $request->session()->all();  // to see all inside of session

//        $request->session()->forget('hos');  // to delete a key + value from session
//        $request->session()->flush(); // to clear everything inside of a session

//        $request->session()->flash(['key','value']); // only availble in session for 1 request
//        $request->session()->get('key'); // u can see the key in the flash here
//        $request->session()->keep('key') // to keep the flash data
//        $request->session()->reflash(); //
        //
        return view('home');
    }
}
