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
                    $month = explode("-", $row->date);
                    
                    switch ($month[1]) {
                        case '01':
                            $employee->jan = $employee->jan + 1;
                            break;
                        case '02':
                            $employee->feb = $employee->feb + 1;
                            break;
                        case '03':
                            $employee->march = $employee->march + 1;
                            break;
                        case '04':
                            $employee->april = $employee->april + 1;
                            break;
                        case '05':
                            $employee->may = $employee->may + 1;
                            break;
                        case '06':
                            $employee->june = $employee->june + 1;
                            break;
                        case '07':
                            $employee->july = $employee->july + 1;
                            break;
                        case '08':
                            $employee->august = $employee->august + 1;
                            break;
                        case '09':
                            $employee->september = $employee->september + 1;
                            break;
                        case '10':
                            $employee->october = $employee->october + 1;
                            break;
                        case '11':
                            $employee->november = $employee->november + 1;
                            break;
                        case '12':
                            $employee->december = $employee->december + 1;
                            break;
                        default:
                             $employee->december = $employee->december + 1;
                            break;
                    }

                }

                $employee->date = $row->date;
                $employee->save();


            }

        });
    }

    private function timeInMonth()
    {

    }
}
