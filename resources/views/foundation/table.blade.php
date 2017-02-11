<div class="container the-table">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Present Percentage</th>
                    <th>Late Percentage</th>
                    <th>Early Percentage</th>
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
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    
                        <tr>
                            <th>{{ $employee->id }}</a></th>
                            <th><a href="{{ route('single', ['employee'=> $employee->id]) }}">{{ $employee->name }}<a href="#"></th>
                            <th>{{ round(($employee->days_present/54)*100, 1) }} %</th>
                            <th>{{ round(($employee->days_late/$employee->days_present)*100, 1) }} %</th>                                       <th>{{ round(($employee->days_early/$employee->days_present)*100, 1) }} %</th>
                            <th>{{ round(($employee->jan/31)*100, 1) }} %</th>
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
                        </tr>
                    
                @endforeach
            </tbody>
            
        </table>
        {!! $employees->render() !!}
        </div>