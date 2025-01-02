<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;


class Login extends Component
{

    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function authenticate()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect()->intended('dashboard');
        }

        $this->addError('email', trans('auth.failed'));
    }

    public function render()
    {
        return view('livewire.login');
    }
}
