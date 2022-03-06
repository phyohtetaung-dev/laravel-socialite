<?php

namespace App\Http\Controllers\Auth;

use App\Enum\OAuthProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function handleRedirect(OAuthProvider $provider)
    {
        try {
            return Socialite::driver($provider->value)->redirect();
        } catch (Exception $e) {
            Log::info($e);
            return to_route('error');
        }
    }

    public function handleCallback(OAuthProvider $provider)
    {
        try {
            $loginUser = Socialite::driver($provider->value)->user();

            $user = User::where('provider_id', $loginUser->id)->first();

            if (!$user) {
                $user = User::create([
                    'name' => $loginUser->name,
                    'email' => $loginUser->email,
                    'provider' => $provider->value,
                    'provider_id' => $loginUser->id,
                ]);
            }

            auth()->login($user);
            
            return to_route('dashboard');
        } catch (Exception $e) {
            Log::info($e);
            return to_route('error');
        }
    }

    public function handleError() {
        return view('error');
    }
}
