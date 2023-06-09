@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Knowledge Corner</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Knowledge Corner Management</li>
    </ol>

    <div class="card mt-4">
        <div class="card-header">
            Knowledge Corner <a href="{{ url('admin/add-knowledge-corner') }}" class="btn btn-primary btn-sm float-end">
                Add Knowledge Corner </a>
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
                        <th>Name</th>
                        <th>Download</th>
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
                        <td> {{ $val->name }} </td>  
                        <td> <a href=" {{ asset('uploads/knowledgecorner/'.$val->file) }}"  download>Download </td>                        
                        <td> {{ $val->status ==1 ? 'Show':'Hidden'}} </td>
                        <td> <a href="{{ url('admin/edit-knowledge-corner/'. $val->id) }}" class="btn btn-success"> Edit </a> | <a href="{{ url('admin/delete-knowledge-corner/'. $val->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');"> Delete </a>
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