<?php

namespace App\Http\Controllers\Inventaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

//use App\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class InventarisController extends Controller
{
    public function index(Request $request)
    {
    	$data = DB::table('inventaris')
    		->select('id','nama','deskripsi','status')
    		->where('id_laboratories','=',$request->session()->get('$laboratorium->id'))
    		->get();
    	$Laboratorium = DB::table('laboratorium')->get();
    	return view('peminjam.inventaris')
    		->with('listlab', $Laboratorium)
    		->with('data', $data)
            ->with('lab_terpilih', '');
    }

    public function inventarislab(Request $request){
    	$input = $request->all();
    	$id = $input['KodeLab'];

    	$data = DB::table('inventaris')
    		->select('id','nama','deskripsi','status')
    		->where('id_laboratories','=', $id)
    		->get();

    	$Laboratorium = DB::table('laboratorium')->get();
    	return view('peminjam.inventaris')
    		->with('listlab', $Laboratorium)
    		->with('data', $data)
            ->with('lab_terpilih', $id);
    }

   
}
