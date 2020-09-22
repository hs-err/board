<?php
namespace Controllers;

use Controller\Controllers\Controller;
use Http\Request;
use Http\Response;
use View\View;

class WelcomeController extends Controller
{
    public function test(Request $request){
        return (new Response(View::view('test')));
    }
}