<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaans = PertanyaanModel::get_all();
        return view('crud.pertanyaan', compact('pertanyaans'));
    }
    public function create(){
        
        return view('crud.form_pertanyaan');
    }
    public function store(Request $request){
        $data = $request->all();
        unset($data["token"]);
        PertanyaanModel::save($data);
        return redirect('/pertanyaan');
    }
 }
