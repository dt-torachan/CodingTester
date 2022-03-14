<div class="question_blade">
    <a href="/question/detail/{{$question->question_id}}" style="display: block;">
        <div class="question_blade_img">
            <img src="/photo/{{$question->photo}}" alt="">
        </div>
        <div class="question_blade_title">
            {{$question->title}}
        </div>
        <div class="question_blade_lead">
            {{$question->lead}}
        </div>
    </a>
</div>