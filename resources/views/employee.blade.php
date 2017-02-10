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
        <div class="container">
        <h3>Days present per month</h3>
             <table class="table table-hover">
            <thead>
                <tr>
                    <th>   </th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>august</th>
                    <th>sept</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                    <th>Total</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Percentage present</th>
                    <th>{{ round(($employee->jan/31)*100, 1) }} % present</th>
                    <th>{{ round(($employee->feb/29)*100, 1) }} % </th>
                    <th>{{ round(($employee->march/31)*100, 1) }} % </th>
                    <th>{{ round(($employee->april/30)*100, 1) }} % </th>
                    <th>{{ round(($employee->may/31)*100, 1) }} % </th>
                    <th>{{ round(($employee->june/30)*100, 1) }} % </th>
                    <th>{{ round(($employee->july/31)*100, 1) }} % </th>
                    <th>{{ round(($employee->august/31)*100, 1) }} % </th>
                    <th>{{ round(($employee->september/30)*100, 1) }} % </th>
                    <th>{{ round(($employee->october/31)*100, 1) }} % </th>
                    <th>{{ round(($employee->november/30)*100, 1) }} % </th>
                    <th>{{ round(($employee->december/31)*100, 1) }} % </th>
                    <th>{{round(($employee->days_present/54)*100, 1)}} %</th>
                </tr>

                <tr>
                    <th>Days Present</th>
                    <th>{{ $employee->jan }}</th>
                    <th>{{ $employee->feb }}</th>
                    <th>{{ $employee->march }}</th>
                    <th>{{ $employee->april }}</th>
                    <th>{{ $employee->may }}</th>
                    <th>{{ $employee->june }}</th>
                    <th>{{ $employee->july }}</th>
                    <th>{{ $employee->august }}</th>
                    <th>{{ $employee->september }}</th>
                    <th>{{ $employee->october }}</th>
                    <th>{{ $employee->november}}</th>
                    <th>{{ $employee->december }}</th>
                    <th>{{ $employee->days_present }}</th>
                </tr>
            </tbody>
            
        </table>
        </div>
        <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>
    </body>
</html>
