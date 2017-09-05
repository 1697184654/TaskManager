<?php

namespace App\Http\Controllers;

use App\Packages\MeiZi\Services\MeiZiService;
use Guzzle\Http\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( MeiZiService $meiZiService)
    {

       $meiZiService->getTheFirstPictureUrl("http://i.meizitu.net/thumbs/2017/06/93907_05a48_236.jpg");
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
