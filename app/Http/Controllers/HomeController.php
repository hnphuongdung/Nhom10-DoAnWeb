<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class HomeController extends Controller
{
    public function index(){
    	return view('pages.home');
    }
}
