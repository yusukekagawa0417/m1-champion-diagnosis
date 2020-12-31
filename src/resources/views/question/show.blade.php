@extends('layouts.app')
@section('title', "質問|" . $question['content'] . "|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">  
            <h1 class="question-title">Q U E S T I O N</h1>
        </div>
        <div class="box">
            <div class="question-content">
                {{ $question['content'] }}
            </div>
        </div>
        <div class="box">
            @if (isset( $question['answer']['yes'] ))
                <a href="{{ route($question['answer']['yes']['path'], ['id' => $question['answer']['yes']['id']])}}" 
                   class="btn btn-border btn-yes">
                      はい
                </a>
            @endif
            @if (isset( $question['answer']['no'] ))
                <a href="{{ route($question['answer']['no']['path'], ['id' => $question['answer']['no']['id']]) }}" 
                  class="btn btn-border btn-no">
                      いいえ
                </a>
            @endif
        </div>
    </div>
@endsection
