<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=new User();
        $usuarios=$user->all();
    
        // return view('usuarios', ['usuarios'=>$usuarios]);
        return view('usuarios',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user=new User();
        $user->name=$request->input('nombre');
        $user->email=$request->input('email');
        $user->apellidos=$request->input('apellidos');
        $user->password=Hash::make($request->input('password'));
        $user->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        $email=$request->input('email');
        // $email=$_REQUEST['email'];
        $password=$request->input('password');
        // $password=$_REQUEST['password'];
         
        $this->validate($request,['email'=>'required|email','password'=>'required']);
        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            return view('crearNotas');
        }else{
            return redirect()->route('inicio')->withErrors('login incorrecto');
        }
    }

    public function logout(Request $request){
        // dd($request->session());
        // dd(Auth::user());
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
