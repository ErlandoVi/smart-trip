@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('view pic')}}</h1>
                    <a href="{{ route('admin.pics.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pics.show', $pic->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{ $pic->code  }}" readonly>
                      </div>
                        <div class="form-group">
                        <label for="pic_name">Pic Name</label>
                        <input type="text" class="form-control" id="pic_name" name="pic_name" value="{{  $pic->pic_name  }}" readonly>
                      </div>
                      </div>
                        <div class="form-group">
                        <label for="pic_phone">Pic Phone</label>
                        <input type="text" class="form-control" id="pic_phone" name="pic_phone" value="{{  $pic->pic_phone  }}" readonly>
                      </div>
                      </div>
                        <div class="form-group">
                        <label for="pic_email">Pic Email</label>
                        <input type="text" class="form-control" id="pic_email" name="pic_email" value="{{  $pic->pic_email  }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="agency_id">Agency Id</label>
                        <input type="text" class="form-control" id="agency_id" name="agency_id" value="{{ $pic->agency_id  }}" readonly>
                      </div>
                      </div>
                        <div class="form-group">
                        <label for="agency_name">Agency Name</label>
                        <input type="text" class="form-control" id="agency_name" name="agency_name" value="{{  $pic->agency_name }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="pic_image">Pic Image</label>
                        <br> 
                        <img src="{{Storage::url($pic->pic_image)}}" width="500" id="pic_image" name="pic_image" value="{{  $pic->pic_image  }}" readonly>
                      </div>
                      </div>
                        <div class="form-group">
                        <label for="pic_roles">Pic Roles</label>
                        <input type="text" class="form-control" id="pic_roles" name="pic_roles" value="{{  $pic->pic_roles  }}" readonly>
                      </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="longtext" class="form-control" id="description" name="description" value="{{ $pic->description  }}" readonly>
                    </div>
                    </div>
                        <div class="form-group">
                        <label for="sequence">Sequence</label>
                        <input type="text" class="form-control" id="sequence" name="sequence" value="{{  $pic->sequence  }}" readonly>
                      </div>
                      </div>
                        <div class="form-group">
                        <label for="is_active">Is Active</label>
                        <input type="text" class="form-control" id="is_active" name="is_active" value="{{  $pic->is_active  }}" readonly>
                      </div>
                      </div>
                        <div class="form-group">
                        <label for="is_pic">Is Pic</label>
                        <input type="text" class="form-control" id="is_pic" name="is_pic" value="{{  $pic->is_pic  }}" readonly>
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