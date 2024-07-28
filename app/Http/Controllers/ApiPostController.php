<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\XISCode;
use App\Http\Controllers\XController;
use App\Http\Controllers\XRecordsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\XLoad;
use App\Http\Controllers\XTR;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrdersCalculationController;

class ApiPostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */

    public function __construct()
    {
        //$this->middleware(['auth', 'verified'])->except(['index','home']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */


    

     
    //############################# POST CREATE INDEX #############################//
    public function api_post_articles($secret_code, $post_category)
    {

        if($secret_code == '12345'){}
        else{dd('::Unauthorized or Invalid Request::');exit;}

        $data = array();
        $xdata = array();
        //$pid_admin = Auth::user()->pid_admin;

        //////////////////// REQUIRED CORE DATA ////////////////////
        //$data['pid_admin'] = $pid_admin;
        //////////////////// REQUIRED CORE DATA ////////////////////

        $xdata['posts'] = DB::table('posts')->where('xstatus',1)->where('post_category',$post_category)->get();
        
        return response()->json($xdata, 200);

        //return view('pages/post_create_form_index', $data);exit;

    }





        





////////////////////// END OF CONTROLLER ///////////////////////
}
