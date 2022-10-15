<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ClientPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        if (Session::has('login') && Session::has('user')) {
            $username = Session::get('user')['username'];
            $response = Http::post('https://ravenclaw-services.herokuapp.com/CRUD/client/lihat-data-pengajuan', [
                'username' => $username,
            ]);

            $result = \json_decode($response, true);
            // $res = collect($result);

            // $data_with_paginate = $this->paginate($res, 10, null);
            // $data_with_paginate->withPath('list_pengajuan');

            return view('client.list_pengajuan', compact('result'));
        }else{
            return redirect()->route('login');
        }      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.form_pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $response = Http::post('https://ravenclaw-services.herokuapp.com/CRUD/client/form-pengajuan', [
            'username' => $request->username,
            'name' => $request->name, 
            'divisi' => $request->divisi,
            'aktivitas' => $request->aktivitas,
            'due_date' => $request->due_date,
            'kategori' => $request->kategori,
            'bsu_fix' => floatval($request->bsu_fix),
            // 'manajer' => $request->manajer,
            // 'file_kajian_teknis' => $request->file_kajian_teknis,
            // 'file_tor' => $request->file_tor,
            // 'file_ee' => $request->file_ee 
        ]);

        
        $result = \json_decode($response, true);
        if($result['status']=='success'){
            Alert::success('Berhasil','Pengajuan berhasil ditambahkan');
            return redirect()->route('client_list_pengajuan');
        }else{
            Alert::error('Gagal', $result['msg']);
            return redirect()->back();
        }
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
        return view('client.edit_pengajuan');
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
        return "berhasil kirim data" .$request;
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

     //this function use for set the pagination
     public function paginate($items, $perPage , $page , $options = [])
     {
         $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
         $items = $items instanceof Collection ? $items : Collection::make($items);
         return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
     }
}
