@extends('layouts.app')
@section('title', "お問い合わせ：" . config('app.name'))
@section('content')
<div class="container">
    <div class="box">
        @include('shared.top-title')
    </div>
    <div class="box contact">
        <h1>お問い合わせ</h1>
        <p>『{{ config('app.name') }}』に関するお問い合わせは、ツイッターアカウント@yusuke_kagawaへのDMにてお願いします。</p>
    </div>
</div>

@endsection
