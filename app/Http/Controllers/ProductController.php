<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function indexhm(){
        $pdcvar = DB::table('product')->take(5)->get();
		$pdcvarB = DB::table('product')->paginate(5);
		$contentvar = DB::table('mycontent')->paginate(5);
        return view('Page.home', [
			'pdc' => $pdcvar,
			'pdcB' => $pdcvarB,
			'content' => $contentvar
		]);
    }
	public function store(Request $request){
		$file = $request->file('prdpht');
		$fileName = uniqid().'.'. $file->getClientOriginalExtension();
		$data['prdpht'] = $file->storeAs('public/photo', $fileName);

		DB::table('product')->insert([
    		'idproduct'			=> $request->prdid,
    		'prdname'		=> $request->prdname,
    		'prdprice'		=> $request->prdprice,
    		'prddescript'	=> $request->prddescript,
    		'prdqty'     	=> $request->prdqty,
    		'prdpht'       	=> $fileName,
			'idusr_kbt'		=> $request->prdus,
    	]);
		return redirect('/profile')->with('msg', 'Data Stored Successfully');
	}
	public function show($id) {
		$content = DB::table('product')->where('idproduct', $id)->first();
		return view('Page.buycart', ['content' => $content]);
	}		
    //form edit
    public function ups($id){
    	$var = DB::table('product')->where('idproduct', $id)->get();
    	return view('----', ['pas' => $var]);
    }
    //form simpan edit
    public function up(Request $request,$idproduct){
    	DB::table('product')->where('idproduct', $idproduct)->update([
    		'prdname' => $request->nama,
    		'prdprice'         => $request->jk,
    		'prddescript' => $request->tanggallahir,
    		'prdqty'         => $request->nohp,
    	]);
    	return redirect('/profile')->with('succesMsg', 'Data Telah Diperbarui!');
    }
    public function del($id){
    	DB::table('product')->where('idproduct',$id)->delete();
    	return redirect('/profile')->with('succesMsg', 'Data berhasil dihapus!');
    }
}
