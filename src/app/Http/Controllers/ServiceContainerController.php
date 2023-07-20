<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

class ServiceContainerController extends Controller
{
    public function index()
    {

        // 解決するたびにバインドのクロージャが実行されるため、常に新しいインスタンスが生成される
        $numcls = app()->make(Number::class,[0]);
        $numcls2 = app()->make(Number::class, [100]);
        $number = $numcls->getNumber();
        $number2 = $numcls2->getNumber();

        // インスタンスがキャッシュされるため、同じ値になる
        $randomNumber1 = app('random')->getNumber();
        $randomNumber2 = app('random')->getNumber();

        // Configファザード
        $debug = \Config::get('app.debug');


        return view('service-container',[
            'number' => $number,
            'number2' => $number2,
            'randomNumber1' => $randomNumber1,
            'randomNumber2' => $randomNumber2,
            'debug' => $debug,
        ]);
    }

}