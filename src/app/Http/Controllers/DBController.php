<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function __invoke()
    {
        DB::enableQueryLog();

        $authors = Author::find([1,3,5]);

        $queries = DB::getQueryLog();

        DB::disableQueryLog();

        return view('db', compact('queries'));
    }
}