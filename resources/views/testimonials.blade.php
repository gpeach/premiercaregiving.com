{{--TODO fix testimonial text--}}
@extends('base')

@section('title', 'Testimonials Page')

@section('content')

{{--<header class="hero d-flex align-items-center text-white text-center" style="background-image: url('/images/hero-placeholder.jpg');">--}}
{{--    <div class="container">--}}
{{--        <h1 class="display-4 fw-semibold">What Families Are Saying</h1>--}}
{{--    </div>--}}
{{--</header>--}}

<section class="py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-left mb-4">
                <h1>Testimonials</h1>
            </div>
            <div class="col-md-8">
                <blockquote class="blockquote">
                    <p>Dan was a godsend when my mother was nearing the end of her life. He traveled all the way from Florida with his husband and dog just to help care for her. Dan not only changed, fed, and cleaned my mom, but he also provided companionship and support so our family could rest or run errands without worry.</p>
                    <footer class="blockquote-footer mt-3">Kelsey Reed</footer>
                </blockquote>

                <hr class="my-5">

                <blockquote class="blockquote">
                    <p>Dan is truly compassionate, respectful, and professional. My father always looked forward to his visits. It’s rare to find someone with such a genuine heart and deep commitment to elder care.</p>
                    <footer class="blockquote-footer mt-3">James D.</footer>
                </blockquote>

                <hr class="my-5">

                <blockquote class="blockquote">
                    <p>We hired Dan after trying a few agencies, and the difference was night and day. With Dan, the care felt personal. He was attentive to every need and incredibly helpful with managing daily routines and medical reminders.</p>
                    <footer class="blockquote-footer mt-3">Linda S.</footer>
                </blockquote>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/details_portrait.jpg') }}" alt="Caregiver portrait" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
@endsection
