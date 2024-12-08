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
            Auth::id($user->idusr_kbt);
            //return redirect()->route('profile', ['id' => $user->idusr_kbt]);
            return redirect('/profile');
        } else {
            // Login gagal
            return redirect('/login')->with('msg', 'Kesalahan username &/ Password!');
        }
    }
    public function showProfile(){
        $user = session('user');
        $userString = strval($user->idusr_kbt);

        if (!$user) {
            return redirect()->route('loginPage');
        }else{
            $userId = Auth::id(); 
            $contents = DB::table('mycontent')->where('idusr_kbt', $userString)->paginate(3); // Mengambil konten yang diinputkan oleh pengguna
            $pdc = DB::table('product') ->where('idusr_kbt', $userString)->paginate(3);
            return view('Page.profile', compact('user','contents','pdc', 'userId','userString'));
        }
    }
	public function store(Request $request){
		DB::table('usr_kpt')->insert([
    		'idusr_kbt'		=> $request->usid,
    		'name'  		=> $request->name,
            'username'      => $request->usname,
    		'call'		    => $request->tlp,
    		'email'     	=> $request->usemail,
    		'password'     	=> $request->uspass,
    	]);
		return redirect('/profile')->with('successMsg', 'Regis Successfully');
	}
    //form edit
    public function ups($id){
    	$pasivar = DB::table('dokters')->where('iddokter', $id)->get();
    	return view('editDokter', ['pas' => $pasivar]);
    }
    //untuk form simpan edit
    public function up(Request $request,$iddokter){
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
    public function del($id){
    	DB::table('dokters')->where('iddokter',$id)->delete();
    	return redirect('/dokter')->with('succesMsg', 'Data Deleted Successfully');
    }
}
