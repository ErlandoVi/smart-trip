@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('edit booking')}}</h1>
                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="package_id">{{ __('Package ID') }}</label>
                        <input type="text" class="form-control" id="package_id" placeholder="{{ __('ID Paket') }}" name="package_id" value="{{ old('package_id', $booking->package_id) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="booking_code">{{ __('Booking Code') }}</label>
                        <input type="text" class="form-control" id="booking_code" placeholder="{{ __('Kode Booking') }}" name="booking_code" value="{{ old('booking_code', $booking->booking_code) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="price_before_tax">{{ __('Price') }}</label>
                        <input type="text" class="form-control" id="price_before_tax" placeholder="{{ __('Harga Sebelum Pajak') }}" name="price_before_tax" value="{{ old('price_before_tax', $booking->price_before_tax) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="tax">{{ __('Pajak') }}</label>
                        <input type="text" class="form-control" id="tax" placeholder="{{ __('Pajak') }}" name="tax" value="{{ old('tax', $booking->tax) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="total_price">{{ __('Total Price') }}</label>
                        <input type="text" class="form-control" id="total_price" placeholder="{{ __('Harga Total') }}" name="total_price" value="{{ old('total_price', $booking->total_price) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="{{ __('Email') }}" name="email" value="{{ old('email', $booking->email) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ __('Phone Number') }}</label>
                        <input type="text" class="form-control" id="phone" placeholder="{{ __('Nomor HP') }}" name="phone" value="{{ old('phone', $booking->phone) }}" required />
                    </div>
                    <div class="form-group">
                        <label for="latest_order_status">{{ __('Order Status') }}</label>
                        <input type="text" class="form-control" id="latest_order_status" placeholder="{{ __('Status Order') }}" name="latest_order_status" value="{{ old('latest_order_status', $booking->latest_order_status) }}" required />
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