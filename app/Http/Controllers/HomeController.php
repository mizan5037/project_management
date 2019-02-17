<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Model\Admin\Client;
use App\Model\Admin\Employee;
use App\Model\Admin\Project;
use App\Model\Admin\Service;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        $employee = Employee::all();
        $category = Category::all();
        $service = Service::all();
        $client = Client::all();
        return view('admin.home')
             ->withEmployee($employee)
             ->withClient($client)
             ->withService($employee)
             ->withProject($project);
    }
}
