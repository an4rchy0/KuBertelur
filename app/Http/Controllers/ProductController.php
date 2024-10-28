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

    /*public function store(Request $request){
    	$data = $request->validate([
    		'prdid' 		=> 'required|min:9',
			'prdname' 		=> 'required|min:9',
    		'prdprice'		=> 'required',
    		'prddescript'	=> 'required',
    		'prdqty'		=> 'required',
    		'prdpht'      	=> 'required|file|image|mimes:png,jpg,jpeg|max:10240'
		]);
		$file = $request->file('photo');
		$fileName = uniqid().'.'. $file->getClientOriginalExtension();
		$data['prdpht'] = $file->storeAs('public/photo',$fileName);
		Product::create($data);
    	//alihkan ke view dokter
    	return redirect('/dokter')->with('succesMsg', 'Data Stored Successfully');
		//return redirect(url('product'))->with('success','Data berhasil ditambahkan!');
    }*/

	/*public function store(Request $request){
		$data = $request->validate([
			'prdid'        => 'required|min:9',
			'prdname'      => 'required|min:9',
			'prdprice'     => 'required',
			'prddescript'  => 'required',
			'prdqty'       => 'required',
			'prdpht'       => 'required|file|image|mimes:png,jpg,jpeg|max:10240'
		]);
	
		$file = $request->file('prdpht');
		$fileName = uniqid().'.'. $file->getClientOriginalExtension();
		$data['prdpht'] = $file->storeAs('public/photo', $fileName);

		Product::create($data);
		return redirect('/')->with('successMsg', 'Data Stored Successfully');
	}*/
	
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

    //untuk form edit
    public function edit($id){
    	//mengambil data berdasar id
    	$pasivar = DB::table('dokters')->where('iddokter', $id)->get();
    	return view('editDokter', ['pas' => $pasivar]);
    }
    //untuk form simpan edit
    public function perbarui(Request $request,$iddokter){
    	DB::table('dokters')->where('iddokter', $iddokter)->update([
    		'namadokter' => $request->nama,
    		'jk'         => $request->jk,
    		'tanggallahir' => $request->tanggallahir,
    		'nohp'         => $request->nohp,
    		'email'        => $request->email,
    		'alamat'       => $request->alamat
    	]);
    	//alihkan ke view dokter
    	return redirect('/dokter')->with('succesMsg', 'Data Telah Diperbarui');
    }

    public function hapus($id){
    	DB::table('dokters')->where('iddokter',$id)->delete();
    	return redirect('/dokter')->with('succesMsg', 'Data Deleted Successfully');
    }
}
