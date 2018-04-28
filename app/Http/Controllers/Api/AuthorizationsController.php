<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\Api\AuthorizationRequest;

class AuthorizationsController extends Controller
{
    public function login(AuthorizationRequest $request)
    {

        return $this->response->array($request->all());
    }
}
