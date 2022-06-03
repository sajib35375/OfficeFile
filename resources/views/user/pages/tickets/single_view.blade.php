@extends('layouts.app')
@section('main')


    <div class="wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $single_file->role->role_name }}</h2>
                    </div>
                    <div class="card-body">
                        <iframe src="https://view.officeapps.live.com/op/view.aspx?src={{ URL::to('') }}/admin/file/{{ $single_file->file }}" frameborder="0" style="width: 62%; min-height: 562px;"></iframe>
                        <p>{{ $single_file->short_text  }}</p>
                        <p>{{ $single_file->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>













@endsection
