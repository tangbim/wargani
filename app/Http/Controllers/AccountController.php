<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account', [
            "title" => "Account",
            //masih kosong yakkk
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->newPassword){
            $request->validate([
                'nameInput' => ['required', 'string', 'max:255'],
                'emailInput' => ['required'],
                'currentPassword' => ['required','current_password'],
                'newPassword' => ['required', 'confirmed', 'different:currentPassword']
            ]);
            $user->name = $request->nameInput;
            $user->password = bcrypt($request->newPassword);
            $user->save();
        }else{
            $request->validate([
                'nameInput' => ['required', 'string', 'max:255'],
                'emailInput' => ['required'],
                'currentPassword' => ['required','current_password'],
            ]);
            $user->name = $request->nameInput;
            $user->save();
        }
        return redirect('/account')->with('success', 'Your account has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/')->with('success', "Your account has been deleted successfully");
    }
}
