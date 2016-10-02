<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSettings;
use App\Http\Requests;

class UserSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userSettings = UserSettings::all();
        return $userSettings;
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
        $userSettings = new UserSettings;
        $userSettings->user_id = $request->user_id;
        $userSettings->privacy_who_can_write = $request->privacy_who_can_write;
        $userSettings->privacy_who_can_visit = $request->privacy_who_can_visit;
        $userSettings->privacy_who_can_ask_friendship = $request->privacy_who_can_ask_friendship;

        $result = [];
        $result['result'] = $userSettings->save();

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
        $userSettings = UserSettings::findOrFail($id);
        return $userSettings;
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
        $userSettings = UserSettings::find($id);

        if (isset($request->user_id))
            $userSettings->user_id = $request->user_id;
        if (isset($request->privacy_who_can_write))
            $userSettings->privacy_who_can_write = $request->privacy_who_can_write;
        if (isset($request->privacy_who_can_visit))
            $userSettings->privacy_who_can_visit = $request->privacy_who_can_visit;
        if (isset($request->privacy_who_can_ask_friendship))
            $userSettings->privacy_who_can_ask_friendship = $request->privacy_who_can_ask_friendship;

        $result = [];
        $result['result'] = $userSettings->save();

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
        $userSettings = UserSettings::findOrFail($id);

        $result=[];
        $result['result']=$userSettings->delete();

        return $result;

    }
}
