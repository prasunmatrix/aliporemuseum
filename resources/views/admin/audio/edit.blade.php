@extends('admin.layouts.after-login-layout')
@section('unique-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update AUDIO</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Update AUDIO</li>
        </ol>
        <div class="container-fluid px-4">

            <div class="card mt-4">
                <div class="card-body">
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

                    <form method="POST" action="{{ route('admin.update.audio', $cms->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>English Name</label>
                            <input type="text" name="name" value="{{ $cms->name }}" class="form-control" />
                            <span style="color:red;">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="mb-3">
                            @if ($cms->fileName)
                                <label><audio controls>
                                        <source src="{{ asset('uploads/audio/' . $cms->fileName) }}" type="audio/mpeg">
                                    </audio>{{ $cms->fileName }}</label><br />
                            @endif
                            <label>English AUDIO File</label>
                            <input type="file" name="audiofile" class="form-control" />
                            <input type="hidden" name="cms_old_audiofile" id="cms_old_audiofile"
                                value="{{ $cms->fileName }}">
                        </div>

                        <div class="mb-3">
                            <label>Bengali Name</label>
                            <input type="text" name="bname" value="{{ $cms->bengliName }}" class="form-control" />
                            <span style="color:red;">{{ $errors->first('bname') }}</span>
                        </div>

                        <div class="mb-3">
                            @if ($cms->bengaliFile)
                                <label><audio controls>
                                        <source src="{{ asset('uploads/bengaliAudio/' . $cms->bengaliFile) }}"
                                            type="audio/mpeg">
                                    </audio>{{ $cms->bengaliFile }}</label><br />
                            @endif
                            <label>Bengali AUDIO File</label>
                            <input type="file" name="bengalifile" class="form-control" />
                            <input type="hidden" name="cms_old_bengalifile" id="cms_old_bengalifile"
                                value="{{ $cms->bengaliFile }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                                <input type="submit" class="btn btn-primary" name="update_audio" value="Update AUDIO" />
                            </div>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </div>
@endsection
