<?php

namespace Soundmix\Http\Controllers\Auth;

use Soundmix\Http\Controllers\Controller;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthController extends Controller
{

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    public function soundcloud()
    {
        return $this->socialite->driver('soundcloud')->redirect();
    }

    public function mixcloud()
    {
        return $this->socialite->driver('mixcloud')->redirect();
    }

}
