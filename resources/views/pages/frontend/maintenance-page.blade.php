@extends('layouts.frontend.main-layout')

@section('title', 'MAINTENANCE')

@section('content')

    <!-- Start -->
    <section class="position-relative" style="background: url('{{ asset('frontend/images/bg/comingsoon.jpg')}}') center;">
        <div class="bg-overlay opacity-7"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="d-flex flex-column min-vh-100 justify-content-center px-md-5 py-5 px-4">
                        <div class="text-center mt-md-5">
                            <a href="index.html"><img src="{{ asset('frontend/images/logo-icon.png')}}" height="48" alt=""></a>
                        </div>
                        <div class="title-heading text-center my-auto">
                            <h4 class="coming-soon fw-bold text-uppercase">Coming Soon</h4>
                            <p class="text-white-50 para-desc mx-auto mb-0">Our design projects are fresh and simple and will benefit your business greatly. Learn more about our work!</p>

                            <div class="subcribe-form mt-4 pt-2">
                                <form action="https://shreethemes.in/starty/page-comingsoon.html">
                                    <input type="email" id="email" class="bg-white opacity-6 rounded shadow" required placeholder="Type your Email..">
                                    <button type="submit" class="btn btn-primary" style="top: 2.5px;">Notify Me</button>
                                </form>
                            </div>

                            <p class="text-white-50 mt-2"><span class="text-danger fw-bold">*</span>Notify me when website is launched</p>
                        </div>
                        <div class="text-center mb-md-5">
                            <span class="text-white-50 h6">Follow Now</span>
                            <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-2">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

@endsection

