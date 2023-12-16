@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create schedule') }}</h1>
                    <a href="{{ route('admin.schedules.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.schedules.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="event_id">{{ __('Event Id') }}</label>
                        <input type="text" class="form-control" id="event_id" placeholder="{{ __('Event Id') }}" name="event_id" value="{{ old('event_id') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="event_name">{{ __('Event Name') }}</label>
                        <input type="text" class="form-control" id="event_name" placeholder="{{ __('Nama Paket') }}" name="event_name" value="{{ old('event_name') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="event_start_date">{{ __('Event Start Date') }}</label>
                        <input type="date" class="form-control" id="event_start_date" placeholder="{{ __('Tanggal Mulai') }}" name="event_start_date" value="{{ old('event_start_date') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="event_end_date">{{ __('Event End Date') }}</label>
                        <input type="date" class="form-control" id="event_end_date" placeholder="{{ __('Tanggal Selesai') }}" name="event_end_date" value="{{ old('event_end_date') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" type="longtext" class="form-control" placeholder="{{ __('Deskripsi') }}" name="description" value="{{ old('description') }}" required /></textarea>
                    </div>
                    <div class="form-group">
                        <label for="key_speaker">{{ __('Key Speaker') }}</label>
                        <input type="text" class="form-control" id="key_speaker" placeholder="{{ __('Pembicara') }}" name="key_speaker" value="{{ old('key_speaker') }}" required />
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