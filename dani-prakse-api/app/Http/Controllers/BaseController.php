<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function success($data, $message = null)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message
        ], 200);
    }

    public function error($error, $errorMessages = [], $code = 404)
    {
        return response()->json([
            'success' => false,
            'error' => $error,
            'error_messages' => $errorMessages
        ], $code);
    }
}
