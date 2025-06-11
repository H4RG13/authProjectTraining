<?php
/**
 * RegisteredUserController handles user registration requests.
 *
 * @package App\Http\Controllers\Auth
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     */
   public function store(Request $request)
{
    $request->validate([
        'last_name' => ['required', 'string', 'max:255'],
        'first_name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255', 'unique:users'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'user_type' => 'user', // Always set as user
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
    }

    public function create()
{
    return view('auth.register');
}

}
