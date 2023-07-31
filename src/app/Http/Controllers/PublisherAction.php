<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PublisherService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// 叩くコマンド
// curl 'http://localhost:8090/api/publisher' \ 
// --request POST \                             
// --data 'name=テスト出版社&address=東京都A区'   



final class PublisherAction
{
    private $publisher;

    public function __construct(PublisherService $publisher)
    {
        $this->publisher = $publisher;
    }

    public function create(Request $request)
    {
    
        $exit_publisher = $this->publisher->exist($request->name);

        if($exit_publisher){
            return response('同じ出版社が存在しています', Response::HTTP_OK);
        }

        $id = $this->publisher->store($request->name, $request->address);
        return response('登録しました', Response::HTTP_CREATED)
                ->header('Location', '/api/publisher/' . $id);
    }
}