<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UpdateAccountController extends Controller
{

    /**
     * Get data from User Model
     * @param int $id
     * @return User json data in 'auth.updateAccount' view with url('/updateAccount/{id}'
     * */
    public function index($id)
    {
        $user = User::select('name' ,'email', 'password','gender','birthday','mobile','user_type')->find($id);
        return view('auth.updateAccount')->with(compact('user'));
    }
    /**
     * Get data from auth.updateAccount view to update it
     * @param Request $request
     * @param int $id
     * @return view redirect to auth.updateAccount view after updating
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_type' => $request['user_type'],
            'birthday' => $request['birthday'],
            'gender' => $request['gender'],
            'mobile' => $request['mobile']
            ]);
        return redirect()->back();
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
