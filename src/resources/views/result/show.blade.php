@extends('layouts.app')
@section('title', "結果：" . config('app.name'))
@section('content')
    <div>
        <h1>結果</h1>
        <div>
            {{ $result['name'] }}
        </div>
        <div>
            {{ $result['description'] }}
        </div>
    </div>
@endsection
