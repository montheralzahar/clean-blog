@extends('master')
@section('title', 'Contact Us')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('frontAssets/assets/img/contact-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                        as possible!</p>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="{{ route('contact') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <x-input label="Name" name="name" placeholder="Enter your name ..." />
                            </div>
                            <div class="form-floating">
                                <x-input label="Email address" name="email" placeholder="Enter your email ..."
                                    type="email" />
                            </div>
                            <div class="form-floating">
                                <x-input label="Phone Number" name="phone" placeholder="Enter your phone number ..."
                                    type="tel" />
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control @error("message") is-invalid @enderror" id="message"
                                    placeholder="Enter your message here..." style="height: 12rem" name="message">{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                                @error('message')
                                    <div><small class="text-danger">{{ $message }}</small></div>
                                @enderror
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
