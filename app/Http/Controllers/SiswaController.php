<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    public function index(){

        $data = (new BaseApi)->index('/api/siswa');
        $siswas = $data->json();
        
        return view('index')->with('siswas',$siswas['data']);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $payload = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
           ];
    
           $baseApi = new BaseApi;
           $response = $baseApi->create('/api/siswa/create', $payload);
            if ($response->failed()) {
                $errors = $response->json('data');
                return redirect()->back()->with(['errors' => $errors]);
            }   
    
    return redirect('/')->with('success', 'Success add new Students to API!');
    }

    public function edit($id_siswa){
        $response = (new BaseApi)->update('/api/getData', $id_siswa);
        $datas = $response->json();
        return view('update')->with('datas',$datas['data']);
    }

    public  function update(Request $request,$id_siswa){
        $payload = [
            'nis' => $request->input('nis'),
            'nama' => $request->input('nama'),
            'rombel' => $request->input('rombel'),
        ];

        $response = (new BaseApi)->updateStore('/api/siswa/update', $id_siswa, $payload);
	    if ($response->failed()) {
		$errors = $response->json('data');

		return redirect()->back()->with(['errors' => $errors]);
	}
	    return redirect('/')->with('success', 'Data  success edited!');
    }






}
