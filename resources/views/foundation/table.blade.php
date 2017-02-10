<div class="container the-table">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Present Percentage</th>
                    <th>Late Percentage</th>
                    <th>Early Percentage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    
                        <tr>
                            <th>{{ $employee->id }}</a></th>
                            <th><a href="{{ route('single', ['employee'=> $employee->id]) }}">{{ $employee->name }}<a href="#"></th>
                            <th>{{ $employee->email }}</th>
                            <th>{{ round(($employee->days_present/54)*100, 1) }} %</th>
                            <th>{{ round(($employee->days_late/$employee->days_present)*100, 1) }} %</th>                                       <th>{{ round(($employee->days_early/$employee->days_present)*100, 1) }} %</th>
                        </tr>
                    
                @endforeach
            </tbody>
            
        </table>
        {!! $employees->render() !!}
        </div>