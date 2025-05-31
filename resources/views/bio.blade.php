@extends('base')

@section('title', 'Bio Page')

@section('content')

{{--<header class="hero d-flex align-items-center text-white text-center" style="background-image: url('/images/hero-placeholder.jpg');">--}}
{{--    <div class="container">--}}
{{--        <h1 class="display-4 fw-semibold">Meet Your Caregiver</h1>--}}
{{--    </div>--}}
{{--</header>--}}

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 text-left mb-4">
                <h1>Bio</h1>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/bio.jpg') }}" alt="Caregiver portrait" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h2 class="fw-semibold  mt-5 mt-md-0">Dan Hardin-Peach</h2>
                <p>I am an experienced certified caregiver, patient advocate, medical dietary assistant and nurse’s aide with experience in hospitals, nursing homes and private homes. I make your life easier and more pleasurable when you or your loved ones find it’s time that you need a little extra help with life.</p>
            </div>

        </div>
    </div>
</section>
@endsection
