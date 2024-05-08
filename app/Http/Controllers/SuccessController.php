<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index()
    {
        return redirect()->route('checkout.success');
    }

}
