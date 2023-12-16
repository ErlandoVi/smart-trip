@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-gray">
                    {{ __('Partnership Data') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.partnerships.create') }}" class="btn btn-success">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New Partnership') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover datatable datatable-role" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>{{ __('Partner Name') }}</th>
                                <th>{{ __('Partner Type') }}</th>
                                <th>{{ __('Partner Address') }}</th>
                                <th>{{ __('Pic Name') }}</th>
                                <th>{{ __('Pic Email') }}</th>
                                <th>{{ __('Pic Phone') }}</th>
                                <th>{{ __('Latitude') }}</th>
                                <th>{{ __('Longitude') }}</th>
                                <th>{{ __('Partner Image') }}</th>
                                <th>{{ __('Description') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($partnerships as $partnership)
                            <tr data-entry-id="{{ $partnership->id }}">
                                <td>

                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $partnerhsip->partner_name }}</td>
                                <td>{{ $partnership->partner_type }}</td>
                                <td>{{ $partnership->partner_address }}</td>
                                <td>{{ $partnerhsip->pic_name }}</td>
                                <td>{{ $partnerhsip->pic_email }}</td>
                                <td>{{ $partnerhsip->pic_phone}}</td>
                                <td>{{ $partnerhsip->latitude }}</td>
                                <td>{{ $partnerhsip->longitude }}</td>
                                <td>
                                   <a target="_blank" href="{{Storage::url($partnership->partner_image)}}">
                                    <img src="{{Storage::url($partnership->partner_image)}}" width="100" alt="">
                                    </a>
                                </td>
                                <td>{{ $partnership->description }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.partnerships.show', $partnership->id) }}" class="btn btn-primary ">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.partnerships.edit', $partnership->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.partnerships.destroy', $partnership->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="15" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
@endpush

@push('script-alt') 
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
    $("#data-table").DataTable();
    </script>
@endpush