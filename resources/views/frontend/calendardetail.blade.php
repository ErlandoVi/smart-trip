@extends('frontend.layout.app')

@section('content')






<section class="slider" style="padding: 100px">
<div class="row">
    <form>
        <div class="card-details">
            <div class="row">
                <div class="col-md-8">
                    <h3 style="color: #474D66; font-size: 32px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600; line-height: 40px; word-wrap: break-word">Silver A</h3>
                    <p style="width: 100%; color: #0F5156; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif font-weight: 400; line-height: 24px; word-wrap: break-word">Selamat datang di Silver Bintang 2 - Rumah Makan, di sini, rasa lezat dan keramahtamahan menyatu dalam suasana yang nyaman. Dengan peringkat dua bintang yang menghiasi namanya, kami siap memberikan pengalaman kuliner istimewa bagi Anda dan teman-teman Anda.</p>
                    <ul>
                        <li><i class="fa fa-solid fa-user" aria-hidden="true"></i> 15 Orang</li>
                        <li><i class="fa fa-calendar-days" aria-hidden="true"></i> 2 Hari 1 Malam</li>
                        <li><i class="fa fa-glass" aria-hidden="true"></i> Sederhana Resto</li>                        
                    </ul>
                    <h3 style="color: #474D66; font-size: 32px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 600; line-height: 40px; word-wrap: break-word">Pelatihan</h3>
                    <p style="color: #0F5156; font-size: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                        <ul>
                            <li>1. Paket Pelayanan Pelanggan Tentang Perpajakan</li>
                            <li>2. Paket Pelayanan Publik Tentang Kesehatan Bayi dan Anak</li>
                        </ul>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{asset('images/logo/baraya.png')}}" width="900">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                        <h2 style="color: #474D66" ><b>Biaya: </b></h2><h2 style="color: #0F5156">Rp 6,750,000</h2>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</div>
</section>
<section id="booking-section" style="padding: 100px; background:#dcdcdc">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>PILIH JADWAL</h2>
            </div>
        </div>

        <!-- Form: Nama, Mulai Kunjungan, Selesai Kunjungan -->
        <form action="{{url('booking')}}" method="POST" style="padding: 20px;">
        @csrf
            <div class="card    ">
                
                
                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" placeholder="{{ __('Email') }}" name="email" value="{{ old('email') }}" required />
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('Phone Number') }}</label>
                    <input type="text" class="form-control" id="phone" placeholder="{{ __('Nomor HP') }}" name="phone" value="{{ old('phone') }}" required />
                </div>
            

                <!-- Button: Booking Sekarang -->
            </div>
            <div class="col-lg-3">
                <button type="submit" style="width: 100%; height: 100%; padding: 16px; background: #0F5156; border-radius: 4px; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
                    <a style="color: white; font-size: 16px; font-weight: 400; text-decoration: none;">Booking Sekarang</a>
                </button>
            </div>
        </div>
    </form>
</section>


<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  .slider {
    display: flex;
    justify-content: space-between;
  }

  .sidebar-profile {
    width: 300px; /* Adjust the width as needed */
    padding: 20px;
    box-sizing: border-box;
  }

  .profile-image {
    width: 100px; /* Adjust the image size as needed */
    border-radius: 50%;
  }

</style>
</section>



  

@endsection
