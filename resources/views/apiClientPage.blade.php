<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>apiClientPage</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("#search").click(function(){
                var path = "http://homestead.app:8000/api/v1/place/" + $("[name = 'place']").val();
                console.log($("#place"));
                $.post(path,{},function(data){
                    var a = JSON.parse(data);
                    var text = "";

                    a[0]["promotionList"].forEach(function(b){
                        text += b + "<br>";

                    });
                    $("#result").html(text);
                    $("#result")
                            .css("color", "white")
                            .css("text-shadow", "1px 1px black");

                });
            });
        });
    </script>
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

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/ytvideo.css" type="text/css" media="all">
    <style>
        .btn-xxl {
            padding: 150px 195px;
            font-size: 50px;
            border-radius: 40px;
        }

        #background,
        #background-front {
            position: fixed;
            right: 0;
            bottom: 0;
            width: auto;
            min-width: 100%;
            height: auto;
            min-height: 100%;
            z-index: -1;
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
    </style>
</head>
<body>
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
        <small style="float: right; color: white; margin-top: 300px;">ゴマサバ・ヒラサバを捌く　2 by 南紀和歌山釣太郎</small>
    </div>
    <div id="background"></div>
    <div id="background-front"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
