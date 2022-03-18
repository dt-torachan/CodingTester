<div class="question">
    <a href="/question/detail/{{$question->question_id}}" style="display: block;">
        <div class="question_img">
            <img src="/photo/{{$question->photo}}" alt="">
        </div>
        <div class="question_title">
            {{$question->title}}
        </div>
        <div class="question_lead">
            {{$question->lead}}
        </div>
    </a>
</div>