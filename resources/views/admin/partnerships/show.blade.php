@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('view partnership')}}</h1>
                    <a href="{{ route('admin.partnerships.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.partnerships.show', $partnership->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="partner_name">Partner Name</label>
                        <input type="text" class="form-control" id="partner_name" name="partner_name" value="{{ $partnership->partner_name  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="partner_type">Partner Type</label>
                        <input type="text" class="form-control" id="partner_type" name="partner_type" value="{{ $partnership->partner_type  }}" readonly>
                     <div class="form-group">
                        <label for="partner_address">Partner Address</label>
                        <input type="text" class="form-control" id="partner_address" name="partner_address" value="{{ $partnership->partner_address  }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pic_name">Pic Name</label>
                        <input type="text" class="form-control" id="pic_name" name="pic_name" value="{{ $partnership->pic_name  }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pic_email">Pic Email</label>
                        <input type="text" class="form-control" id="pic_email" name="pic_email" value="{{ $partnership->pic_email  }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pic_phone">Pic Phone</label>
                        <input type="text" class="form-control" id="pic_phone" name="pic_phone" value="{{ $partnership->pic_phone  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $partnership->latitude  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $partnership->longitude  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="partner_image">Partner Image</label>
                        <br> 
                        <img src="{{Storage::url($partnership->partner_image)}}" width="500" id="partner_image" name="partner_image" value="{{  $partnership->partner_image  }}" readonly>
                      </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="longtext" class="form-control" id="description" name="description" value="{{ $partnership->description  }}" readonly>
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