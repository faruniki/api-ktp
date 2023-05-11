<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use Illuminate\Http\Request;
use Exception;
use App\Helpers\formatAPI;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ktp::all();
            
        if($data) {
            return formatAPI::createAPI(200, 'Success', $data);
        } else {
            return formatAPI::createAPI(400, 'Failed');
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
        try{
            $ktp = Ktp::create($request->all());
            
            $data = Ktp::where('nik', '=', $ktp->nik)->get();
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }
    
        }catch(Exception $error){
            return formatAPI::createAPI(400,'Failed',$error);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($nik)
    {
        try{
            $ktp = Ktp::where('nik','=',$nik)->first();
            if($ktp){
                return formatAPI::createAPI(200,'Success',$ktp);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }
        }catch(Exception $error ){
            return formatAPI::createAPI(400,'Failed',$error);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ktp $ktp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nik)
    {
        try {

            $ktp = Ktp::findOrFail($nik);
            $ktp->update([
                'nama' =>$request->nama,
                'nik' =>$request->nik,
                'tmplahir' =>$request->tmplahir,
                'tgllahir' =>$request->tgllahir,
                'jk' =>$request->jk,
                'darah' =>$request->darah,
                'alamat' =>$request->alamat,
                'rt' =>$request->rt,
                'rw' =>$request->rw,
                'desa' =>$request->desa,
                'provinsi' =>$request->provinsi,
                'kecamatan' =>$request->kecamatan,
                'agama'=>$request->agama,
                'status' =>$request->status,
                'pekerjaan' =>$request->pekerjaan,
                'kewarganegaraan' =>$request->kewarganegaraan,
            ]);

            $data = Ktp::where('nik', '=', $ktp->nik)->get();

            if ($data) {
                return formatAPI::createAPI(200, 'Success', $data);
            } else {
                return formatAPI::createAPI(400, 'Failed');
            }
        } catch (Exception $error) {
            return formatAPI::createAPI(400, 'Failed',$error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nik)
    {
        try {
            $ktp = Ktp::findorfail($nik);

            $data = $ktp->delete();

            if($data) {
                return formatAPI::createAPI(200, 'Success', $data);
            } else {
                return formatAPI::createAPI(400, 'Failed');
            }

        } catch (Exception $error) {
            return formatAPI::createAPI(400, 'Failed', $error);
        }
    }
}
