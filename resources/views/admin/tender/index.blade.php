@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tender</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tender Management</li>
    </ol>

    <div class="card mt-4">
        <div class="card-header">
        Tender <a href="{{ url('admin/add-tender') }}" class="btn btn-primary btn-sm float-end">
                Add Tender </a>
        </div>
        <div class="card-body">           
            @if(Session::has('success'))
              <div class="alert alert-success alert-dismissable __web-inspector-hide-shortcut__">                      
                  <span style="color:green;">{{ Session::get('success') }}</span>
              </div>
            @endif
            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissable">
                  <span style="color:red;">{{ Session::get('error') }}</span>
              </div>
            @endif
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tender No.</th>
                        <th>Tender Subject</th>
                        <th>Tender Type</th>
                        <th>Tender Publication Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                    @if( count($list) > 0 )                    
                    @foreach( $list as $val )
                    <tr>
                        <td> {{ $i }} </td>
                        <td> {{ $val->tender_no }} </td>                         
                        <td> {{ $val->tender_subject }} </td>
                        <td> {{ $val->tender_type }} </td> 
                        <td> {{ $val->tender_date }} </td> 
                        <td> {{ $val->status ==1 ? 'Show':'Hidden'}} </td>
                        <td> <a href="{{ url('admin/edit-tender/'. $val->id) }}" class="btn btn-success"> Edit </a> | <a href="{{ url('admin/delete-tender/'. $val->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');"> Delete </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection