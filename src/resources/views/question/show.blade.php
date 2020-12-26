@extends('layouts.app')
@section('title', "質問：" . config('app.name'))
@section('content')
    <div>
        <h1>質問</h1>
        <div>
            {{ $question['content'] }}
        </div>
        <div>
            <a href="{{ route($question['answer']['yes']['path'], ['id' => $question['answer']['yes']['id']]) }}">
                はい
            </a>
            <a href="{{ route($question['answer']['no']['path'], ['id' => $question['answer']['no']['id']]) }}">
                いいえ
            </a>
        </div>
    </div>
@endsection
