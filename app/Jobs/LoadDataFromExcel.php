<?php

namespace App\Jobs;

use App\Employee;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoadDataFromExcel implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Excel::filter('chunk')->load(database_path('seeds/exports/attendance.csv'))->
        chunk(250, function($results) {
            foreach ($results as $row) {
                $name = $row->first_name ." ".$row->last_name;
                $employee = Employee::firstOrCreate(['name' => $name, 
                    'email' => $row->email,
                    'staff_id' => $row->staff_id
                ]);
                
                
                if($row->date != $employee->date){
                    $employee->days_present = $employee->days_present + 1;
                    if(substr($row->time, 0,2) < 8){
                        $employee->days_early = $employee->days_early + 1;
                    }else{
                        $employee->days_late = $employee->days_late + 1;
                    }

                }

                $employee->date = $row->date;
                $employee->save();


            }

        });
    }
}
