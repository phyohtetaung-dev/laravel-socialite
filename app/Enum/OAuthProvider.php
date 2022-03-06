<?php

namespace App\Enum;

enum OAuthProvider:string {
    case Manual = 'manual';
    case Github = 'github';
    case Facebook = 'facebook';
    case Google = 'google';
}
