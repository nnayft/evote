@extends('layouts.app')
@section('title')
    Beranda
@endsection

@section('content')
    <!-- Header -->
    <div class="w-100 height-100 bg-red padding-x-45 padding-xs-x-10 padding-top-100 position-relative bg-hero">
        <div class="padding-md-top-40 padding-top-80 width-50p width-md-85p width-xs-100p white margin-bottom-45 margin-md-bottom-30 position-relative z-1"
            data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <h1 class="font-35 fontw-9 margin-bottom-10">Selamat Datang Di Website E-Vote</h1>
            <h2 class="font-15 font-md-125 fontw-7">Mudahkan Pemilihan Bersama Kami</h2>
        </div>
        @if (auth()->id())
            <a href="/kandidat" class="btn-white rounded-pill fontw-6 font-125 shadow-md width-xs-100p d-inline-block"
                data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Mulai Vote Sekarang</a>
        @else
            <button data-bs-toggle="modal" data-bs-target="#ModalLogin"
                class="btn-white rounded-pill fontw-6 font-125 shadow-md width-xs-100p d-inline-block" data-aos="fade-right"
                data-aos-duration="1000" data-aos-delay="100">
                Mulai Vote Sekarang
            </button>
        @endif
        <div class="position-absolute bottom-0 end-10 height-90 height-md-45 d-md-block d-none position-relative">
            <img src="/assets/images/UI/ilustrasi-kotaksuara.svg" class="kotaksuara" data-aos="fade-left"
                data-aos-duration="1000" data-aos-delay="100">
        </div>
    </div>

    <!-- Statistik -->
    <div class="w-100 margin-bottom-40 margin-top-15 position-relative">
        @if ($candidates->count())
            <div class="bg-red-linear padding-y-125 padding-x-20 padding-sm-x-15 padding-xs-10 width-75p width-xl-85p width-sm-80p width-xs-90p mx-auto rounded-4 d-flex flex-column flex-lg-row justify-content-between shadow-md row gx-4"
                data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <!-- Card -->
                @foreach ($candidates as $candidate)
                    <div class="col-12 col-md-4">
                        <div class="bg-white-linear rounded-4 shadow-md overflow-hidden mb-lg-0 mb-4"
                            style="--bs-aspect-ratio: 66%;">
                            <div class="bg-circles padding-125 padding-end-00 row">
                                <div class="col-8 col-sm-9">
                                    <h1 class="fontw-9 font-15 mb-0">{{ $candidate->name }}</h1>
                                    <p class="red margin-bottom-10 font-xs-8">{{ $candidate->class->kelas }}
                                        {{ $candidate->class->jurusans }} {{ $candidate->class->rombel }}</p>
                                    <div class="position-relative d-flex align-items-top margin-bottom-075">
                                        <h1 class="font-40 fontw-9 red mb-0">{{ $candidate->votes }}</h1>
                                        <span class="fontw-7 font-075 red">Vote</span>
                                    </div>
                                    {{-- <div class="d-flex align-items-center">
                                <iconify-icon icon="akar-icons:clock" class="grey me-1"></iconify-icon>
                                <p class="mb-0 grey font-06 d-inline-block">
                                    Terakhir update 1 jam yang lalu
                                </p>
                            </div> --}}
                                </div>
                                <div class="col-4 col-sm-3">
                                    {{-- <img src="{{ asset('storage/' . $candidate->image) }}" class="img-thumbnail rounded-circle border border-danger shadow-md" alt="{{ $candidate->name }}"> --}}
                                    <img src="/assets/images/kandidat-1-profile.png"
                                        class="img-thumbnail rounded-circle border border-danger shadow-md"
                                        alt="{{ $candidate->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="width-85p mx-auto position-relative overflow-hidden">
                <div class="d-flex justify-content-end">
                    <a href="/kandidat" class="red d-flex align-items-center margin-top-20 width-175p" data-aos="fade-left"
                        data-aos-duration="1000">
                        <p class="me-2 mb-0">Lihat profil selengkapnya</p>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </a>
                </div>
            </div>
    </div>
