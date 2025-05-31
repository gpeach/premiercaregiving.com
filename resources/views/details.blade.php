@extends('base')

@section('title', 'Details Page')

@section('content')

    {{--<header class="hero d-flex align-items-center text-white text-center" style="background-image: url('/images/hero-placeholder.jpg');">--}}
    {{--    <div class="container">--}}
    {{--        <h1 class="display-4 fw-semibold">Additional Information</h1>--}}
    {{--    </div>--}}
    {{--</header>--}}

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 offset-lg-1 mb-3">
                    <h2 class="fw-semibold mb-4">Private Caregiving<br>
                        Day-to-day assistance</h2>

                    <ul>
                        <li>Bathing, Grooming and Dressing</li>

                        <li>Walking and Fall Prevention</li>

                        <li>Mobility and Range of Motion Exercises</li>

                        <li>Transferring and Positioning</li>

                        <li>Medication Reminders</li>

                        <li>Planning and Preparing Healthy Meals</li>

                        Laundry and Light Housekeeping</li>

                        <li>Running Errands and Shopping</li>

                        <li>Transportation to Appointments</li>

                        <li>Household Organization and Light Housekeeping</li>

                        <li>Social Care and Meaningful Companionship</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-5 text-center">
                    <img src="{{ asset('images/details_portrait.jpg') }}" alt="Caregiver portrait"
                         class="img-fluid rounded">
                </div>
                <div class="col-md-12 mt-5 text-center">
                    <a href="/services" class="btn btn-dark">Services</a>
                </div>
            </div>
        </div>
    </section>
@endsection
