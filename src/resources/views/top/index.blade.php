@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <div class="container">
        <div class="box">  
            <h1 class="top-title">{{ config('app.name') }}</h1>
        </div>
        <div class="box">
            ＜説明＞
        </div>
        <div class="box">
            <a href="{{ route('question', ['id' => '1']) }}" class="btn btn-solid-gold">エントリー</a>
            </a>
        </div>
    </div>
@endsection
