<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ResultController extends Controller
{
    /**
     * 結果詳細
     * 
     * @param string $id
     * @return Factory|View
     */
    public function show ($id)
    {
        $result = config("result.${id}");
        if (!$result) {
            abort(Response::HTTP_NOT_FOUND);
        }
        return view('result.show', compact('result'));
    }
}
