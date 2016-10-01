<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Requests;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return $feedbacks;
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
        $feedback = new Feedback;
        $feedback->user_reward_id = $request->user_reward_id;
        $feedback->reward_supplier_id = $request->reward_supplier_id;
        $feedback->rating = $request->rating;
        $feedback->text = $request->text;
        $feedback->rating_datetime = $request->rating_datetime;
        $feedback->answer = $request->answer;
        $feedback->answer_datetime = $request->answer_datetime;

        $result = [];
        $result['result'] = $feedback->save();

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
        $feedback = Feedback::findOrFail($id);
        return $feedback;

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
        $feedback = Feedback::find($id);

        if (isset($request->user_reward_id))
            $feedback->user_reward_id = $request->user_reward_id;
        if (isset($request->reward_supplier_id))
            $feedback->reward_supplier_id = $request->reward_supplier_id;
        if (isset($request->rating))
            $feedback->rating = $request->rating;
        if (isset($request->text))
            $feedback->text = $request->text;
        if (isset($request->rating_datetime))
            $feedback->rating_datetime = $request->rating_datetime;
        if (isset($request->answer))
            $feedback->answer = $request->answer;
        if (isset($request->answer_datetime))
            $feedback->answer_datetime = $request->answer_datetime;

        $result = [];
        $result['result'] = $feedback->save();

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
        $feedback = Feedback::findOrFail($id);

        $result=[];
        $result['result']=$feedback->delete();

        return $result;

    }
}
