<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>apiClientPage</title>
</head>
<body>
    <h1>このページはshusseuo apiのクライアントページです。</h1>
    {{--<div class="search">--}}
        {{--{!! Form::open(['action' => 'WelcomeController@hello']) !!}--}}
        {{--{!! Form::input('検索する', 'q', null) !!}--}}
        {{--{!! Form::close() !!}--}}

    {{--</div>--}}
    <form action="api.php" method="post">
        地域を選んでください。<br>
        <input type="radio" name="place" value="kansai"> 関西
        <input type="radio" name="place" value="kanto"> 関東
        <input type="radio" name="place" value="tohoku"> 東北
        <br>
        <br>
        <input type="submit">
    </form>
</body>
</html>
