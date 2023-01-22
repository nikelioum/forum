<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Account;
use Hash;

class MyAccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    //My account
    public function index(){

        $currentUserId = Auth::user()->id;

        $myaccount = Account::where('user_id', $currentUserId)->with('user')->first();

        /* dd($myaccount); */

        return view('front.my-account', compact('myaccount'));
    }

    //Edit profile
    public function edit_profile(Request $request){

        $currentUserId = Auth::user()->id;

        
        $account = Account::where('user_id', $currentUserId)->first();

 
        $account->firstname = $request->firstname;
        $account->lastname = $request->lastname;
        $account->facebook = $request->facebook;
        $account->instagram = $request->instagram;
        $account->personal_website = $request->personal_website;
        $account->signature = $request->signature;

        $account->save();

        return redirect('/my-account')->with('message', 'Το προφίλ σας ενημερώθηκε');
    }

    //Edit account
    public function edit_account(Request $request){

        $currentUserId = Auth::user()->id;
        
        $user = User::find($currentUserId);
 
        $user->name = $request->name;
        $user->email = $request->email;

        if(is_null($request->password)){
            $user->save();
        }else{
            $user->password = Hash::make($request->password);
            $user->save();
        }

        

        return redirect('/my-account')->with('message', 'Ο λογαριασμός σας ενημερώθηκε');
    }
}
