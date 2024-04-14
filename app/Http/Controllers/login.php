<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()){
            return redirect('beranda'); 
        }else{
            return view('login');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function actionlogin(Request $request)
    {
        $data = [ 
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)){
            return redirect()->intended('beranda_login');
        }else{
            Session::flash('error', 'Username atau Password Salah');
            return redirect('login');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('beranda');
    }
}
