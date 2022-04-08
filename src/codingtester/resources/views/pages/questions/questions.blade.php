
    {{-- @include("include.layout") --}}
    <div class="questions_blade">
        @foreach ($questions as $question)
            {{-- @include("question",['question' => $question]) --}}
        @endforeach
    </div>
