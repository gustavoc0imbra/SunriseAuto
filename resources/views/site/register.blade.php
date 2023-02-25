@extends('site.layout.layout')
@section('content')
    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 100%;
            }
        }
    </style>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">Sunrise Auto</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-1 pt-1 mt-xl-n5">

                        <form action="{{ route('site.addCliente') }}" method="POST" style="width: 23rem;">
                            @csrf
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign-up</h3>

                            <div class="form-outline mb-4">
                                <input name="email" type="email"  class="form-control form-control-lg"/>
                                <label class="form-label">Email</label>
                                @error('email')
                                    <h1>Invalid Email!</h1>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input name="name" type="text"  class="form-control form-control-lg" required/>
                                <label class="form-label">Name</label>
                                @error('name')
                                <h1>Invalid Password!</h1>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input name="password" type="password" class="form-control form-control-lg" required/>
                                <label class="form-label">Password</label>
                                @error('password')
                                    <h1>Invalid password!</h1>
                                @enderror
                            </div>

                            <!--<div class="form-outline mb-4">
                                <input name="Image" type="file" class="form-control form-control-lg"/>

                            </div>-->

                            <div class="pt-1 mb-4">
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign Up">
                            </div>

                            <p>Already signed? <a href="{{ route('site.login') }}" class="link-info">Login here!</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('sunriseImg.png') }}"
                         alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
@endsection
