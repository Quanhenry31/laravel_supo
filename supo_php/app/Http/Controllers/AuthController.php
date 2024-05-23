<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        // Kiểm tra xem tài khoản có tồn tại không
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
        
            // Kiểm tra xem role của người dùng là admin (role = 1)
            if ($user->role == 1) {
                return redirect('product')->with('success', 'Login Success as Admin');
            } else {
                // Nếu role không phải là 1, đưa người dùng đến trang user/home
                return redirect('user/home')->with('success', 'Login Success');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}