@else
    <div class="text-center">
        <p>Kandidat tidak tersedia</p>
    </div>
    @endif

    <!-- Kata Mereka SwiperJS -->
    <!-- Slider main container -->
    <div class="margin-x-45 margin-xs-x-10">
        <div class="margin-bottom-50 margin-md-bottom-25 margin-xs-bottom-15">
            <h1 class="text-center fw-bold">Pemilihan OSIS SMK Negeri 1 Karawang</h1>
            <span class="under-line"></span>
        </div>
        <div class="position-relative padding-bottom-50">
            <div class="position-relative">
                <div class="swiper width-90p width-xs-95p mx-auto position-relative overflow-hidden" data-aos="fade-right"
                    data-aos-duration="1000">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div
                            class="swiper-slide bg-red rounded-4 white padding-x-15 padding-sm-x-00 padding-top-20 padding-sm-top-00 padding-bottom-15 position-relative overflow-hidden">
                            <img src="/assets/images/_Abah_amung.png" alt=""
                                class="position-absolute position-sm-sticky z-0 top-0 end-0 height-100p">
                            <span
                                class="position-relative z-2 fontw-9 font-15 d-block padding-x-00 padding-sm-x-15 margin-bottom-00">"</span>
                            <p
                                class="position-relative z-2 width-65p width-sm-90p fontw-4 font-10 font-xs-075 margin-bottom-125 padding-x-00 padding-sm-x-15 ms-2">
                                Alhamdulillah kita bisa melakukan pemilihan ketua OSIS dengan sistem e-vote yg ke 7, mudah
                                mudahan ketua OSIS yang terpilih bisa melanjutkan program OSIS dengan lebih baik lagi karena
                                OSIS adalah garda terdepan dalam membantu setiap kegiatan sekolah.
                                <span class="fontw-9 font-15 ms-2">"</span>
                            </p>
                            <p class="position-relative z-2 fontw-7 mb-0 padding-x-00 padding-sm-x-15 ms-2">Drs. Makmur,
                                M.T.</p>
                            <p class="position-relative z-2 mb-0 padding-x-00 padding-sm-x-15 ms-2">Kepala Sekolah SMKN 1
                                Karawang</p>
                            <span class="filter-linear-red position-absolute position-absolute"></span>
                        </div>
                        <div
                            class="swiper-slide bg-red rounded-4 white padding-x-15 padding-sm-x-00 padding-top-20 padding-sm-top-00 padding-bottom-15 position-relative overflow-hidden">
                            <img src="/assets/images/_Bu_alia.png" alt=""
                                class="position-absolute position-sm-sticky z-0 top-0 end-0 height-100p">
                            <span
                                class="position-relative z-2 fontw-9 font-15 d-block padding-x-00 padding-sm-x-15 margin-bottom-00">"</span>
                            <p
                                class="position-relative z-2 width-65p width-sm-90p fontw-4 font-10 font-xs-075 margin-bottom-125 padding-x-00 padding-sm-x-15 ms-2">
                                Kita akan melaksanakan pemilihan ketua OSIS berbasis teknologi menggunakan E-Vote yang telah
                                rutin dilaksanakan di SMKN 1 Karawang dan telah menjadi tren di lingkup kita. Untuk ketua
                                OSIS yang terpilih, semoga akan lebih baik dalam menjalankan tugas-tugasnya.

                                <span class="fontw-9 font-15 ms-2">"</span>
                            </p>
                            <p class="position-relative z-2 fontw-7 mb-0 padding-x-00 padding-sm-x-15 ms-2">Alia Maedina,
                                S.Pd, M.Pd</p>
                            <p class="position-relative z-2 mb-0 padding-x-00 padding-sm-x-15 ms-2">Wakasek Bid Kesiswaan
                            </p>
                            <span class="filter-linear-red position-absolute position-absolute"></span>
                        </div>
                    </div>
                </div>


                <!-- If we need navigation buttons -->
                <div class="swiper-button-next red fontw-9 top-10 d-none d-md-inline-block"></div>
                <div class="swiper-button-prev red fontw-9 top-10 d-none d-md-inline-block"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination pagination-red fontw-9"></div>
        </div>
    </div>

    <!-- Kenapa E-Vote -->
    <div class="w-100 margin-y-85">
        <h1 class="text-center fw-bold">Kenapa Pakai E - Vote?</h1>
        <span class="under-line"></span>
        <div
            class="width-75 width-md-80 width-sm-60 width-xs-85 d-flex flex-column flex-md-row flex-wrap justify-content-around margin-top-60 margin-md-top-50 margin-xs-top-40 mx-auto position-relative overflow-hidden">
            <div class="width-30p width-md-100p text-center margin-bottom-20 marign-sm-bottom-00 padding-y-20 padding-x-05 shadow-md rounded-4"
                data-aos="fade-right" data-aos-duration="1000">
                <div class="width-30p position-relative rounded-circle mx-auto margin-bottom-25">
                    <img src="/assets/images/UI/Background/background-why.svg" class="width-100p">
                    <img src="/assets/images/UI/Icon/lokasi.svg"
                        class="width-70p position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="fontw-7">Akses dari mana saja</h3>
                <p class="mb-0">Suarakan pilihanmu dimanapun dan kapanpun dengan mudah</p>
            </div>
            <div class="width-30p width-md-100p text-center margin-bottom-20 marign-sm-bottom-00 padding-y-20 padding-x-05 shadow-md rounded-4"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="width-30p position-relative rounded-circle mx-auto margin-bottom-25">
                    <img src="/assets/images/UI/Background/background-why.svg" class="width-100p">
                    <img src="/assets/images/UI/Icon/statistik.svg"
                        class="width-70p position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="fontw-7">Statistik Lengkap</h3>
                <p class="mb-0">Pantau statistik vote setiap saat</p>
            </div>
            <div class="width-30p width-md-100p text-center margin-bottom-20 marign-sm-bottom-00 padding-y-20 padding-x-05 shadow-md rounded-4"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">
                <div class="width-30p position-relative rounded-circle mx-auto margin-bottom-25">
                    <img src="/assets/images/UI/Background/background-why.svg" class="width-100p">
                    <img src="/assets/images/UI/Icon/mobile.svg"
                        class="width-70p position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="fontw-7">Mudah Digunakan</h3>
                <p class="mb-0">Ikuti langkahnya dan tentukan pilihanmu</p>
            </div>
        </div>
    </div>
@endsection
