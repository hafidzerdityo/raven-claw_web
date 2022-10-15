<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ClientManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->dummyUser();
        $result = \json_decode($response, true);
        return view('admin.list_client', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function dummyUser(){
        $user1 = array(
            "username"=> "hanggoro",
            "name"=> "Hanggoro Feriawan",
            "divisi"=> "DEVOPS",
            "role"=> "client",
            "password"=> "devopsvp11"
        );

        $user2 = array(
            "username"=> "rudinur",
            "name"=> "Rudinur",
            "divisi"=> "AO",
            "role"=> "client",
            "password"=> "rudinur123"
        );

        $user3 = array(
            "username"=> "erry",
            "name"=> "Erry Kusumayadhi",
            "divisi"=> "ITSG",
            "role"=> "client",
            "password"=> "erry123"
        );

        $user4 = array(
            "username" => "anhar",
            "name"=> "Anhar Rosidi",
            "divisi"=> "ITAIS",
            "role"=> "client",
            "password"=> "anhar123"
        );

        $array = array(
            "status" => "success",
            "data" => array(
                $user1, $user2, $user3, $user4
            )
        );

        return json_encode($array, true);
    }
}
