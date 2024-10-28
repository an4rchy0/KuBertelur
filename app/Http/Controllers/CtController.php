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
}
