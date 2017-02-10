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
        <div class="container">
            <div class="col-md-3">
                <h3>Name</h3>
                <h5>{{ $employee->name }}</h5>
            </div>
            <div class="col-md-3">
                <h3>Percentage Present</h3>
                <div class="vertical-align">

                    {{round(($employee->days_present/54)*100, 1)}} %

                </div>
            </div>
            <div class="col-md-3">
                <h3>Percentage Early</h3>
                <div class="vertical-align">
                
                    {{ round(($employee->days_early/$employee->days_present)*100, 1) }} %

                </div>
            </div>
            <div class="col-md-3">
                <h3>Percentage Late</h3>
                <div class="vertical-align">
                
                    {{ round(($employee->days_late/$employee->days_present)*100, 1) }} %

                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
    </body>
</html>
