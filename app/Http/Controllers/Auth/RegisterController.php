<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
        'NationalID' => 'required|integer|digits:10|unique:users,empNationalID',
        'Firstname' => 'required|string|max:255',
        'SecName' => 'required|string|max:255',
        'ThirdName' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
      ]);
  }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'empNationalID' => $data['NationalID'],
            'email' => $data['email'],
            'empFirstname' => $data['Firstname'],
            'empSecName' => $data['SecName'],
            'empThirdName' => $data['ThirdName'],
            'empMobile' => $data['mobile'],
            'empGender' => $data['gender'],
            'empJobTitle' => $data['JobTitle'],
            'empBranch' => $data['Branch'],
            'empRoles' => $data['Branch'],

            'empPassword' => bcrypt($data['password']),
        ]);
    }
}
