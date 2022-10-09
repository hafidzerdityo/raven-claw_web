<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->dummy();
        $result = \json_decode($response, true);
        // return count(($result['data']));
        return view('admin.list_pengajuan', compact('result'));
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
        $array = array('id', $id);
        // return $id;
        return view('admin.detail_pengajuan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        return view('admin.edit_pengajuan');
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

    public function history(){
        $response = $this->dummy();
        $result = \json_decode($response, true);

        return view('admin.riwayat_pengajuan', compact('result'));
    }

    public function dummy(){
        $data = array(
            "order_id"=>"DEV-098997867",
            "username"=>"hanggoro",
            "name"=>"Hanggoro Aji",
            "divisi"=>"DEVOPS",
            "manajer"=>"",
            "kategori"=>'OPEX',
            "aktivitas"=>"Pengadaan pelatihan Android Jetpack PRO",
            "metode_pengadaan"=>"pemilihan langsung",
            "mitra"=>"dicoding",
            "due"=> array(
                "due_quarter"=>"Q3",
                "due_date"=>"10-12-2022"
            ),
            "bsu"=>array(
                "bsu_kategori"=>"fix",
                "bsu_fix"=>"15000000"
            ),
            "file_kajian_teknis"=>"-",
            "file_tor"=>"-",
            "file_ee"=>"-",
            "no_spk_pks"=>"",
            "posisi_akhir"=>"Penetapan mitra 08-10-2022",
            "status"=>"on_process",
            "progress"=>array(
                "pengajuan_pa"=>array(
                    "due_date"=>"30-08-2022",
                    "completed_date"=>"25-08-2022",
                    "lampiran"=>"-"
                ),
                "pengumuman"=>array(
                    "due_date"=>"15-09-2022",
                    "completed_date"=>"10-09-2022",
                    "lampiran"=>"-"
                ),
                "evaluasi_teknis"=>array(
                    "due_date"=>"25-09-2022",
                    "completed_date"=>"25-09-2022",
                    "lampiran"=>"-"
                ),
                "penetapan_mitra"=>array(
                    "due_date"=>"3-10-2022",
                    "completed_date"=>"2-10-2022",
                    "lampiran"=>"-"
                ),
                "invoicing"=>array(
                    "due_date"=>"30-11-2022",
                    "completed_date"=>"",
                    "lampiran"=>""
                )
            )       
        );

        $array = array(
            "status" => "success",
            "data" => array($data, $data)
        );

        // return $array;
        return json_encode($array, true);
    }
}
