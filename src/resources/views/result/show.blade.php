@extends('layouts.app')
@section('title', "結果：" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="result-title">J　U　D　G　E</h1>
    </div>
    <div class="box">
        <div class="result-name-outer">
            <div class="result-name-inner">
                {{ $result['name'] }}
            </div>
        </div>
    </div>
    <div class="box">
        <div>
            {{ $result['description'] }}
        </div>
    </div>
    <div class="box">
        <div class="result-twitter">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-size="large" data-text="あなたは「{{ $result['name'] }}」タイプ！｜{{ config('app.name') }}">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
@endsection
