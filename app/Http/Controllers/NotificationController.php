<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illiminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
  public function index() {
    return view('notification');
	}
}
