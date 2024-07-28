<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\XISCode;
use App\Http\Controllers\XController;
//use App\Http\Controllers\RecordsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class XRecordsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $records;

    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */





    ////////////********** USERS RECORDS **********/////////////
    public static function users($data_filter)
    {
        //meta data
        $data = array();
        $pid_admin = Auth::user()->pid_user;
        $records = '';


        //------- FILTER RECORDS -------//

        //ALL USERS
        if($data_filter == '')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('xstatus', 1)
                        ->orderBy('id', 'DESC')
                        ->get();
        }


        //ALL USERS
        if($data_filter == 'SHOW_ALL')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('xstatus', 1)
                        ->orderBy('id', 'DESC')
                        ->get();
        }


        //REGISTERED USRES
        if($data_filter == 'SHOW_ACTIVATED')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('email_verified_at', '<>', null)
                        ->where('xstatus', 1)
                        ->orderBy('id', 'DESC')
                        ->get();
        }


        //UNREGISTERED USERS
        if($data_filter == 'SHOW_UNACTIVATED')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('email_verified_at', '=', null)
                        ->where('xstatus', 1)
                        ->orderBy('id', 'DESC')
                        ->get();
        }


        //------- COUNT RECORDS -------//

        //COUNT ALL
        if($data_filter == 'COUNT_ALL')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('xstatus', 1)
                        ->count();
        }


        //COUNT REGISTERED
        if($data_filter == 'COUNT_ACTIVATED')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('email_verified_at', '<>', null)
                        ->where('xstatus', 1)
                        ->count();
        }


        //COUNT UNACTIVATED
        if($data_filter == 'COUNT_UNACTIVATED')
        {
            $records = DB::table('users')
                        ->where('superuser', '=', "NO")
                        ->where('email_verified_at', '=', null)
                        ->where('xstatus', 1)
                        ->count();
        }


        //DATA FOR VIEW
        //$data['result'] = $records;

        return $records;
    }







 



////////////////////// END OF CONTROLLER ///////////////////////
}
