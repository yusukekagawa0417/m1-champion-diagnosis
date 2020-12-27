@extends('layouts.app')
@section('title', "質問：" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">  
            <h1>QUESTION</h1>
        </div>
        <div class="box">
            {{ $question['content'] }}
        </div>
        <div class="box">
            <a href="{{ route($question['answer']['yes']['path'], ['id' => $question['answer']['yes']['id']])}}" class="btn btn-border btn-yes">はい</a>
            <a href="{{ route($question['answer']['no']['path'], ['id' => $question['answer']['no']['id']]) }}" class="btn btn-border btn-no">いいえ</a>
        </div>
    </div>
@endsection
