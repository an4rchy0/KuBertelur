<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $userId = Auth::id(); // Mendapatkan ID pengguna yang sedang login
        $contents = Content::where('user_id', $userId)->get(); // Mengambil konten yang diinputkan oleh pengguna
        return view('Page.profile', compact('contents'));
    }

    /*public function index(){
        $user = Auth::user();
        return view('Page.profile', compact('user'));
    }
    public function showLoginForm(){
        return view('Page.Acc.login');
    }
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('profile');
        }
        return back()->with(['email' => 'Email atau password salah.']);
        return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
    }
    public function login(Request $request){
       // Check if the user is already logged in
        if (Auth::check()) {
            return redirect()->intended('/profile');
        }

        // Validate the login form data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        // Attempt to log the user in
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            // Authentication passed, redirect to profile
            return redirect()->intended('/profile');
        }else{
            // Authentication failed, redirect back to login with error message
            //return redirect()->route('loginPage')->with('msg', 'Kesalahan username &/ Password!');
            return redirect()->intended('/profile');
        }
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('usr_kpt')->where([
            ['username', '=', $username],
            ['password', '=', $password]
        ])->first();

        if ($user) {
            return redirect('/profile');
        } else {
            return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
        }
    }*/

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $user = DB::table('usr_kpt')
            ->where('username', $credentials['username'])
            ->where('password', $credentials['password'])
            ->first();
        if ($user) {
            // Login berhasil
            Auth::loginUsingId($user->idusr_kbt);
            session(['user' => $user]);
            return redirect('/profile');
        } else {
            // Login gagal
            return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
        }
    }

    public function showProfile(){
        $user = session('user');

        if (!$user) {
            return redirect()->route('loginPage');
        }else{
            $userId = Auth::id(); // Mendapatkan ID pengguna yang sedang login
            $contents = DB::table('mycontent')->where('idusr_kbt', $userId)->get(); // Mengambil konten yang diinputkan oleh pengguna
            $pdc = DB::table('product')->where('idusr_kbt', $userId)->get();
            return view('Page.profile', compact('user','contents','pdc'));
        }
        //return view('Page.profile', compact('user'));
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
    	]);
		return redirect('/')->with('successMsg', 'Data Stored Successfully');
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
