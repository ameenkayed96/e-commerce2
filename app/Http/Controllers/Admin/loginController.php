<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
   function getlogin(){
       return view('admin.login');
   }

   public function save(){

    $admin = new Admin();
    $admin -> name ="ameen kayed";
    $admin -> email ="amkyd.99999@gmail.com";
    $admin -> photo ="amkyd.99990@gmail.com";

    $admin -> password = Hash::make('0949');
    $admin -> save();
    echo "sdfsdfsdfsdf";

}

   public function login(LoginRequest $request){
       //die($request->input("email") . $request->input("password"));
        //make validation
        $remember_me = $request->has('remember_me') ? true : false;
        //dd($remember_me);
        //dd(bcrypt("094974"));
       // dd(auth()->guard('admin')->attempt());
       //$x = Auth::guard('admin');
      // $cr = ['email' => $request->input("email"), 'password' => $request->input("password")];
      // dd(Auth::attempt());
        if(Auth::guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])){
            // notify()->success('تم الدخول بنجاح');
           // dd("******************");
        //    print_r('ssds '.Auth::guard('admin')->check().'sdsd');
        //    dd(Auth::guard('admin')->user());
        // Auth::login(Auth::guard('admin')->user());

             return view('admin.dashboard');
        }
       // notify() -> error('خطأ في البيانات يرجى المحاولة مجددا');
       return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
