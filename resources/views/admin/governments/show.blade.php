@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('view government')}}</h1>
                    <a href="{{ route('admin.governments.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.governments.show', $government->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{ $government->code  }}" readonly>
                      </div>
                    <div class="form-group">
                        <label for="agency_name">Agency Name</label>
                        <input type="text" class="form-control" id="agency_name" name="agency_name" value="{{ $government->agency_name  }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="agency_image">Agency Image</label>
                      <br> 
                      <img src="{{Storage::url($government->agency_image)}}" width="500" id="agency_image" name="agency_image" value="{{  $government->agency_image  }}" readonly>
                    </div>
                        <div class="form-group">
                        <label for="agency_address">Agency Address</label>
                        <input type="text" class="form-control" id="agency_address" name="agency_address" value="{{  $government->agency_address  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="agency_phone">Agency Phone</label>
                        <input type="text" class="form-control" id="agency_phone" name="agency_phone" value="{{ $government->agency_phone  }}" readonly>
                      </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="longtext" class="form-control" id="description" name="description" value="{{ $government->description  }}" readonly>
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