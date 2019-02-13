@extends('admin.app')
@section('head-section')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
<div class="container-fluid">
    <div class="block-header">
        <h2>
        JQUERY DATATABLES
        <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
        </h2>
    </div>
    <!-- Basic Examples -->
    
    <!-- #END# Basic Examples -->
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                    EXPORTABLE TABLE
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$service->name}}</td>
                                    
                                    
                                    <td><a href="{{ route('admin.service.edit',$service->id) }}"><span class="glyphicon glyphicon-edit"></a></td>
                                    <td>
                                        <form id="delete-form-{{ $service->id }}" method="post" action="{{ route('admin.service.destroy',$service->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are you sure, You Want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $service->id }}').submit();
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