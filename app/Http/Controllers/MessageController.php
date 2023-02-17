<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Message::get()->reverse();
        return view('messages.index', compact('msgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->subject = $request->subject;
        $message->text = $request->text;
        $message->readed = 0;
        $message->save();
    
        $sent = true;
        return redirect()->route('messages.create', compact('sent'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $Message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {   $message->readed = 1;
        $message->save();
        $msgs = Message::all()->reverse();
        return view('messages.show', compact('message'), compact('msgs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $Message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $Message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $Message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index');
    }
}
