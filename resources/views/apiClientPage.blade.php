<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html" ng-app="ngrepeatSelect">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>apiClientPage</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script src="js/app.js"></script>
    {{--パース--}}
    <script>
        $(function(){
            $("button#search").click(function(){
                var path = "http://homestead.app:8000/api/v1/place/" + $("[name = 'place']").val();
                console.log($("#place"));
                $.post(path,{},function(data){
                    var a = JSON.parse(data);
                    var text = "";

                    a[0]["promotionList"].forEach(function(b){
                        text += b + "<br>";

                    });
                    $("div#result").html(text);
                    $("div#result")
                            .css("color", "white")
                            .css("text-shadow", "1px 1px black");

                });
            });
        });
    </script>
    {{--youtube api--}}
    <script src="/js/swfobject.js"></script>
    <script src="/js/youtube_video.js"></script>
    <script>
        $(function(){
            $('#player').customvideo({
                youtubeId : 'il9nqWw9W3Y',
                width : 1280,
                height : 720,
                fullsize : true
            });
        });
    </script>

    {{--<script>--}}
        {{--$(function() {--}}
            {{--var prefs = [--}}
                {{--['北海道', 43.03, 141.21],--}}
                {{--['青森県', 40.49, 140.44],--}}
                {{--['岩手県', 39.42, 141.09],--}}
                {{--['宮城県', 38.16, 140.52],--}}
                {{--['秋田県', 39.43, 140.06],--}}
                {{--['山形県', 38.15, 140.20],--}}
                {{--['福島県', 37.45, 140.28],--}}
                {{--['茨城県', 36.22, 140.28],--}}
                {{--['栃木県', 36.33, 139.53],--}}
                {{--['群馬県', 36.23, 139.03],--}}
                {{--['埼玉県', 35.51, 139.38],--}}
                {{--['千葉県', 35.36, 140.06],--}}
                {{--['東京都', 35.41, 139.45],--}}
                {{--['神奈川県', 35.26, 139.38],--}}
                {{--['新潟県', 37.55, 139.02],--}}
                {{--['富山県', 36.41, 137.13],--}}
                {{--['石川県', 36.33, 136.39],--}}
                {{--['福井県', 36.03, 136.13],--}}
                {{--['山梨県', 35.39, 138.34],--}}
                {{--['長野県', 36.39, 138.11],--}}
                {{--['岐阜県', 35.25, 136.45],--}}
                {{--['静岡県', 34.58, 138.23],--}}
                {{--['愛知県', 35.11, 136.54],--}}
                {{--['三重県', 34.43, 136.30],--}}
                {{--['滋賀県', 35.00, 135.52],--}}
                {{--['京都府', 35.00, 135.46],--}}
                {{--['大阪府', 34.41, 135.29],--}}
                {{--['兵庫県', 34.41, 135.11],--}}
                {{--['奈良県', 34.41, 135.48],--}}
                {{--['和歌山県', 34.14, 135.10],--}}
                {{--['鳥取県', 35.29, 134.13],--}}
                {{--['島根県', 35.27, 133.04],--}}
                {{--['岡山県', 34.39, 133.54],--}}
                {{--['広島県', 34.23, 132.27],--}}
                {{--['山口県', 34.11, 131.27],--}}
                {{--['徳島県', 34.03, 134.32],--}}
                {{--['香川県', 34.20, 134.02],--}}
                {{--['愛媛県', 33.50, 132.44],--}}
                {{--['高知県', 33.33, 133.31],--}}
                {{--['福岡県', 33.35, 130.23],--}}
                {{--['佐賀県', 33.16, 130.16],--}}
                {{--['長崎県', 32.45, 129.52],--}}
                {{--['熊本県', 32.48, 130.42],--}}
                {{--['大分県', 33.14, 131.37],--}}
                {{--['宮崎県', 31.56, 131.25],--}}
                {{--['鹿児島県', 31.36, 130.33],--}}
                {{--['沖縄県', 26.13, 127.41]--}}
            {{--];--}}

            {{--navigator.geolocation.getCurrentPosition(function(pos) {--}}
                {{--var lat = pos.coords.latitude;--}}
                {{--var long = pos.coords.longitude;--}}
                {{--$.each(prefs, function(i, p) {--}}
                    {{--p[3] = (lat - p[1]) * (lat - p[1]) + (long - p[2]) * (long - p[2]);--}}
                {{--});--}}
                {{--prefs.sort(function(p1, p2) {--}}
                    {{--return p1[3] - p2[3];--}}
                {{--});--}}
                {{--$.each(prefs, function(i, p) {--}}
                    {{--$('<option></option>').html(p[0]).appendTo('#pref');--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/ytvideo.css" type="text/css" media="all">
    <style>
        .btn-xxl {
            padding: 150px 195px;
            font-size: 50px;
            border-radius: 40px;
        }

        #background {
            position: fixed;
            right: 0;
            bottom: 0;
            width: auto;
            min-width: 100%;
            height: auto;
            min-height: 100%;
            z-index: -1;
        }

        #background-front {
            position: fixed;
            right: 0;
            bottom: 0;
            width: auto;
            min-width: 100%;
            height: auto;
            min-height: 100%;
            z-index: -1;
            background-color: black;
            opacity: 0.3;

        }

        h1 {
            color: white;
            margin-top: 140px;
            font-size: 8em;
            text-shadow: 1px 1px black;
        }
        @media screen and (max-width: 600px) {
            h1 {
                color: white;
                margin-top: 140px;
                font-size: 4em;
                text-shadow: 1px 1px black;
            }
        }
        @media screen and (min-width: 601px) and (max-width: 991px) {
            small {
                margin-top: 200px;
            }
        }
    </style>
</head>
<body>
    {{-- youtube api --}}
    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // プレーヤーを埋め込む場所指定
        var ytArea = 'background';
        // 埋め込むYouTube ID指定
        var ytID = 'c0gLVkKU5lE';

        // プレーヤーの埋め込み
        function onYouTubeIframeAPIReady() {
            ytPlayer = new YT.Player(ytArea, {
                videoId: ytID,
                playerVars: {
                    rel: 0,
                    controls: 0,
                    showinfo: 0,
                    wmode: 'transparent',
                    vq: 'hd1080',
                    autohide: 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // YouTubeの準備完了後
        function onPlayerReady(e) {
            ytPlayer.playVideo();
            ytPlayer.mute();
        }

        // 再生完了後
        function onPlayerStateChange(e) {
            var ytStatus = e.target.getPlayerState();
            if (ytStatus == YT.PlayerState.ENDED) {
                ytPlayer.playVideo();
                ytPlayer.mute();
            }
        }
    </script>
    <div class="container">
        <h1>Shusseuo API</h1>
        <div class="input-group" style="width: 50%;">
            <select name="place" class="form-control">
                <option value="kansai">関西</option>
                <option value="kanto">関東</option>
                <option value="shikoku">四国</option>
                <option value="tohoku">東北</option>
                <option value="hokuriku">北陸</option>
                <option value="kishu">紀州</option>
                <option value="sanin">山陰</option>
                <option value="toyama">富山</option>
                <option value="shimokita">下北</option>
                <option value="tango">丹後</option>
                <option value="shikoku">四国</option>
                <option value="kyushu">九州</option>
            </select>
            <span class="input-group-btn">
                <button id="search" class="btn btn-default">
                    <i class='glyphicon glyphicon-search'></i>
                </button>
            </span>
        </div>
        <span id="helpBlock" class="help-block" style="color: white; text-shadow: 1px 1px black;">地域を選択してください。</span>
        <div id="result">
        </div>
        <div ng-controller="ExampleController">
          <form name="myForm">
            <label for="repeatSelect"> Repeat select: </label>
            <select name="repeatSelect" id="repeatSelect" ng-model="data.repeatSelect">
              <option ng-repeat="option in data.availableOptions" value="@{{option.value}}">@{{option.name}}</option>
            </select>
          </form>
          <hr>
          <tt>repeatSelect = @{{data.repeatSelect}}</tt><br/>
        </div>
        <small style="float: right; color: white; margin-top: 300px;">ゴマサバ・ヒラサバを捌く　2 by 南紀和歌山釣太郎</small>
    </div>
    <div id="background"></div>
    <div id="background-front"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
