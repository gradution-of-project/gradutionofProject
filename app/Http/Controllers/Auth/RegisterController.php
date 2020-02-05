<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }*/
    protected function validator(array $data){
return Validator::make($data, [
    'fname'=>'required',
    'lname'=>'required',
    'email'=>'required|email|unique:users',
    'password'=>'required|min:6',
]);
}
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   /* protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }*/
    protected function create(array $data)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $exetantion = $file->getClientOriginalName();
            $namefile = time() .'.'.$exetantion;
            $file->move(  'publicimages/',$namefile);
            $user->image=$namefile;
        } else {
            return $request;
            $user->image='';
        }
        return User::create([
            $user->fristname = $request->input('fname'),
        $user->lastname = $request->input('lname'),
        $user->email = $request->input('email'),
        $user->password = bcrypt($request->input('password')),
        $user->gender = $request->input('sl-gender'),
        $user->brithdate = $request->input('brithdate'),
        $user->phone = $request->input('phone'),



        ]);
        return redirect()->route('/');
    }
}
