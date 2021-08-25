<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data) {
        return response([
            'success' => true,
            'data' => $data
        ], 200);
    }

    public function error($data, $message) {
        return response([
            'success' => false,
            'data' => $data,
            'message' => $message
        ], 403);
    }
}
