<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('can:impersonate');
    }

    /**
     * Impersonate the given user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function impersonate(User $user)
    {

        if ($user->id !== ($original = Auth::user()->id)) {
            session()->put('original_user', $original);

            auth()->login($user);
        }

        return redirect('/home');
    }

    /**
     * Revert to the original user.
     *
     * @return \Illuminate\Http\Response
     */
    public function stopImpersonation()
    {
        auth()->loginUsingId(session()->get('original_user'));

        session()->forget('original_user');

        return redirect('/home');
    }
}
