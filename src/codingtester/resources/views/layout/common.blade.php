
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">


    <title>yield('title')|CodintTester</title>

    <link href="{{ asset('css/questions.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/answer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet" type="text/css">

    @yield('pageCss')

    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
</head>
<body>
    @yield('header')
 
    <div class="main">
        @yield('content')
    </div>
    
    @yield('footer')
</body>
</html>