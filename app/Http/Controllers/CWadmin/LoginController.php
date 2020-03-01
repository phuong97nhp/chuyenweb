<?php

namespace App\Http\Controllers\CWadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Users;
use Validator;
use Session;

class LoginController extends Controller
{
	public function index(){
		return view('CWadmin.login');
	}

	function postlogin(Request $request)
	{
		if (Session::has('account') == false) 
		{
			$arr = [
				'user_account'=> $request->email,
				'user_password'=> sha1($request->password),
				'user_status'=> 1
			];
			$messages = [];

			if ($arr['user_account'] == "") {
				$messages['name'] = "Tài khoảng không được phép để trống.";
				$messages['url'] = "/cw-admin/dang-nhap";
				$messages['at'] = 'message';
				$messages['status'] = false;
			}elseif (strlen($arr['user_account']) > 255) {
				$messages['name'] = "Tài khoảng không đúng định dạng.";
				$messages['at'] = 'message';
				$messages['url'] = "/cw-admin/dang-nhap";
				$messages['status'] = false;
			}elseif ($arr['user_password'] == "") {
				$messages['name'] = "Bạn cần nhập vào mật khẩu.";
				$messages['at'] = 'message';
				$messages['url'] = "/cw-admin/dang-nhap";
				$messages['status'] = false;
			}elseif (strlen($arr['user_password']) > 255) {
				$messages['name'] = "Mật khẩu của bạn có độ dài không hợp lý.";
				$messages['at'] = 'message';
				$messages['url'] = "/cw-admin/dang-nhap";
				$messages['status'] = false;
			}elseif (strlen($arr['user_password']) < 6) {
				$messages['name'] = "Mật khẩu của bạn có độ dài không hợp lý.";
				$messages['at'] = 'message';
				$messages['url'] = "/cw-admin/dang-nhap";
				$messages['status'] = false;
			}else{

				if(Users::where($arr)->count()==1){
					$data = Users::select( 'id', 'user_account', 'user_name', 'user_lever', 'user_img', 'user_password')->where($arr)->first();
					$data_create_session = ['user' => $data->user_account, 'name' => $data->user_name, 'img' => $data->user_img, 'lever' => $data->user_lever, 'time' => date('d-m-Y h:i:s'), 'id' => $data->id, 'password' => $data->user_password ];

				// create session 
					Session::put('account', $data_create_session);

					if (Session::has('account') == true) 
					{
						$messages['name'] = "Đăng nhâp tài thành công.";
						$messages['url'] = "/cw-admin";
						$messages['status'] = true;
					}
				}
				else
				{
					$messages['name'] = "Tài khoản hoặc mật khẩu của bạn hiện thời không đúng.";
					$messages['at'] = 'message';
					$messages['url'] = "/cw-admin/dang-nhap";
					$messages['status'] = false;
				}
			}

			echo json_encode($messages, true);
		}
	}


	function logout(){
		if (Session::has('account') == true) 
		{
			Session::flush();
			return redirect()->intended(route('login'));
		}
	}

	function postout(Request $request){
		$messages = [];
		if (Session::has('account') == true || $request->status > 30) 
		{
			Session::flush();
			$messages['url'] = "/cw-admin/dang-xuat";
			$messages['status'] = true;
		}
		echo json_encode($messages, true);
	}
}