<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.main');
    }

    // public function customLogin(Request $request)
    // {

    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('username', 'password');
    //     if (Auth::attempt($credentials)) {
    //         if (Auth::user()->roles->first()->name == 'admin') {
    //             return redirect()->intended('admin/main')
    //                 ->withSuccess('Signed in');
    //         } else {
    //             return redirect()->intended('dashboard')
    //                 ->withSuccess('Signed in');
    //         }
    //     }

    //     return redirect()->back()->withSuccess('Login details are not valid');
    // }


    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if (!$user) {
            return redirect()->back()->withInput($request->only('username'))->withErrors(['msg' => 'Akun belum terdaftar']);
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return redirect()->back()->withInput($request->only('username'))->withErrors(['msg' => 'Password salah']);
        }

        // if (Auth::attempt($credentials)) {
        //     if (Auth::user()->roles->first()->name == 'admin') {
        //         return redirect()->intended('admin/main')
        //             ->withSuccess('Signed in');
        //     } else {
        //         return redirect()->intended('dashboard')
        //             ->withSuccess('Signed in');
        //     }
        // }
        if (Auth::attempt($credentials)) {
            $redirectPath = Auth::user()->hasRole('admin') ? 'admin/chart' : 'sejarah';

            return redirect()->intended($redirectPath)->withSuccess('Signed in');
        }

        return redirect()->back()->withErrors(['msg' => 'Login details are not valid']);
    }


    public function registration()
    {
        return view('pages.auth.registration');
    }


    public function customRegistration(Request $request)
    {

        $request->validate([
            'nama' => 'required|unique:users',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'nama.required' => 'Nama harus diisi.',
            'nama.unique' => 'Nama sudah terdaftar.',
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah terdaftar.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 6 karakter.',
        ]);


        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('have signed-in');
    }


    public function create(array $data)
    {
        $user =  User::create([
            'nama' => $data['nama'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $user->assignRole('user');
        return $user;
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return redirect('sejarah');
    }
}
