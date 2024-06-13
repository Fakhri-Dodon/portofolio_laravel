@extends('master')

@section('konten')

<section class="projects section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-12 ms-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('images/coding.jpg') }}" class="avatar-image img-fluid" alt="">

                    <h2 class="text-white ms-4 mb-0">Portofolio</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <small class="projects-tag">Project</small>

                        <h3 class="projects-title">Save Book</h3>
                    </div>

                    <a href="{{ asset('images/savebook.png') }}" class="popup-image">
                        <img src="{{ asset('images/savebook.png') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <small class="projects-tag">certificate</small>

                        <h3 class="projects-title">Dicoding: Belajar Dasar Pemrograman</h3>
                    </div>

                    <a href="{{ asset('images/belajardasarpemrograman.jpg') }}" class="popup-image">
                        <img src="{{ asset('images/belajardasarpemrograman.jpg') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <small class="projects-tag">certificate</small>

                        <h3 class="projects-title">Dicoding: Front End</h3>
                    </div>

                    <a href="{{ asset('images/Front-End.jpg') }}" class="popup-image">
                        <img src="{{ asset('images/Front-End.jpg') }}" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection