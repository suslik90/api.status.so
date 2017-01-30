<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->login = $request->login;
        $user->pwd_md5 = md5($request->password);
        $user->surname = $request->surname ? $request->surname : '';
        $user->firstname = $request->firstname ? $request->firstname : '';
        $user->secondname = $request->secondname ? $request->secondname : '';
        $user->timezone_current = $request->timezone_current ? $request->timezone_current : '';
        $user->birthday_date = $request->birthday_date ? $request->birthday_date : '';
        $user->registered_datetime = date('Y.m.d H:i:s');
        $user->lastseen_datetime = date('Y.m.d H:i:s');
        $user->interests = $request->interests ? $request->interests : '';
        $user->phone = $request->phone ? $request->phone : '';
        $user->imei = $request->imei ? $request->imei : '';
        $user->imsi = $request->imsi ? $request->imsi : '';
        $user->email = $request->email ? $request->email : '';
        $user->money_spent_total = 0;
        $user->cheque_avg = 0;
        $user->money_spent_thresold = 0;
        $user->cashback_total = 0;
        $user->city_id = $request->city_id ? $request->city_id : 0;
        $user->country_id = $request->country_id ? $request->country_id : 0;
        $user->district = '';
        $user->favorites = '';

        $result = [];
        $result['result'] = $user->save();

        return $result;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $requestParams = $request->all();
        foreach($requestParams as $key=>$value){
            $user->$key = $value;
        }

        $result = [];
        $result['result'] = $user->save();

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $result=[];
        $result['result']=$user->delete();

        return $result;
    }

    public function rewardsByUserId($id)
    {
        $start = microtime(true);
        $userRewards = DB::table('users')
            ->join('user_rewards', 'users.id', '=', 'user_rewards.user_id')
            ->join('rewards', 'rewards.id', '=', 'user_rewards.reward_id')
            ->where('users.id','=',$id)->select('rewards.photo_url','users.cheque_avg')
            ->get();

        $time = microtime(true)-$start;

        $result=[];
        $result['result']=$userRewards;
        $result['exec_time']=$time;
//dd($result);
        return $result;
    }

    public function settingsByUserId($id)
    {
        $responseFields = ['surname','firstname','secondname','birthday_date','interests','countries.name as country','cities.name as city'];
        $start = microtime(true);
        $userRewards = DB::table('users')
            ->join('user_settings', 'users.id', '=', 'user_settings.user_id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->join('countries', 'users.country_id', '=', 'countries.id')
            ->where('users.id','=',$id)
            ->select($responseFields)
            ->get();

        $time = microtime(true)-$start;

        $result=[];
        $result['result']=$userRewards;
        $result['exec_time']=$time;
        return $result;
    }

    public function offersByUserId($id)
    {
        $responseFields = ['surname','firstname','secondname','birthday_date','interests','countries.name as country','cities.name as city'];
        $start = microtime(true);
        $rewards = Reward::all();
//        $userRewards = DB::table('users')
//            ->join('user_settings', 'users.id', '=', 'user_settings.user_id')
//            ->join('cities', 'users.city_id', '=', 'cities.id')
//            ->join('countries', 'users.country_id', '=', 'countries.id')
//            ->where('users.id','=',$id)
//            ->select($responseFields)
//            ->get();

        $time = microtime(true)-$start;

        $result=[];
        $result['result']=$rewards;
        $result['exec_time']=$time;
        return $result;
    }

}
