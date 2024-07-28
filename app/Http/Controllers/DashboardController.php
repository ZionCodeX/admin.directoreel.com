<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\XISCode;
use App\Http\Controllers\XController;
use App\Http\Controllers\RecordsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $data = array();
        

        //USERS RECORDS
        $data['users_show_all'] = XRecordsController::users('SHOW_ALL');
        $data['users_count_all'] = XRecordsController::users('COUNT_ALL');
        $data['users_count_registered'] = XRecordsController::users('COUNT_REGISTERED');
        $data['users_count_unregistered'] = XRecordsController::users('COUNT_UNREGISTERED');

        return view('pages/dashboard', $data);
    }


    public function users_records_view_index($account_type)
    {
        $data = array();
        //USERS RECORDS
        $data['users_show_all'] = XRecordsController::users('SHOW_ALL');
        $data['users_count_all'] = XRecordsController::users('COUNT_ALL');
        $data['users_count_registered'] = XRecordsController::users('COUNT_REGISTERED');
        $data['users_count_unregistered'] = XRecordsController::users('COUNT_UNREGISTERED');
        $data['account_type'] = $account_type;
        
        return view('pages/users_records_view_index', $data);
    }





//////////////////// END OF CLASS //////////////////   
}
