<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TimeService;

class TimeRpcController extends Controller
{
    public function getTime(TimeService $timeService)
    {
        $time = $timeService->getCurrentTime();

        return response("Aktuálny čas je: {$time}");
    }
}
