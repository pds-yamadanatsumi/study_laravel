<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class PayloadAction
{
    public function __invoke(Request $request)
    {
        // 叩くコマンド
        // curl --request GET \
        //  --url http://localhost:8090/payload \
        //  --header 'content-type: application/json' \
        //  --data '{
        //     "message" : "request",
        //     "nested" : {
        //       "arrayOfString": ["Laravel"]
        //   }
        //  }'
        $request_json = $request->json('nested');
        return response()->json(['nested'=> $request_json['arrayOfString'][0]]);
    }
}