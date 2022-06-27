<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')-ホームページ-</title>
</head>
<body>
<h1>@yield('title')へようこそ！</h1>

@___(6)____('header')

@___(7)____('content')
    <p>設置コース一覧</p>
@show
</body>
</html>
