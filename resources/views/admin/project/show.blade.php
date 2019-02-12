@extends('admin.app')
@section('head-section')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">
@endsection
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
                                PROJECT DETAIL
                            </h2>
                       
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Service</th>
                                            <th>Employee</th>
                                            <th>Price</th>
                                            <th>Due</th>
                                            <th>Advance</th>                                          
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>  
                                        	 
                                             <th>#ID</th>
                                            <th>Project</th>
                                            <th>Clint</th>
                                            <th>Service</th>
                                            <th>Employee</th>
                                            <th>Price</th>
                                            <th>Due</th>
                                            <th>Advance</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($projects as $project)
                                        <tr>
                                           <td>{{ $loop->index + 1 }}</td>
                                            <td>{{$project->name}}</td>
                                            <td>{{$project->client}}</td>
                                            <td>{{$project->service}}</td>
                                            <td>{{$project->employee}}</td>
                                            <td>{{$project->price}}</td>
                                            <td>{{$project->due}}</td>
                                            <td>{{$project->advance}}</td>
                                            <td>{{$project->start_date}}</td>
                                            <td>{{$project->end_date}}</td>
                                           
                                            
                                            
                                            <td><a href=""><span class="glyphicon glyphicon-trash"></a></td>
                                            <td><a href=""><span class="glyphicon glyphicon-trash"></a></td>
                                       
                            
                                            
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