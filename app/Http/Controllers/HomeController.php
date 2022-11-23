<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getsetting(){
        return Setting::first();
    }

    public function index(){
        $setting=Setting::first();
        return view('home.index',['setting '=> $setting,'page' => 'home']);
    }
    public function aboutus(){
        $setting = Setting::first();
        return view('home.about',['setting'=> $setting]);
    }
    public function references(){
        $setting = Setting::first();
        return view('home.references',['setting'=> $setting]);
    }
    public function faq(){
        return view('home.about');
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact',['setting'=> $setting]);
    }
    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();//her şey doğruysa auth-kullanıcı sessionu oluşturur

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login'); //şifre kullanıcıyla uyuşmuyorsa admin.logine git
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
