<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Client;
use App\Model\Admin\Employee;
use App\Model\Admin\Project;
use App\Model\Admin\Service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();

        return view('admin.project.show')->withProjects($project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        $service = Service::all();
        $employee = Employee::all();
        $category = Category::all();
        return view('admin.project.create')
                   ->withClients($client)
                   ->withServices($service)
                   ->withEmployees($employee)
                   ->withCategories($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'name' => 'required',
            'start'=>'required',
            'due'=>'required',
            'end'=>'required',
            'advance'=>'required',
            'price'=>'required',
            'employee'=>'required',
            'service'=>'required',
            
            'client'=>'required',
            'body'=>'required',
        ]);

        $project = new Project();

        $project->name = Category::where('id',$request->name)->value('name');
        $project->client = Client::where('id',$request->client)->value('name');
        $project->service = Service::where('id',$request->service)->value('name');
        $project->employee = Employee::where('id',$request->employee)->value('name');
        $project->description = $request->body;
        $project->price = $request->price;
        $project->advance = $request->advance;
        $project->due = $request->due;
        $project->start_date = $request->start;
        $project->end_date = $request->end;
    

        $project->save();

        

         // $project->clients()->attach($request->employees);
         // $project->employees()->attach($request->services);
         // $project->services()->attach($request->clients);
         // $project->categories()->attach($request->categories);

        Toastr::success('Project Successfully Saved :)','Success');

        return redirect(route('admin.project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
