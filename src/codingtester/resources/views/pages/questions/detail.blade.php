@extends('layout.common')

@section('title', 'ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

{{-- CSS --}}
@section('pageCss')
    <link href="{{ asset('css/answer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet" type="text/css">
@endsection
 
@include('layout.header')
 
{{-- content --}}
@section('content')

    <div class="detail_wrap">
        <div class="detail_title">
            {!! $question->title !!}
        </div>
        <div>
            {!! $question->prerequisites !!}
        </div>
        <div>
            {!! $question->input !!}
        </div>
        <div>
            {!! $question->output !!}
        </div>
        <div>
            {!! $question->conditions !!}
        </div>
        <div>
            {!! $question->input_example1 !!}
        </div>
        <div>
            {!! $question->output_example1 !!}
        </div>
        <div>
            {!! $question->input_example2 !!}
        </div>
        <div>
            {!! $question->output_example2 !!}
        </div>
    </div>
@include("pages.include.answer")
@endsection

 
@include('layout.footer')