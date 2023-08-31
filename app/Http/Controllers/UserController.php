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


        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('phone','=',$request->phone)->first();
        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                $fio = $user->lastname." ".$user->firstname;
                $logo = $user->lastname[0]." ".$user->firstname[0];
                $request->session()->put('fio',$fio);
                $request->session()->put('logo',$logo);
                $request->session()->put('user_type',$user->user_type_id);
                return redirect(route('index'))->with('xabar','Hurmatli '.$fio.' <br> Hush kelibsiz!');
            }
            else{
                return back()->with('xabar','Parol xato!!!');
            }
           }
        else{
                return back()->with('xabar','Login xato!!!');
            }

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
            $fio = $user->lastname." ".$user->firstname;
            $logo = $user->lastname[0]." ".$user->firstname[0];

            $request->session()->put('fio',$fio);
            $request->session()->put('logo',$logo);
            $request->session()->put('user_type',$user->user_type_id);
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

    public function logout(){
        session()->flush();
        return redirect(route('index'));
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
