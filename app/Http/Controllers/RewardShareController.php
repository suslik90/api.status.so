<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RewardShare;
use App\Http\Requests;

class RewardShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewardShares = RewardShare::all();
        return $rewardShares;
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
        $rewardShares = new RewardShare;
        $rewardShares->old_user_reward_id = $request->old_user_reward_id;
        $rewardShares->new_user_reward_id = $request->new_user_reward_id;
        $rewardShares->reason = $request->reason;
        $rewardShares->datetime = $request->datetime;

        $result = [];
        $result['result'] = $rewardShares->save();

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
        $rewardShare = RewardShare::findOrFail($id);
        return $rewardShare;

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
        $rewardShare = RewardShare::find($id);

        if (isset($request->old_user_reward_id))
            $rewardShare->old_user_reward_id = $request->old_user_reward_id;
        if (isset($request->new_user_reward_id))
            $rewardShare->new_user_reward_id = $request->new_user_reward_id;
        if (isset($request->reason))
            $rewardShare->reason = $request->reason;
        if (isset($request->datetime))
            $rewardShare->datetime = $request->datetime;

        $result = [];
        $result['result'] = $rewardShare->save();

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
        $rewardShare = RewardShare::findOrFail($id);

        $result=[];
        $result['result']=$rewardShare->delete();

        return $result;

    }
}
