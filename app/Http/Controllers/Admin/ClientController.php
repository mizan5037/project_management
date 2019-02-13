<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Client;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
       
        return view('admin.client.show')->withClients($client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'company' => 'required',

       ]);

       $client = new Client;

       $client->name = $request->name;
       $client->phone = $request->phone;
       $client->email = $request->email;
       $client->address = $request->address;
       $client->company_name = $request->company;

       $client->save();

       return redirect(route('admin.client.index'));
    }

 
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
        $client = Client::where('id',$id)->first();
        return view('admin.client.edit')->withClient($client);
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'company' => 'required',

       ]);

       $client = Client::where('id',$id)->first();

       $client->name = $request->name;
       $client->phone = $request->phone;
       $client->email = $request->email;
       $client->address = $request->address;
       $client->company_name = $request->company;

       $client->save();
       Toastr::success('Updated Successfully', 'success');
       return redirect(route('admin.client.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::where('id',$id)->delete();
        Toastr::success('Updated Successfully', 'success');
        return redirect()->back();
    }
}
