@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('view event')}}</h1>
                    <a href="{{ route('admin.events.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.events.show', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="event_name">Event Name</label>
                        <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name  }}" readonly>
                      </div>
                        <div class="form-group">
                        <label for="event_start_date">Event Start Date</label>
                        <input type="date" class="form-control" id="event_start_date" name="event_start_date" value="{{  $event->event_start_date  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="event_end_date">Event End Date</label>
                        <input type="date" class="form-control" id="event_end_date" name="event_end_date" value="{{ $event->event_end_date  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="key_speaker">Key Speaker</label>
                        <br> 
                        <img src="{{Storage::url($event->key_speaker)}}" width="500" id="key_speaker" name="key_speaker" value="{{  $event->key_speaker  }}" readonly>
                      </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $event->description  }}" readonly>
                    </div>
                    
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