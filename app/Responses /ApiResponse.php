<?php

namespace App\Responses;

class ApiResponse 
{
    public static function success(?string $message = null, mixed $data = null) 
    {
        return response()->json(
            [
                "status" => "success",
                "message" => $message,
                "data" => $data
            ], 200
        );
    }
}

