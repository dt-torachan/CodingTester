<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>
<body>
    @include("include.layout")
    <div>
        <div>
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

    @include("include.form.answer")
</body>
</html>