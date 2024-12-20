<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function indexhm(){
        $pdcvar = DB::table('product')->take(3)->get();
		$pdcvarB = DB::table('product')->paginate(6);
		//$contentvar = DB::table('mycontent')->paginate(5);
		//$nameCont = DB::table('usr_kpt')->where('idusr_kbt', DB::table('mycontent')->value('idusr_kbt'))->get();
        $contentvar = DB::table('mycontent')
		->leftJoin('usr_kpt', 'mycontent.idusr_kbt', '=', 'usr_kpt.idusr_kbt')
		->select('mycontent.*', 'usr_kpt.name as user_name') // Menampilkan semua kolom dari mycontent dan kolom name dari usr_kpt
		->paginate(3);

		$user = session('user');
		$userString = 'false';
        if (!$user == false) {
            $userString = strval($user->idusr_kbt);
        }
		return view('Page.home', [
			'pdc' => $pdcvar,
			'pdcB' => $pdcvarB,
			'content' => $contentvar,
			//'nameC' => $nameCont,
			'us' => $userString,
		]); 
    }
	public function store(Request $request){
		$file = $request->file('prdpht');
		$fileName = uniqid().'.'. $file->getClientOriginalExtension();
		$data['prdpht'] = $file->storeAs('public/photo', $fileName);

		DB::table('product')->insert([
    		'idproduct'		=> $request->prdid,
    		'prdname'		=> $request->prdname,
    		'prdprice'		=> $request->prdprice,
    		'prddescript'	=> $request->prddescript,
    		'prdqty'     	=> $request->prdqty,
    		'prdpht'       	=> $fileName,
			'idusr_kbt'		=> $request->prdus,
    	]);
		return redirect('/profile')->with('msg', 'Data Stored Successfully');
	}
	public function storeTrans(Request $request){
		DB::table('trs_kpt')->insert([
    		'TRSIDs'	=> $request->trid,
    		'pdcID'		=> $request->pdcid,
    		'usID'		=> $request->usid,
    		'qty'		=> $request->qty,
    		'alamat'    => $request->address,
    		'total'     => $request->total,
    	]);
		return redirect('/profile')->with('msg', 'Data Stored Successfully');
	}
	public function show($id, $ide) {
		$content = DB::table('product')->where('idproduct', $id)->first();
		$pdcvarB = DB::table('product')->paginate(3);
		$user = session('user');
        $userString = strval($user->idusr_kbt);
		return view('Page.buycart', ['content' => $content, 'userID' => $ide, 'pdcID' => $id, 'pdcB' => $pdcvarB, 'us' => $userString]);
	}		
    //form edit
    public function ups($id){
    	$var = DB::table('product')->where('idproduct', $id)->get();
    	return view('Page.upprd', ['pas' => $var]);
    }
    //form simpan edit
    public function up(Request $request,$idproduct){
    	DB::table('product')->where('idproduct', $idproduct)->update([
    		'prdname'	  => $request->prdname,
    		'prdprice'    => $request->prdprice,
    		'prddescript' => $request->prddescript,
    		'prdqty'      => $request->prdqty,
    	]);
    	return redirect('/profile')->with('succesMsg', 'Data Telah Diperbarui!');
    }
    public function del($id){
    	DB::table('product')->where('idproduct',$id)->delete();
    	return redirect('/profile')->with('succesMsg', 'Data berhasil dihapus!');
    }
}
