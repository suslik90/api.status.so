<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReward;
use App\Http\Requests;

class UserRewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userRewards = UserReward::all();
        return $userRewards;
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
        $userReward = new UserReward;
        $userReward->user_id = $request->user_id;
        $userReward->reward_id = $request->reward_id;
        $userReward->reward_supplier_id = $request->reward_supplier_id;
        $userReward->first_owner_id = $request->first_owner_id;
        $userReward->percent = $request->percent;
        $userReward->state = $request->state;
        $userReward->datetime = $request->datetime;
        $userReward->tradepoint_id = $request->tradepoint_id;
        $userReward->staff_id = $request->staff_id;
        $userReward->rating = $request->rating;

        $result = [];
        $result['result'] = $userReward->save();

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
        $userReward = UserReward::findOrFail($id);
        return $userReward;
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
        $userReward = UserReward::find($id);

        if (isset($request->user_id))
            $userReward->user_id = $request->user_id;
        if (isset($request->reward_id))
            $userReward->reward_id = $request->reward_id;
        if (isset($request->reward_supplier_id))
            $userReward->reward_supplier_id = $request->reward_supplier_id;
        if (isset($request->first_owner_id))
            $userReward->first_owner_id = $request->first_owner_id;
        if (isset($request->percent))
            $userReward->percent = $request->percent;
        if (isset($request->state))
            $userReward->state = $request->state;
        if (isset($request->datetime))
            $userReward->datetime = $request->datetime;

        if (isset($request->tradepoint_id))
            $userReward->tradepoint_id = $request->tradepoint_id;
        if (isset($request->staff_id))
            $userReward->staff_id = $request->staff_id;
        if (isset($request->rating))
            $userReward->rating = $request->rating;

        $result = [];
        $result['result'] = $userReward->save();

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
        $userReward = UserReward::findOrFail($id);

        $result=[];
        $result['result']=$userReward->delete();

        return $result;

    }
}
