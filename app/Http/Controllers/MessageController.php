<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return $messages;
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
        $message = new Message;
        $message->src_user_id = $request->src_user_id;
        $message->dst_user_id = $request->dst_user_id;
        $message->friend_id = $request->friend_id;
        $message->text = $request->text;
        $message->send_datetime = $request->send_datetime;
        $message->recieved_datetime = $request->recieved_datetime;
        $message->read_datetime = $request->read_datetime;

        $result = [];
        $result['result'] = $message->save();

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
        $message = Message::findOrFail($id);
        return $message;

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
        $message = Message::find($id);

        if (isset($request->src_user_id))
            $message->src_user_id = $request->src_user_id;
        if (isset($request->dst_user_id))
            $message->dst_user_id = $request->dst_user_id;
        if (isset($request->friend_id))
            $message->friend_id = $request->friend_id;
        if (isset($request->text))
            $message->text = $request->text;
        if (isset($request->send_datetime))
            $message->send_datetime = $request->send_datetime;
        if (isset($request->recieved_datetime))
            $message->recieved_datetime = $request->recieved_datetime;
        if (isset($request->read_datetime))
            $message->read_datetime = $request->read_datetime;

        $result = [];
        $result['result'] = $message->save();

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
        $message = Message::findOrFail($id);

        $result=[];
        $result['result']=$message->delete();

        return $result;

    }
}
