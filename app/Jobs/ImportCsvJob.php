<?php

namespace App\Jobs;

use App\Models\Employee;
use App\Models\Manager;
use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportCsvJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
    public function handle(Request $request, Manager $manager)
    {
        //
        if ($request->hasFile('file')) {
            $file = $request->file('file');
//            dd($file);
            $csvData = file_get_contents($file);
            $rows = array_map("str_getcsv", explode("\n", $csvData));
            $header = array_shift($rows);
            foreach ($rows as $row) {
                $data = array_combine($header, $row);
                $employee = new Employee();
                $employee->name = $data['name'];
                $employee->type = $data['type'] === 'backoffice' ?: 'cashier';
                $employee->gender = $data['gender'];
                $employee->manager()->associate($manager);
                $employee->save();
            }
        }

    }
}
