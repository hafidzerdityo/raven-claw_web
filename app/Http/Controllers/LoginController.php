<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::post('https://ravenclaw-services.herokuapp.com/CRUD/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $result = \json_decode($response, true);
        if($result['login_status'] == 'success'){
                Session::put('login_status', 'login');
                Session::put('user', $result['data']);

                if($result['data']['role']=='client'){
                    return redirect()->route('client_dashboard', $result);
                }else{
                    return redirect()->route('admin_dashboard', $result);

                }
        }else{
            return redirect()->route('login');
        }
    }

    public function destroy(){
        Session::flush();

        return redirect()->route('login');
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

}
