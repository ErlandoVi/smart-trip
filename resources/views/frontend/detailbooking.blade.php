@extends('frontend.layout.app')

@section('content')

    <section class="credit-card1" style="padding: 100px">  
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar" style="width: 226px; background: #ffffff; border-radius: 8px; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex; padding: 20px;">
                        <div class="side-inner">
                            <div class="profile text-center">
                                <div class="row">
                                    <img src="{{ asset('images/logo/fotoprofilprojek.png') }}" width="200" style="border-radius: 50%;" alt="">
                                    <h3 class="name">Nama User</h3>
                                    <span class="country">User@gmail.com</span>
                                </div>
                            </div>
            
                            <div class="nav-menu">
                                <ul>
                                    <li><a href="#"><span class=""></span>Data Akun</a></li>
                                    <li><a href="#"><span class=""></span>My Booking</a></li>
                                    <li><a href="#"><span class=""></span>Riwayat Bookings</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="card-holder1">
                        <div class="card-box1 bg-news8">
                            <div class="row">
                                <form>
                                    <div class="card-details1">
                                        <!-- Penanggung Jawab and Jadwal Kunjungan Section -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5>Penanggung Jawab</h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Jadwal Kunjungan</h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Form Inputs -->
                                    <div class="row">
                                        <!-- Nama, Mulai Kunjungan, Selesai Kunjungan -->
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="formGroupExampleInput">Mulai Kunjungan</label>
                                            <input type="datetime-local" class="form-control" placeholder="Mulai Kunjungan">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="formGroupExampleInput">Selesai Kunjungan</label>
                                            <input type="datetime-local" class="form-control" placeholder="Selesai Kunjungan">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Nomor HP, Fasilitas -->
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Nomor HP</label>
                                            <input type="text" class="form-control" placeholder="Nomor HP">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Fasilitas</label>
                                            <input type="text" class="form-control" placeholder="Fasilitas">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Email, Agenda -->
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Email</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Agenda</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Agenda"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Asal Instansi -->
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Asal Instansi</label>
                                            <input type="text" class="form-control" placeholder="Asal Instansi">
                                        </div>
                                        <!-- Status and related elements -->
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Status</label>
                                            <p>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Lihat Status</a>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                        <div class="card card-body">
                                                            Status Anda
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Jumlah Rombongan -->
                                        <div class="col-lg-6">
                                            <label for="formGroupExampleInput">Jumlah Rombongan</label>
                                            <input type="number" class="form-control" placeholder="Jumlah Rombongan">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Paket and Harga -->
                                        <div class="col-lg-3">
                                            <label for="formGroupExampleInput">Paket</label>
                                            <input type="text" class="form-control" placeholder="Paket">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="formGroupExampleInput">Harga</label>
                                            <input type="text" class="form-control" placeholder="Harga">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection




    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset('js/jquery.filterizr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>

    <!--owl.carousel.js-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>

    <!--datepicker.js-->
    <script src="{{ asset('js/datepicker.js') }}"></script>

    <!--Custom JS-->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>


	</body>

</html>