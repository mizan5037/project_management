@extends('admin.app')
@section('title','All Project')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">
    <style type="text/css">
       
    </style>
@endpush
@section('main-content')
<div class="container-fluid">
            
            <!-- Basic Examples -->
         
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PROJECT LIST
                                <a class="pull-right btn btn-success"  href="{{ route('admin.project.create') }}">Add Project</a>
                            </h2>
                      
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Project</th>
                                            <th>Description</th>
                                            <th>Client</th>
                                            <th>Price</th>
                                            <th>Due</th>
                                            <th>Advance</th>                                          
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Details</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>  
                                        	 
                                             <th>#ID</th>
                                            <th>Project</th>
                                             <th>Description</th>
                                            <th>Client</th>
                                         
                                            <th>Price</th>
                                            <th>Due</th>
                                            <th>Advance</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Details</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($projects as $project)
                                        <tr>
                                           <td>{{ $loop->index + 1 }}</td>
                                            <td>{{$project->name}}</td>
                                            <td>{{strip_tags(str_limit($project->description,50) )}}</td>
                                            <td>{{$project->client_name}}</td>
                                            
                                            <td>{{$project->price}}</td>
                                            <td>{{$project->due}}</td>
                                            <td>{{$project->advance}}</td>
                                            <td>{{$project->start_date}}</td>
                                            <td>{{$project->end_date}}</td>
                                            <td><a href="{{ route('admin.project.show',$project->id) }}"><button class="btn btn-success">Details</button></a><td>
                                           
                                            
                                            
                                             <td><a href="{{ route('admin.project.edit',$project->id) }}"><span class="glyphicon glyphicon-edit"></a></td>
                                    <td>
                                        <form id="delete-form-{{ $project->id }}" method="post" action="{{ route('admin.project.destroy',$project->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are you sure, You Want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $project->id }}').submit();
                                            }
                                            else{
                                            event.preventDefault();
                                            }" ><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                       
                            
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
	@endsection
	@push('js')
	<script src="{{ asset('admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ asset('admin/js/pages/tables/jquery-datatable.js') }}"></script>
	@endpush