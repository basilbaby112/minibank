<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //index
    public function index(){
        return view('index');
    }
    // show register
    public function create(){

        return view('users.register');

    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required','numeric','digits:10', Rule::unique('users', 'phone')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $validated = $request->validate([
            'value' => 'required',
            'password' => 'required',
        ]);

        $maxAttempts = 3; // Maximum login attempts
        $decayMinutes = 5; // Lockout duration in minutes


        if(is_numeric($request->get('value'))){
            $phone = $request->get('value');
            $password = $request->get('password');

            $formFields = [
                'phone' => $phone,
                'password' => $password
            ];
          }
          elseif (filter_var($request->get('value'), FILTER_VALIDATE_EMAIL)) {
            $email = $request->get('value');
            $password = $request->get('password');

            $formFields = [
                'email' => $email,
                'password' => $password
            ];
          }else{
            return redirect('/')->with('message', 'Invalid credentials');
          }

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }else{
            
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
