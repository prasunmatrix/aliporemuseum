@extends('admin.layouts.after-login-layout')
@section('unique-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">AUDIO</h1>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">AUDIO Management</li>
        </ol>

        <div class="card mt-4">
            <div class="card-header">
                AUDIO Listing <a href="{{ url('admin/add-audio') }}" class="btn btn-primary btn-sm float-end">
                    Add Audio </a>
            </div>
            <div class="card-body">
                <!-- @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif -->
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable __web-inspector-hide-shortcut__">
                        <span style="color:green;">{{ Session::get('success') }}</span>
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <span style="color:red;">{{ Session::get('error') }}</span>
                    </div>
                @endif
                <table class="table table-bordered" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>English Audio File</th>
                            <th>Bengali Name</th>
                            <th>Bengali Audio File</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if (count($cmsList) > 0)
                            @foreach ($cmsList as $key => $val)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    @if ($val->name)
                                        <td> {{ $val->name }} </td>
                                    @else
                                        <td>N/A</td>
                                    @endif
                                    @if ($val->fileName)
                                        <td> <audio controls>
                                                <source src="{{ asset('uploads/audio/' . $val->fileName) }}"
                                                    type="audio/mpeg">
                                            </audio>{{ $val->fileName }} </td>
                                    @else
                                        <td>N/A</td>
                                    @endif
                                    @if ($val->bengliName)
                                        <td> {{ $val->bengliName }} </td>
                                    @else
                                        <td>N/A</td>
                                    @endif
                                    @if ($val->bengaliFile)
                                        <td> <audio controls>
                                                <source src="{{ asset('uploads/bengaliAudio/' . $val->bengaliFile) }}"
                                                    type="audio/mpeg">
                                            </audio>{{ $val->bengaliFile }} </td>
                                    @else
                                        <td>N/A</td>
                                    @endif
                                    <td> <a href="{{ url('admin/edit-audio/' . $val->id) }}" class="btn btn-success"> Edit
                                        </a> | <a href="{{ url('admin/delete-audio/' . $val->id) }}" class="btn btn-danger"
                                            onclick="return confirm('Are you want to delete this cms?');"> Delete </a>
                                    </td>

                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
