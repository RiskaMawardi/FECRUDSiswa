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






}
