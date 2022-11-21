<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DatHangEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use App\Models\Ram;
use Illuminate\Support\Facades\Hash;
use Socialite;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function getDatHangDemo()
    // {
    // // Thêm Đơn hàng demo
    // $donhang = DonHang::create([
    // 'user_id' => Auth::user()->id,
    // 'dienthoaigiaohang' => '0939011900',
    // 'diachigiaohang' => '18 Ung Văn Khiêm - TP. Long Xuyên - An Giang',
    // ]);
    
    // // Thêm Đơn hàng chi tiết demo
    // DonHang_ChiTiet::create([
    // 'donhang_id' => $donhang->id,
    // 'sanpham_id' => 2,
    // 'soluongban' => 1,
    // 'dongiaban' => 5990000,
    // ]);
    
    // DonHang_ChiTiet::create([
    // 'donhang_id' => $donhang->id,
    // 'sanpham_id' => 142,
    // 'soluongban' => 1,
    // 'dongiaban' => 350000,
    // ]);
    
    // // Gởi email
    // Mail::to(Auth::user()->email)->send(new DatHangEmail($donhang));
    
    // return redirect()->route('frontend.dathangthanhcong');
    // }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome()
    {
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::all();
        $ram = Ram::all();
        return view('frontend.index',compact('loaisanpham','sanpham','ram'));
        
    }
    public function getDangKy()
    {
        return view('frontend.dangky');
    }
    
    public function getDangNhap()
    {
        return view('frontend.dangnhap');
    }
    public function getSanPham($tenloai_slug = '')
    {
        return view('frontend.sanpham');
    }
    
    public function getSanPham_ChiTiet($tenloai_slug, $tensanpham_slug)
    {
        return view('frontend.sanpham_chitiet');
    }
    public function getLienHe()
    {
        return view('frontend.lienhe');
    }
    
    public function getGioHang()
    {
        return view('frontend.giohang');
    }
    
    public function getGioHang_Them($tensanpham_slug)
    {
        return redirect()->route('frontend');
    }
    
    public function getGioHang_Xoa($row_id)
    {
        return redirect()->route('frontend.giohang');
    }
    
    public function getGioHang_XoaTatCa()
    {
        return redirect()->route('frontend.giohang');
    }
    public function getGioHang_Giam($row_id)
    {
        return redirect()->route('frontend.giohang');
    }
    
    public function getGioHang_Tang($row_id)
    {
        return redirect()->route('frontend.giohang');
    }
    
    public function getDatHang()
    {
        return view('frontend.dathang');
    }
    
    public function postDatHang(Request $request)
    {
        return redirect()->route('frontend.dathangthanhcong');
    }
    
    public function getDatHangThanhCong()
    {
        return view('frontend.dathangthanhcong');
    } 
    public function getGoogleLogin()
    {
    return Socialite::driver('google')->redirect();
    }
    
    public function getGoogleCallback()
    {
    try
    {
    $user = Socialite::driver('google')
    ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
    ->stateless()
    ->user();
    }
    catch(Exception $e)
    {
    return redirect()->route('khachhang.dangnhap')->with('warning', 'Lỗi xác thực. Xin vui lòng thử lại!');
    }
    
    $existingUser = NguoiDung::where('email', $user->email)->first();
    if($existingUser)
    {
    // Nếu người dùng đã tồn tại thì đăng nhập
    Auth::login($existingUser, true);
    return redirect()->route('khachhang');
    }
    else
    {
    // Nếu chưa tồn tại người dùng thì thêm mới
    $newUser = NguoiDung::create([
    'name' => $user->name,
    'username' => Str::before($user->email, '@'),
    'email' => $user->email,
    'password' => Hash::make('larashop@2020'), // Gán mật khẩu tự do
    ]);
    
    // Sau đó đăng nhập
    Auth::login($newUser, true);
    return redirect()->route('khachhang');
    }
    }
}
