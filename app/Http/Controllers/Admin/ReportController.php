<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Client;
use App\Model\Admin\Employee;
use App\Model\Admin\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function client()
    {
        $clients = Client::all();
        
        return view('admin.report.client')
                                        ->withClients($clients);
                                       
    }


     public function project()
    {
        $projects = Project::all();
         return view('admin.report.project')->withProjects($projects);
        
    }

     public function employee()
    {
        $employee = Employee::all();
         return view('admin.report.employee')->withEmployees($employee);
    }

     public function betweenDate()
    {
        $projects = Project::all();
         return view('admin.report.date')->withProjects($projects);
        
    }

      public function show(Request $request)
    {
            $request->validate([

        'start'        => 'required',
        'end'          => 'required',
    ]);
    






$input_date_format='Y-m-d';
 $fromDate = Carbon::createFromFormat($input_date_format,$request->input('start'))->format('Y-m-d 00:00:00');

$toDate = Carbon::createFromFormat($input_date_format,$request->input('end'))->format('Y-m-d 23:59:59');


$projects = DB::table('projects')->whereBetween('created_at',[$fromDate, $toDate ])->get();

      
         return view('admin.report.show')->withProjects($projects);
        
    }
   
}
