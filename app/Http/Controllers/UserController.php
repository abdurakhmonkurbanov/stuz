<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Viloyat;
use App\Models\region;
use App\Models\school;
use Hash;
class UserController extends Controller
{

    public function login_form()
    {
        return view('login_form');
    }

    public function login(Request $request){

        return redirect(route('index'))->with('xabar','Siz ro`yxatdan o`tdingiz');
    }

    public function reg_form()
    {
        $vil = Viloyat::all();

        return view('registration',[
            'viloyat'=>$vil,
            'user_type' => $this->user_type
        ]);
    }

    public function registration(Request $request){

        $request->validate([
            'fistname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|unique:users|max:255',
            'password' => 'required',
            'user_type' => 'required'
        ]);

        $user = new User;
        $user->firstname = $request->fistname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->viloyat_id = $request->viloyat;
        $user->tuman_id = $request->region;
        $user->school_id = $request->school;
        $user->user_type_id = $request->user_type;

        $res = $user->save();
        if ($res){
            $request->session()->put('loginId',$user->id);
            $request->session()->put('fio',$user->lastname." ".$user->firstname);
            $request->session()->put('user_type',$user->type);
            return redirect(route('index'))->with('xabar','Siz ro`yxatdan o`tdingiz');
        }
        else{
            return back()->with(
                [
                    'xabar'=>'Siz ro`yxatdan o`tmadingiz',
                ]
            );
        }
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
