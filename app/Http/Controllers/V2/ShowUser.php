<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShowUser extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @return Response
     */
    public function __invoke(Request $request)
    {
        return $request->user();
    }
}
