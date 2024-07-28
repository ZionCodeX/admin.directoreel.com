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
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class GoverningBodyController extends Controller
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
    public function governing_body_create_index()
    {
        $data = array();
        

        //USERS RECORDS
        $data['users_show_all'] = XRecordsController::users('SHOW_ALL');
        $data['users_count_all'] = XRecordsController::users('COUNT_ALL');
        $data['users_count_registered'] = XRecordsController::users('COUNT_REGISTERED');
        $data['users_count_unregistered'] = XRecordsController::users('COUNT_UNREGISTERED');

        return view('pages/governing_body_create_index', $data);
    }


    public function governing_body_create_prox(Request $request)
    {
        $data = array();
        
        //USERS RECORDS
        $data['users_show_all'] = XRecordsController::users('SHOW_ALL');
        $data['users_count_all'] = XRecordsController::users('COUNT_ALL');
        $data['users_count_registered'] = XRecordsController::users('COUNT_REGISTERED');
        $data['users_count_unregistered'] = XRecordsController::users('COUNT_UNREGISTERED');
        $data['account_type'] = 'GOVERNING_BODY';

        $pid_user =  'GBDR'.XController::xhash(5).time();

        //remove spaces in string and convert to underscore
        $email = strtolower($request->email);

        if($request->password == $request->passwordc){

        DB::table('users')->insert(
            [
                'pid_user' => $pid_user,
                'email' => $email,
                'phone' => $request->phone,
                'account_type' => 'GOVERNING_BODY',
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'street' => $request->street,
                'governing_body_name' => $request->governing_body_name,
                'governing_body_chapter' => $request->governing_body_chapter,
                'governing_body_state' => $request->governing_body_state,
                'governing_body_website' => $request->governing_body_website,
                'governing_body_brief' => $request->governing_body_brief,
                'governing_body_officer_name' => $request->governing_body_officer_name,
                'governing_body_officer_phone' => $request->governing_body_officer_phone,
                'superuser' => 'NO',
                'active' => 'YES',
                'email_verified_at' => now(),
                'password' => Hash::make($request->password),
                'created_at' => now(),
                'updated_at' => now()
            ]
          );
        }else{
            return back()->with('failed','Passwords provided are not same. Please enter password again.');exit;
        }

        \Session::flash('success', 'Governing Body Account has been Successfully Created!');
        return view('pages/users_records_view_index', $data);
    }




//////////////////// END OF CLASS //////////////////   
}
