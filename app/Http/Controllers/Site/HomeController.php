<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;

class HomeController extends Controller
{
    function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    public function index()
    {
        $slider =  $this->slider->getAll();
        return view('site.index', compact('slider'));
    }
}
