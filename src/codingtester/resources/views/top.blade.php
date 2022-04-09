@extends('include.common')

@section('title', 'TOP')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '説明文です')

@include('include.header')
 
{{-- content --}}
@section('content')
<section class="hero">
    <div class="hero_text">
        <p>Welcome to</br>
        CodingTester</p>
        <div>
            <p>プログラミングの基礎が学べる</p>
            <p>プログラミングの実力を試せる</p>
            <p>プログラミングの</p>
        </div>
    </div>
    <div class="form_registration">
        <p>今すぐ登録して</br>
        実力を試そう！</p>
        <div>
            <form action="">
                <input type="text" placeholder="UserID">
                <input type="mail" placeholder="Email">
                <input type="password" placeholder="PassWord">
            </form>
            <button>Start now!</button>
        </div>
    </div>
</section>
<section class="questions">
    <h2>QUESTIONS</h2>
    <p>挑戦したい問題を見つけよう！</p>
    <div class="questions_menu">
    </div>
    <div class="questions_wrap">
        <div class="question">
            <img src="photo/logo.png" alt="">
            <div class="question_text">
                <p class="title">FizzBuzz</p>
                <p class="description">プログラミングの基礎！好きな言語で挑戦しよう</p>
                <div class="btn">問題を解く</div>
            </div>
        </div>
    </div>
</section>
<section class="news">
news
</section>
<section class="faq">
faq
</section>

@endsection
 
@include('include.footer')