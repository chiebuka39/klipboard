<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}">
        <title>Laravel</title>
    <body>
        @include('foundation.header')
        @include('foundation.hero')
        @include('foundation.table')
        <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
    </body>
</html>
