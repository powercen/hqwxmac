<?php

namespace App\Http\Controllers\Weixin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function trainingView()
    {
        return view('weixin.training');
    }

    public function interactionView()
    {
        return view('weixin.interaction');
    }

    public function punchcardView()
    {
        return view('weixin.punchcard');
    }
}
