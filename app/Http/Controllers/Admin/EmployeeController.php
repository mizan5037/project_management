<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Image;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('admin.employee.show')->withEmployees($employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.employee.create');
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
            'name' =>'required',
            'phone' =>'required|unique:employees',
            'address' =>'required',
            'email' =>'required|unique:employees',
            'designation' =>'required',
            
        ]);

        $employee = new Employee();

        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->designation = $request->designation;
        if ($request->hasFile('image')) {
                  $image = $request->file('image');
                  $filename = time() . '.' . $image->getClientOriginalExtension();
                  $location = public_path('images/' . $filename);
                  Image::make($image)->resize(800, 400)->save($location);

                  $employee->image = $filename;
                }
        $employee->save();

        return redirect(route('admin.employee.index'));
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
         $employee = Employee::where('id',$id)->first();
        return view('admin.employee.edit')->withEmployee($employee);
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
        $this->validate($request,[
            'name' =>'required',
            'phone' =>'required',
            'address' =>'required',
            'email' =>'required',
            'designation' =>'required',

        ]);

         $employee = Employee::where('id',$id)->first();

        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->designation = $request->designation;
         if ($request->hasFile('image')) {
                  $image = $request->file('image');
                  $filename = time() . '.' . $image->getClientOriginalExtension();
                  $location = public_path('images/' . $filename);
                  Image::make($image)->resize(800, 400)->save($location);

                  $employee->image = $filename;
                }
        $employee->save();
        Toastr::success('Updated Successfully', 'success');

        return redirect(route('admin.employee.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        Toastr::success('Updated Successfully', 'success');
        return redirect()->back();
    }
}
