<?php

namespace app\controllers;
use app\core\Controller;
use app\core\Application;
// use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "cpx-smartcoder"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(app\core\Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
    }
}