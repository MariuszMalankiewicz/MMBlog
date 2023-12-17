<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        auth()->login($user);

        return redirect('/')->with('success', 'Konto zostało założone');
    }
}
