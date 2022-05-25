<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
	public function create(){
		return view('auth.register');
	}

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|max:18|unique:users',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:5|max:255',
			'alamat' => 'max:255',
			'telp' => 'max:14',
        ]);

		$validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

		return redirect('/login')->with('success', 'Registrasi berhasil! Silahkan login');
		// dd('registrasi berhasil');
    }

	// public function changePassword(Request $request){
	// 	$id = Auth::user()->id;

	// 	$user = User::where('id',$id)
	// 	->update(array(
	// 		'password' => bcrypt($request->get('password')),
	// 	));

	// 	return redirect()->to('dashboard');
	// }

	// public function login(Request $request)
	// {
	// 	if(Auth::attempt(['email' => $request->get('email'),'password' => $request->get('password')])){
	// 		if(Auth()->user()->role == 'super admin'){
	// 			return redirect()->route('dashboard/admin');
	// 		}
	// 		elseif(Auth()->user()->role == 'admin'){
	// 			return redirect()->route('dashboard/user');
	// 		}
	// 		else{
	// 			return view('/loginpanel');
	// 		}
	// 	}
	// 	$request->session()->flash('error','Check your Email and Password !!');
	// 	return view('/loginpanel');
	// }

	// public function logout()
	// {
	// 	Auth::logout();

	// 	return redirect()->route('dashboard');
	// }
}