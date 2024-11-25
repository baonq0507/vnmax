<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'bank_account_number' => 'required',
            'bank_account_name' => 'required',
            'bank_name' => 'required',
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password_confirmation.required' => 'Vui lòng nhập mật khẩu',
            'password_confirmation.same' => 'Mật khẩu không khớp',
            'bank_account_number.required' => 'Vui lòng nhập số tài khoản',
            'bank_account_name.required' => 'Vui lòng nhập tên tài khoản',
            'bank_name.required' => 'Vui lòng nhập tên ngân hàng',
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'bank_account_number' => $request->bank_account_number,
            'bank_account_name' => $request->bank_account_name,
            'bank_name' => $request->bank_name,
            'referral_code' => Str::random(6),
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }


    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ]);

        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'name' => 'Tên hoặc mật khẩu không đúng',
        ])->withInput();
    }
}
