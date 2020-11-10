<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Handle Queue Process
     */
    public function processQueue()
    {
        $emailJob = new SendWelcomeEmail();
        dispatch($emailJob)->delay(now()->addMinutes(5));
    }
}
