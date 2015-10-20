<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>results</title>
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
    <h1>whassup, man?</h1>
    <button id="get">get</button>
    <div id="result">
        result
    </div>
</body>
</html>