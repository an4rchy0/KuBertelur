<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class CtController extends Controller
{
    public function store(Request $request){
		DB::table('mycontent')->insert([
    		'idpct'     => $request->contid,
    		'title'		=> $request->conttl,
    		'prevdesc'	=> $request->pvdc,
            'like'	=> 100,
            'comment'	=> "keren",
    		'content'   => $request->cont,
			'idusr_kbt'	=> $request->ctus,
    	]);
		return redirect('/profile')->with('msg', 'Data Stored Successfully');
	}
	public function show($id) {
		$content = DB::table('mycontent')->where('id', $id)->first();
		return view('Page.detail', ['content' => $content]);
	}
	//form edit
    public function ups($id){
    	$var = DB::table('mycontent')->where('idpct', $id)->get();
    	return view('Page.upcont', ['pas' => $var]);
    }
    //form simpan edit
    public function up(Request $request,$idproduct){
    	DB::table('mycontent')->where('idpct', $idproduct)->update([
    		'title'			=> $request->conttl,
    		'prevdesc'		=> $request->pvdc,
    		'content'		=> $request->cont,
    	]);
    	return redirect('/profile')->with('succesMsg', 'Data Telah Diperbarui!');
    }
    public function del($id){
    	DB::table('mycontent')->where('idpct',$id)->delete();
    	return redirect('/profile')->with('succesMsg', 'Data berhasil dihapus!');
    }
}
