<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    function demo(Request $request)
    {
        return "Hello from DemoController";
    }
    function demo6(Request $request)
    {
        return array(
            [
                "name" => "Adibul Haque",
                "age" => 23
            ],
            [
                "name" => "Haque",
                "age" => 22
            ]
        );
    }

    function demo7()
    {
        return response()->json([["name" => "Adibul Haque", "age" => 23], ["name" => "Haque", "age" => 22]]);
    }

    //Response message,data,code

    function demo8()
    {
        return response()->json(
            [
                'message' => 'Registration Successful',
                'data' => [
                    'name' => 'Adibul Haque',
                    'age' => 23
                ]
            ],
            201

        );
    }



    function demo9()
    {
        return redirect('/demo8');
    }

    // Binary File Response
    function demo10()
    {
        $path = "storage/uploads/11111.JPG";
        return response()->file($path);
    }

    // Download File
    function demo11()
    {
        $path = "storage/uploads/11111.JPG";
        return response()->download($path);
    }

    // Response Cookies
    function demo12()
    {
        return response("Say Hello")->cookie("my_cookies", "Adibul Haque", 60);
    }
    // Attaching Response Header
    function demo13()
    {
        return response('hello')->header('my-token', 'abc1234');
    }
    function demo14()
    {
        return view('index');
    }

    //Request URL Parameters
    function demo15(Request $request)
    {
        $a = $request->num1;
        $b = $request->num2;

        return $a + $b;
    }

    // Request Body
    function demo16(Request $request)
    {
        $wholebody = $request->input();
        $a = $wholebody['num1'];
        $b = $wholebody['num2'];
        return $a + $b;
    }


    // Request Header
    function demo17(Request $request)
    {
        $a = $request->header('my_key');
        return $a;
    }

    // Ip address find
    function demo18(Request $request)
    {
        return $request->ip();
    }

    // Request Cookies
    function demo19(Request $request)
    {
        $myCookies = $request->cookie('phpLaravelBatch');
        return $myCookies;
    }
}
