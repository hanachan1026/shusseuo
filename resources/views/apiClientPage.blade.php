<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>apiClientPage</title>
</head>
<body>
    <h1>このページはshusseuo apiのクライアントページです。</h1>
    <div class="search">
        {!! Form::open(['action' => 'WelcomeController@getSearch']) !!}
        {!! Form::input('検索する', 'q', null) !!}
        {!! Form::close() !!}

    </div>
</body>
</html>
