@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create pic') }}</h1>
                    <a href="{{ route('admin.pics.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pics.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="code">{{ __('Code') }}</label>
                        <input type="text" class="form-control" id="code" placeholder="{{ __('Code') }}" name="code" value="{{ old('code') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_name">{{ __('Pic Name') }}</label>
                        <input type="text" class="form-control" id="pic_name" placeholder="{{ __('Nama Pic') }}" name="pic_name" value="{{ old('pic_name') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_phone">{{ __('Pic Phone') }}</label>
                        <input type="text" class="form-control" id="pic_phone" placeholder="{{ __('No Telp Pic') }}" name="pic_phone" value="{{ old('pic_phone') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_email">{{ __('Pic Email') }}</label>
                        <input type="text" class="form-control" id="pic_email" placeholder="{{ __('Email Pic') }}" name="pic_email" value="{{ old('pic_email') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="agency_id">{{ __('Agency Id') }}</label>
                        <input type="text" class="form-control" id="agency_id" placeholder="{{ __('Id Agency') }}" name="agency_id" value="{{ old('agency_id') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="agency_name">{{ __('Agency Name') }}</label>
                        <input type="text" class="form-control" id="agency_name" placeholder="{{ __('Nama Agency') }}" name="agency_name" value="{{ old('agency_name') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_image">{{ __('Pic Image') }}</label>
                        <input type="file" class="form-control" id="pic_image" placeholder="{{ __('Gambar Pic') }}" name="pic_image" value="{{ old('pic_image') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_roles">{{ __('Pic Roles') }}</label>
                        <input type="text" class="form-control" id="pic_roles" placeholder="{{ __('Role Pic') }}" name="pic_roles" value="{{ old('pic_roles') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" type="longtext" class="form-control" placeholder="{{ __('Deskripsi') }}" name="description" value="{{ old('description') }}" required /></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sequence">{{ __('Sequence') }}</label>
                        <input type="text" class="form-control" id="sequence" placeholder="{{ __('Sequence') }}" name="sequence" value="{{ old('sequence') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="is_active">{{ __('Is Active') }}</label>
                        <input type="text" class="form-control" id="is_active" placeholder="{{ __('') }}" name="is_active" value="{{ old('is_active') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="is_pic">{{ __('Is Pic') }}</label>
                        <input type="text" class="form-control" id="is_pic" placeholder="{{ __('') }}" name="is_pic" value="{{ old('is_pic') }}" required />
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush