<?php

namespace App\Http\Controllers;

use App\TestLog;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $test_log = new TestLog();
        $test_log->body = $request->getContent();
        $test_log->store();

        return response('Value stored',200);
    }
}
