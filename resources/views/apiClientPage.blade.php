<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>apiClientPage</title>
    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
    {{--<script>--}}
        {{--$(function(){--}}
            {{--$("#get").click(function(){--}}
                {{--var path = "http://homestead.app:8000/api/v1/place/" + $("#place").val();--}}
                {{--$.post(path,{},function(data){--}}
                    {{--var a = JSON.parse(data);--}}
                    {{--var text = "";--}}

                    {{--a[0]["promotionList"].forEach(function(b){--}}
                        {{--text += b + "<br>";--}}
                    {{--});--}}

                    {{--$("#result").html(text);--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1>このページはshusseuo APIのクライアントページです。</h1>

        <p>地域を選択してください。</p>

        {!! Form::open(['action' => 'WelcomeController@results', 'method' => 'GET']) !!}
        {!! Form::select('place', [
            'kansai' => '関西',
            'kanto' => '関東',
            'tohoku' => '東北',
            'shikoku' => '四国',
            'hokuriku' => '北陸',
            'kishu' => '紀州',
            'sanin' => '山陰',
            'toyama' => '富山',
            'shimokita' => '下北',
            'tango' => '丹後',
        ]) !!}
        {!! Form::submit('送信',['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
