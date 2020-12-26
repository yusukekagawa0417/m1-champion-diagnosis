@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <div>
        <h1>{{ config('app.name') }}</h1>
        <div>
            <a href="{{ route('question', ['id' => '1']) }}">
                はじめる
            </a>
        </div>
    </div>
@endsection
