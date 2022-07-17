<?php
use Illuminate\Support\Str;

if (!function_exists('generateAndSaveApiAuthToken')) {
    
        function generateAndSaveApiAuthToken()
        {
            $token = Str::random(60);
            $this->api_token = $token;
            $this->save();
            return $this;
        }
}