@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('edit partnership')}}</h1>
                    <a href="{{ route('admin.partnerships.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.partnerships.update', $partnership->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="partner_name">{{ __('Partner Name') }}</label>
                        <input type="text" class="form-control" id="partner_name" placeholder="{{ __('Nama Partner') }}" name="partner_name" value="{{ old('partner_name', $partnership->partner_name) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="partner_type">{{ __('Partner Type') }}</label>
                        <input type="text" class="form-control" id="partner_type" placeholder="{{ __('Tipe Partner') }}" name="partner_type" value="{{ old('partner_type', $partnership->partner_type) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="partner_address">{{ __('Partner Address') }}</label>
                        <input type="text" class="form-control" id="partner_address" placeholder="{{ __('Alamat Partner') }}" name="partner_address" value="{{ old('partner_address', $partnership->partner_address) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_name">{{ __('Pic Name') }}</label>
                        <input type="text" class="form-control" id="pic_name" placeholder="{{ __('Nama Pic') }}" name="pic_name" value="{{ old('pic_name', $partnership->pic_name) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_email">{{ __('Pic Email') }}</label>
                        <input type="text" class="form-control" id="pic_email" placeholder="{{ __('Email Pic') }}" name="pic_email" value="{{ old('pic_email', $partnership->pic_email) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="pic_phone">{{ __('Pic Phone') }}</label>
                        <input type="text" class="form-control" id="pic_phone" placeholder="{{ __('No Telp Pic') }}" name="pic_phone" value="{{ old('pic_phone', $partnership->pic_phone) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="partner_image">{{ __('Partner Image') }}</label>
                        <input type="file" class="form-control" id="partner_image" placeholder="{{ __('Gambar Partner') }}" name="partner_image" value="{{ old('partner_image') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" type="longtext" class="form-control" placeholder="{{ __('Deskripsi') }}" name="description" value="{{ old('description', $partnerhsip->description) }}" required /></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
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