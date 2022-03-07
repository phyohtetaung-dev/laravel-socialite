<?php

namespace App\Enum;

enum OAuthProvider:string {
    case Github = 'github';
    case Facebook = 'facebook';
    case Google = 'google';
}
