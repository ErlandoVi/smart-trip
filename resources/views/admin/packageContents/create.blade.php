@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create package content') }}</h1>
                    <a href="{{ route('admin.packageContents.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.packageContents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="package_id">{{ __('Package Id') }}</label>
                        <input type="text" class="form-control" id="package_id" placeholder="{{ __('Id Paket') }}" name="package_id" value="{{ old('package_id') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="price">{{ __('Price') }}</label>
                        <input type="text" class="form-control" id="price" placeholder="{{ __('Harga') }}" name="price" value="{{ old('price') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="package_image">{{ __('Image') }}</label>
                        <input type="file" class="form-control" id="package_image" placeholder="{{ __('Gambar Paket') }}" name="package_image" value="{{ old('package_image') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" type="longtext" class="form-control" placeholder="{{ __('Deskripsi') }}" name="description" value="{{ old('description') }}" required /></textarea>
                    </div>
                    <div class="form-group">
                        <label for="package_type">{{ __('Package Type') }}</label>
                        <input type="text" class="form-control" id="package_type" placeholder="{{ __('Tipe Paket') }}" name="package_type" value="{{ old('package_type') }}" required />
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