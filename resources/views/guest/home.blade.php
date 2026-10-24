@extends('layouts.guest.app')

@section('content')
    <!-- Hero Start -->
    <div class="container-xxl py-5 bg-dark hero-header mb-5" id="home">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Nikmati Hidangan<br>Lezat Kami</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Selamat datang di Restoria - Cafe & Resto! Kami menyajikan berbagai pilihan kuliner istimewa dengan bahan segar berkualitas tinggi dan cita rasa terbaik untuk menemani momen berharga Anda.</p>
                    <a href="#menu" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Our Menu</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets-guest/img/hero.png') }}" alt="Hero Restoria">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="container-xxl py-5" id="service">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>Koki Profesional</h5>
                            <p>Hidangan disiapkan langsung oleh koki berpengalaman untuk menjamin cita rasa terbaik di setiap piringnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Makanan Berkualitas</h5>
                            <p>Menggunakan bahan-bahan segar pilihan dan higienis demi menyajikan kualitas kuliner terbaik bagi Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Pemesanan Online</h5>
                            <p>Pesan menu favorit dan reservasi meja secara praktis melalui sistem online sebelum kedatangan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>Layanan 24/7</h5>
                            <p>Sistem reservasi dan layanan bantuan pelanggan kami siap melayani Anda kapan saja selama 24 jam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets-guest/img/about-1.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('assets-guest/img/about-2.jpg') }}" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('assets-guest/img/about-3.jpg') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('assets-guest/img/about-4.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                    <h1 class="mb-4">Selamat Datang di <i class="fa fa-utensils text-primary me-2"></i>Restoria</h1>
                    <p class="mb-4">Restoria - Cafe & Resto menghadirkan perpaduan sempurna antara kehangatan suasana cafe dan kelezatan hidangan restoran berkualitas. Kami berkomitmen untuk menyajikan makanan dan minuman terbaik yang dibuat dari bahan-bahan segar pilihan.</p>
                    <p class="mb-4">Ditemani dengan pelayanan yang ramah dan suasana yang nyaman, Restoria menjadi tempat yang tepat untuk berkumpul bersama keluarga, bersantai dengan teman, maupun menikmati momen berharga Anda setiap hari.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Tahun</p>
                                    <h6 class="text-uppercase mb-0">Pengalaman</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Koki & Barista</p>
                                    <h6 class="text-uppercase mb-0">Profesional</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Menu Start -->
    <div class="container-xxl py-5" id="menu">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Daftar Menu</h5>
                <h1 class="mb-5">Menu Terfavorit Kami</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Spesial</small>
                                <h6 class="mt-n1 mb-0">Sarapan</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Favorit</small>
                                <h6 class="mt-n1 mb-0">Makan Siang</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lezat</small>
                                <h6 class="mt-n1 mb-0">Makan Malam</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- TAB 1: SARAPAN -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-1.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Roti Bakar Kaya Toast</span>
                                            <span class="text-primary">Rp 22.000</span>
                                        </h5>
                                        <small class="fst-italic">Roti panggang renyah isi selai kaya dan mentega gurih.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-2.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Nasi Uduk Spesial</span>
                                            <span class="text-primary">Rp 28.000</span>
                                        </h5>
                                        <small class="fst-italic">Nasi gurih harum dengan telur, ayam suwir, dan sambal.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-3.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pancake Sirup Mapel</span>
                                            <span class="text-primary">Rp 25.000</span>
                                        </h5>
                                        <small class="fst-italic">Pancake lembut disajikan dengan butter dan sirup mapel manis.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-4.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Croissant Keju & Daging</span>
                                            <span class="text-primary">Rp 30.000</span>
                                        </h5>
                                        <small class="fst-italic">Pastry renyah dengan isian keju lumer dan smoked beef.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-5.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Omelet Sayur & Keju</span>
                                            <span class="text-primary">Rp 24.000</span>
                                        </h5>
                                        <small class="fst-italic">Telur dadar lembut isi paprika, jamur, dan keju melted.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-6.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Bubur Ayam Restoria</span>
                                            <span class="text-primary">Rp 20.000</span>
                                        </h5>
                                        <small class="fst-italic">Bubur lembut hangat dengan toping ayam gurih dan cakwe.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-7.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Susu Restoria</span>
                                            <span class="text-primary">Rp 18.000</span>
                                        </h5>
                                        <small class="fst-italic">Perpaduan espresso mantap dengan susu segar dan gula aren.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-8.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Teh Lemon Hangat</span>
                                            <span class="text-primary">Rp 15.000</span>
                                        </h5>
                                        <small class="fst-italic">Seduhan teh segar dengan perasan jeruk lemon asli.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 2: MAKAN SIANG -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-1.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Nasi Goreng Special</span>
                                            <span class="text-primary">Rp 35.000</span>
                                        </h5>
                                        <small class="fst-italic">Nasi goreng wangi khas Restoria disajikan dengan telor & sate.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-2.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ayam Geprek Sambal Korek</span>
                                            <span class="text-primary">Rp 28.000</span>
                                        </h5>
                                        <small class="fst-italic">Ayam crispy renyah digeprek dengan sambal korek pedas gurih.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-3.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger & Fries</span>
                                            <span class="text-primary">Rp 38.000</span>
                                        </h5>
                                        <small class="fst-italic">Burger ayam juicy bersaus spesial disajikan dengan kentang renyah.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-4.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Mie Goreng Seafood</span>
                                            <span class="text-primary">Rp 32.000</span>
                                        </h5>
                                        <small class="fst-italic">Mie bumbu rempah melimpah dengan udang dan cumi segar.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-5.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Soto Ayam Madura</span>
                                            <span class="text-primary">Rp 27.000</span>
                                        </h5>
                                        <small class="fst-italic">Soto kuah kuning kental kaya rempah lengkap dengan koya.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-6.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Club Sandwich</span>
                                            <span class="text-primary">Rp 30.000</span>
                                        </h5>
                                        <small class="fst-italic">Sandwich lapis isi ayam, telur, keju, dan selada segar.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-7.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Es Matcha Latte</span>
                                            <span class="text-primary">Rp 24.000</span>
                                        </h5>
                                        <small class="fst-italic">Minuman matcha premium dengan kombinasi susu creamy.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-8.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Es Alpukat Kocok</span>
                                            <span class="text-primary">Rp 22.000</span>
                                        </h5>
                                        <small class="fst-italic">Alpukat segar dikocok lembut disiram cokelat dan susu kental manis.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 3: MAKAN MALAM -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-1.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sirloin Steak Sapi</span>
                                            <span class="text-primary">Rp 85.000</span>
                                        </h5>
                                        <small class="fst-italic">Daging sapi panggang empuk dengan saus lada hitam khas.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-2.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Spaghetti Carbonara</span>
                                            <span class="text-primary">Rp 45.000</span>
                                        </h5>
                                        <small class="fst-italic">Pasta creamy lembut dengan potongan smoked beef dan keju parut.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-3.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ayam Bakar Madu</span>
                                            <span class="text-primary">Rp 38.000</span>
                                        </h5>
                                        <small class="fst-italic">Ayam bakar bumbu manis gurih disajikan dengan sambal terasi.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-4.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sup Buntut Sapi</span>
                                            <span class="text-primary">Rp 65.000</span>
                                        </h5>
                                        <small class="fst-italic">Sup empuk dengan kuah kaldu sapi kaya bumbu dan rempah alami.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-5.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pizza Margherita</span>
                                            <span class="text-primary">Rp 50.000</span>
                                        </h5>
                                        <small class="fst-italic">Pizza bertekstur empuk dengan saus tomat segar dan keju mozarella.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-6.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ikan Gurame Terbang</span>
                                            <span class="text-primary">Rp 55.000</span>
                                        </h5>
                                        <small class="fst-italic">Ikan gurame goreng super renyah disajikan lengkap dengan kecap pedas.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-7.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ice Americano</span>
                                            <span class="text-primary">Rp 20.000</span>
                                        </h5>
                                        <small class="fst-italic">Espresso murni dingin dengan karakter rasa kopi yang mantap.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-8.jpg') }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Mocktail Berry Fresh</span>
                                            <span class="text-primary">Rp 26.000</span>
                                        </h5>
                                        <small class="fst-italic">Minuman soda bersoda segar perpaduan campuran buah beri pilihan.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" id="booking">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservasi</h5>
                    <h1 class="text-white mb-4">Pesan Meja Secara Online</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                                    <label for="name">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email Anda">
                                    <label for="email">Email Anda</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Tanggal & Waktu" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Tanggal & Waktu</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select1">
                                      <option value="1">1 Orang</option>
                                      <option value="2">2 Orang</option>
                                      <option value="3">3 Orang</option>
                                    </select>
                                    <label for="select1">Jumlah Orang</label>
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Permintaan Khusus" id="message" style="height: 100px"></textarea>
                                    <label for="message">Permintaan Khusus</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Pesan Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video Youtube</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3" id="team">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Anggota Tim</h5>
                <h1 class="mb-5">Koki Andal Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('assets-guest/img/team-1.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">Chef Alexander</h5>
                        <small>Head Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('assets-guest/img/team-2.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">Chef Raymond</h5>
                        <small>Executive Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('assets-guest/img/team-3.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">Chef Nicholas</h5>
                        <small>Sous Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('assets-guest/img/team-4.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">Chef Benjamin</h5>
                        <small>Pastry Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="testimonial">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                <h1 class="mb-5">Apa Kata Pelanggan Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Makanan di Restoria sangat lezat dan bumbunya benar-benar meresap. Suasana cafenya juga sangat nyaman untuk tempat nongkrong maupun kerja santai.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('assets-guest/img/testimonial-1.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Siti Sarah</h5>
                            <small>Food Blogger</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Pelayanan yang sangat cepat dan ramah! Menu steak dan kopi arennya juara banget. Pasti bakal sering balik lagi ke Restoria bersama teman-teman.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('assets-guest/img/testimonial-2.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Andi Pratama</h5>
                            <small>Karyawan Swasta</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Restoria jadi tempat favorit keluarga saya untuk makan malam akhir pekan. Tempatnya bersih, estetis, dan pilihan menunya sangat bervariasi.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('assets-guest/img/testimonial-3.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Budi Santoso</h5>
                            <small>Pengusaha</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Sangat menyukai konsep gabungan cafe & resto di Restoria! Rasa makanan bintang lima tapi harganya tetap bersahabat. Recommended banget!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('assets-guest/img/testimonial-4.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Dewi Lestari</h5>
                            <small>Desainer Grafis</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
