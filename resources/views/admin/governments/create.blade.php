@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create government') }}</h1>
                    <a href="{{ route('admin.governments.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.governments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="code">{{ __('Code') }}</label>
                        <input type="text" class="form-control" id="code" placeholder="{{ __('Code') }}" name="code" value="{{ old('code') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="agency_name">{{ __('Agency Name') }}</label>
                        <input type="text" class="form-control" id="agency_name" placeholder="{{ __('Agency Name') }}" name="agency_name" value="{{ old('agency_name') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="agency_image">{{ __('Agency Image') }}</label>
                        <input type="file" class="form-control" id="agency_image" placeholder="{{ __('Agency Image') }}" name="agency_image" value="{{ old('agency_image') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="agency_address">{{ __('Agency Address') }}</label>
                        <input type="text" class="form-control" id="agency_address" placeholder="{{ __('Agency Address') }}" name="agency_address" value="{{ old('agency_address') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="agency_phone">{{ __('Agency Phone') }}</label>
                        <input type="text" class="form-control" id="agency_phone" placeholder="{{ __('Agency Phone') }}" name="agency_phone" value="{{ old('agency_phone') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" type="longtext" class="form-control" placeholder="{{ __('Deskripsi') }}" name="description" value="{{ old('description') }}" required /></textarea>
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