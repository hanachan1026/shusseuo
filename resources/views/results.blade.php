<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>results</title>
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
        @yield('content')
    <?php
        $value = $_GET['place'];
        $url = "http://homestead.app:80/api/v1/place/".$value;
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'http' => array('ignore_errors' => true),
            )
        ));
        $response = file_get_contents(
                        $url,
                        false,
                        $context
                    );
        echo $response;
    ?>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>