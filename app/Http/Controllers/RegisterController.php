<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    //
    public function register()
	{
		return view('/register');
	}

	public function registerSimpan(Request $request)
	{
		Validator::make($request->all(), [
			'nama' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed',
			'level' => 'required|in:user,admin', // Pastikan hanya user atau admin yang valid
		])->validate();

		User::create([
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'level' => $request->level,
		]);

		return redirect()->route('login');
	}

	// kontrol buat ngalihin ke page login
    public function login()
	{
		return view('/login');
	}

	// ngontrol buat ngecek data ketika login
	public function loginAksi(Request $request)
	{
		Validator::make($request->all(), [
			'email' => 'required|email',
			'password' => 'required',
		])->validate();
	
		if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
			throw ValidationException::withMessages([
				'email' => trans('auth.failed'),
			]);
		}
	
		$user = Auth::user();
	
		if ($user->level === 'admin') {
			return redirect()->route('buku');
		} else {
			return redirect()->route('user');
		}
	}
	

}
