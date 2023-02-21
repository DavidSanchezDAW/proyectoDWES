<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
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
        foreach($users as $user){
            if(file_exists(public_path('img/profilePictures/'.$user->id.'.jpg'))){
                $user->profilePicture = $user->id;
            }else{
                $user->profilePicture = 'default';
            }
        }
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->birthday = $request->birthday;
        $user->rol = 'member';
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if(file_exists(public_path('img/profilePictures/'.$user->id.'.jpg'))){
            $user->profilePicture = $user->id;
        }else{
            $user->profilePicture = 'default';
        }
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(file_exists(public_path('img/profilePictures/'.$user->id.'.jpg'))){
            $user->profilePicture = $user->id;
        }else{
            $user->profilePicture = 'default';
        }
        return(view('users.edit', compact('user')));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->birthday = $request->birthday ? $request->birthday : $user->birthday;
        $user->password = $request->password ? Hash::make($request->password) : $user->password;
        $user->instagram = $request->instagram ? $request->instagram : $user->instagram;
        $user->twitter = $request->twitter ? $request->twitter : $user->twitter;
        $user->twitch = $request->twitch ? $request->twitch : $user->twitch;

        $user->save();
        if($request->hasFile('profilePicture')){
            $file = $request->file('profilePicture');
            $name = $user->id.'.jpg';
            $success = $file->move('img\profilePictures', $name);
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
