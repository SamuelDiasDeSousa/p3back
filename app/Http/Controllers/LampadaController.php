<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LampadaController extends Controller
{
	//Index
	public function index()
	{
		$lampadas=\App\Lampada::all();
		return view('index', compact('lampadas'));
	}

	public function mostrarUm($id){
		$lampada = \App\Lampada::find($id);

		return $lampada->status;
	}


	//Update
	public function update($id)
	{
		$lampada = \App\Lampada::find($id);

		if($lampada->status == 0){
			$lampada->status = 1;
		}
		else{
			$lampada->status = 0;
		}

		$lampada->save();

		return redirect('lampadas');
	}
}
