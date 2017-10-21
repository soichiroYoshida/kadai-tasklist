<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <tltle>今日のタスク管理アプリ</tltle>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- bootstrapCSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- jquery -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- bootstrap jquery -->
    </head>
    <body>
        @include('commons.error_messages')
        @yield('content')
    </body>
</html>