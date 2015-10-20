<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>apiClientPage</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("#get").click(function(){
                var path = "http://homestead.app:8000/api/v1/place/" + $("#place").val();
                $.post(path,{},function(data){
                    var a = JSON.parse(data);
                    var text = "";

                    a[0]["promotionList"].forEach(function(b){
                        text += b + "<br>";
                    });

                    $("#result").html(text);
                });
            });
        });
    </script>
</head>
<body>
    <h1>このページはshusseuo apiのクライアントページです。</h1>

    {!! Form::open(['action' => 'WelcomeController@results', 'method' => 'GET']) !!}
    {!! Form::radio('place', 'kansai') !!} 関西
    {!! Form::radio('place', 'kanto') !!} 関東
    {!! Form::radio('place', 'tohoku') !!} 東北
    {!! Form::radio('place', 'shikoku') !!} 四国
    {!! Form::submit('送信',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

    <input type="text" id="place">
    <button id="get">get</button>
    <div id="result">
        result
    </div>
    {{--<form action="apiController.php">--}}
        {{--地域を選んでください。<br>--}}
        {{--<input type="radio" name="place" value="kansai"> 関西--}}
        {{--<input type="radio" name="place" value="kanto"> 関東--}}
        {{--<input type="radio" name="place" value="tohoku"> 東北--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<input type="submit">--}}
    {{--</form>--}}
</body>
</html>
