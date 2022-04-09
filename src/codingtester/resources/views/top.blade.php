@extends('include.common')

@section('title', 'TOP')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

{{-- CSS --}}
@section('pageCss')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet" type="text/css">
@endsection

@include('include.header')
 
{{-- content --}}
@section('content')
<section class="hero">
    <div class="section_wrap">
        <div class="hero_content flex-column flex-center">
            <p class="hero_title">Welcome to</br>
            CodingTester</p>
            <div class="hero_text">
                <p>プログラミングの基礎が学べる</p>
                <p>プログラミングの実力を試せる</p>
                <p>プログラミングの</p>
            </div>
        </div>
        <div class="registration flex-column flex-center">
            <p class="registration_text">今すぐ登録して</br>
            出題しよう！</p>
            <div class="registration_form">
                <form action="">
                    <input type="text" placeholder="UserID">
                    <input type="mail" placeholder="Email">
                    <input type="password" placeholder="PassWord">
                </form>
                <button class="btn">Start now!</button>
            </div>
        </div>
    </div>
</section>
<section class="questions">
    <div class="section_wrap">
        <h2>QUESTIONS</h2>
        <p>挑戦したい問題を見つけよう！</p>
        <div class="questions_menu">
        </div>
        <div class="questions_wrap">
            <div class="question">
                <img src="photo/logo.png" alt="">
                <div class="question_text">
                    <p class="question_title">FizzBuzz</p>
                    <p class="question_description">プログラミングの基礎！好きな言語で挑戦しよう</p>
                    <div class="question_btn btn">問題を解く</div>
                </div>
            </div>
        </div>
        <div class="btn">
            <p>READ ALL</p>
        </div>
    </div>
</section>
<section class="news">
    <div class="section_wrap">
        <h2>NEWS</h2>
        <div class="news_wrap">
            <div class="news_block">
                <p>問題を追加しました</p>
                <div class="new_btn"></div>
            </div>
        </div>
        <div class="btn">
            <p>READ ALL</p>
        </div>
    </div>
</section>
<section class="faq">
    <div class="section_wrap">
        <h2>FAQ</h2>
        <div class="faq_wrap">
            <div class="faq_block">
                <p>回答できる言語は選択できますか？</p>
                <p>選択できます。Python、、、などの言語を選択して回答いただけます。</p>
            </div>
        </div>
        <div class="btn">
            <p>READ ALL</p>
        </div>
    </div>
</section>

@endsection
 
@include('include.footer')