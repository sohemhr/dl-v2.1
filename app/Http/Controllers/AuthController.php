<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\resetPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    public function index () 
    {
        $colone = collect()->range(1, 9);
        $coltwo = collect()->range(5, 9);
        $randone = $colone->random();
        $randtwo = $coltwo->random();

        $captcha = $randone + $randtwo;        
        $data = [
            'title' => 'Login',
            'subtitle' => 'Autentikasi User Login',
            'randone' => $randone,
            'randtwo' => $randtwo,
            'captcha' => $captcha
        ];

        // return view('user.login', $data);
        return view('user.demo-login2', $data);
    }

    public function login(Request $request)
    {        
        // Validate
        $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required'],
            'captcha_verify' => ['required']
        ]);

        if ($request->captcha == $request->captcha_verify) {
            if (auth('user')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ],$request->remember_me)) {
                if (auth('user')) {
                    if (auth('user')->user()->status=="Active") {
                        if (auth('user')->user()->level=="202500") {
                            return redirect()->intended('/admstr/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama. '... ');
                        } elseif (auth('user')->user()->level=="202501") {
                            return redirect()->intended('/admstr/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama.'... ');
                        } elseif (auth('user')->user()->level=="202502") {
                            return redirect()->intended('/admstr/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama.'... ');
                        } elseif (auth('user')->user()->level=="202503") {
                            return redirect()->intended('/finance/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama.'... ');
                        } elseif (auth('user')->user()->level=="202504") {
                            return redirect()->intended('/sales/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama.'... ');
                        } elseif (auth('user')->user()->level=="202505"){
                            return redirect()->intended('/ops/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama.'... ');
                        } elseif (auth('user')->user()->level=="202506"){
                            return redirect()->intended('/publisher/dashboard')->with('success', 'Selamat datang kembali '.auth('user')->user()->nama.'... ');
                        } else {
                            return back()->with([
                                'failed' => 'invalid..'
                            ]);
                        }
                    }
                    else {
                        return back()->with([
                            'failed' => 'Account Non Actived'
                        ]);
                    }
                }else{
                    return back()->with([
                        'failed' => 'invalid..'
                    ]);
                }
            }
        }
        return back()->with([
            'failed' => 'Email/Password Wrong!!'
        ]);
    }

    public function forgotPassword()
    {
        $colone = collect()->range(1, 9);
        $coltwo = collect()->range(5, 9);
        $randone = $colone->random();
        $randtwo = $coltwo->random();

        $captcha = $randone + $randtwo;
        $data = [
            'title' => 'Forgot Password',
            'subtitle' => 'Search Email Address',
            'randone' => $randone,
            'randtwo' => $randtwo,
            'captcha' => $captcha
        ];
        
        return view('user.forgot-password', $data);
    }

    public function searchEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'captcha_verify' => ['required']
        ]);

        if ($request->captcha == $request->captcha_verify) {
            $searchEmail = User::where('email', $request->email)->get();            
            if ($searchEmail->count() != 0) {
                foreach ($searchEmail as $val) {
                    $getSts = $val->status;
                    $getUuid = $val->uuid;
                }
                if ($getSts == 'Active') {
                    $data = [
                        'subject' => 'URL For Reset Password',
                        'title' => 'This URL For Reset Password',
                        'body' => $getUuid
                    ];

                    Mail::to($request->email)->send(new resetPasswordMail($data));

                    return back()->with([
                        'failed' => 'Kami telah mengirim email kepada Anda, Silahkan di Cek..'
                    ]);
                } else {
                    return back()->with(
                        [
                            'failed' => 'Account Not Found Or Account Non Actived..!'
                        ]);
                }
            }
            else {
                return back()->with(
                    [
                        'failed' => 'Account Not Found Or Account Non Actived..!'
                    ]);
            }          
        }

        return back()->with([
            'failed' => 'Email/Captha Wrong..!!'
        ]);
    }

    function resetPassword(string $uuid)
    {
        $data = [
            'title'     => 'Reset Password',
            'subtitle'  => 'Form Reset Password',
            'uuid'      => $uuid
        ];

        return view('user.reset-password', $data);
    }

    public function submitNewPassword(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'password'  => ['required', 'min:3', 'confirmed']
        ]);

        // Update the post
        User::where('uuid', $uuid)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with(
            [
                'failed' => 'Password Diperbaharui, Silahkan Login..!'
            ]
        );
    }

    public function logout(Request $request)
    {
        // Logout the user
        Auth::logoutOtherDevices(auth('user')->user()->password);
        Auth::guard('user')->logout();
        Session::flush();

        // Invalidate user's session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to home
        return redirect('/');
    }

    public function ulangTahun(Request $request)
    {
        $data = [
            'title' => 'Ulang Tahun',
            'subtitle' => 'Selamat Ulang Tahun Kamu'
        ];

        // return view('user.login', $data);
        return view('user.ulang-tahun', $data);
    }
}
