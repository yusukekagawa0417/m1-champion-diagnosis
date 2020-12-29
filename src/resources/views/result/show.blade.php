@extends('layouts.app')
@section('title', "結果：" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="result-title">J　U　D　G　E</h1>
        </div>
        <div class="box">
            <div class="result-name-outer">
                <div class="result-name-inner1">
                    <img src="{{ asset('/image/crown.png') }}" alt="crown">
                </div>
                <div class="result-name-inner2">
                    {{ $result['name'] }}
                </div>
            </div>
        </div>
        <div class="box">
            <div class="result-description">
              {!! nl2br(e($result['description'])) !!}
            </div>
        </div>
        <div class="box">
            <div class="result-twitter">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-size="large" data-text="あなたは「{{ $result['name'] }}」タイプ！｜{{ config('app.name') }}" data-url="https://google.co.jp">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="result-return-top">
                <a href="{{ url('/') }}" class="btn btn-solid-gold">◀︎ 再挑戦</a>
            </div>
        </div>
    </div>
@endsection
