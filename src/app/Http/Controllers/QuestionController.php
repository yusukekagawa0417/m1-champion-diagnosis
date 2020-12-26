<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class QuestionController extends Controller
{
    /**
     * 質問詳細
     * 
     * @param string $id
     * @return Factory|View
     */
    public function show ($id)
    {
        $question = config("question.${id}");
        if (!$question) {
            abort(Response::HTTP_NOT_FOUND);
        }
        return view('question.show', compact('question'));
    }
}
