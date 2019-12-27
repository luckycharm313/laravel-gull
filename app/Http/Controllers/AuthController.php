<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illiminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API;

class AuthController extends Controller
{
  public function login() {
    return view("login");
  }

  public function signin(Request $request) {
    $email = $request["email"];
    $password = $request["password"];

    $data_array =  array(
      "email" => $request["email"],      
      "password" => $request["password"],      
      "device_token" => 'fakedwebfrontend@devicetoken',
      "device_type" => 'android',      
      "device_info" => 'web browser',      
      "app_versioncode" => 1,      
    );
    
    $api = new API();
    $make_call = $api->callAPI("POST", "api/shipper/login", json_encode($data_array));
    $response = json_decode($make_call, true);
    
    if($response['success']) {
      session(['token' => $response['data']['token']]);
      return redirect('/vehicle');
    } else {
      return redirect()->back()
      ->withErrors($response['error_messages']);
    }    
  }
  
  public function register() {
    return view("register");
  }
  
  public function signup(Request $request) {
    
    $data_array =  array(
      "first_name" => $request["first_name"],      
      "last_name" => $request["last_name"],      
      "company_name" => $request["company_name"],      
      "company_title" => $request["job_title"],      
      "email" => $request["email"],      
      "phone" => $request["phone"],      
      "password" => $request["password"],      
      "device_token" => 'fakedwebfrontend@devicetoken',
      "device_type" => 'android',      
    );

    $api = new API();
    $make_call = $api->callAPI("POST", "api/shipper/register", json_encode($data_array));
    $response = json_decode($make_call, true);
    
    if($response['success']) {
      return redirect('/login');
    } else {
      return redirect()->back()
      ->withErrors($response['error_messages']);
    }
	}
}
