<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccessRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AccessRequest $request)
    {
        $email = $request->validated('email');
        $password = $request->validated('password');

        if(!auth()->attempt(compact('email', 'password'))){
            return back();
        }

        session()->flash('logged', 'O usuário '. auth()->user()->name . ' foi logado com sucesso!');

        return redirect()->route('index');
    }
}
