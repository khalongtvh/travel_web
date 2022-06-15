<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Whoops\Run;

class LoginController extends Controller
{
    public function login_user(Request $request)
    {
        return view('User.login_user');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = $request->password_account;
        $result =  DB::table('taikhoannguoidung')->where('email', $email)->where('matKhau', $password)->first();
        if ($result) {
            Session::put('maNguoiDung', $result->maNguoiDung);
            return Redirect('/trang-chu');
        } else {
            return Redirect('/dang-nhap');
        }
    }

    public function signUp()
    {
        return view('User.dang_ky');
    }

    public function add_customer(Request $request)
    {
        $data = array();
        $data['ho'] = $request->ho;
        $data['ten'] = $request->ten;
        $data['email'] = $request->email;
        $data['matKhau'] = $request->matKhau;
        $data['diaChi'] = $request->diaChi;
        $data['ngaySinh'] = $request->ngaySinh;
        $xacNhanMatKhau = $request->password_confirm;
        if ($data['matKhau'] ==  $xacNhanMatKhau) {
            $customer_id = DB::table('taikhoannguoidung')->insertGetId($data);
            Session::put('maNguoiDung', $customer_id);
            Session::put('tenNguoiDung', $request->ten);
            return Redirect('/trang-chu');
        }else{
            return Redirect()->back()->with('error', 'Mật khẩu không khớp!');
        }
    }
}
