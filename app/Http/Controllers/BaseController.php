<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2017/8/25
 * Time: 20:35
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $_request;

    public function __construct( Request $request )
    {
        $this->_request = $request;
    }
}