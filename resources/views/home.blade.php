@extends('base')

@section('title', 'Premiere Caregiving Home Page')

@section('description', 'Caregiving that feels like family')

@section('content')
    {{-- Hero Section --}}
    <header class="hero d-flex align-items-center text-white text-center"
            style="background-image: url('{{ asset('images/hero.jpg') }}');">
        <div class="container">
            <h1 class="display-4 fw-semibold">Choosing a caregiver is choosing a partner in well-being.</h1>
        </div>
    </header>

    {{-- Bio Section --}}
    <section id="bio" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="fw-semibold">Personal Care... Personally Done.</h2>
                    <p>The care and well-being of your loved ones is a profound responsibility, one that I deeply
                        understand and value. As your private caregiver, I am wholly dedicated to providing not just
                        care, but a bond built on trust, respect, and heartfelt compassion. My years of experience
                        serving individuals with discerning needs have honed my skills to offer a truly personalized
                        caregiving approach.</p>
                    <p>While the health and comfort of your loved ones are always at the forefront, I also ensure that
                        your home environment remains harmonious and well managed, complementing the care I provide.
                        Choosing a caregiver is choosing a partner in well-being. Allow me to be that dedicated partner,
                        ensuring that your loved ones receive nothing but the best.</p>
                    <p class="fw-semibold">As an independent caregiver, I provide a more personal and cost-effective
                        alternative to larger agencies, which often deliver impersonal and costly services. With my
                        approach, you receive high quality care tailored specifically to your needs.</p>
                    <p>Welcome to caregiving that feels like family.</p>
                    <p class="mt-4"><a href="mailto:dan@premiercaregiving.com?subject=Contact Request"
                                       class="fw-semibold">dan@premiercaregiving.com</a><br>
                        <span class="fw-bold">(954) 543-0946</span></p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/bio.jpg') }}" alt="Caregiver portrait" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="services" class="py-5" style="background-color: #655e50; color: white;">
        <div class="container">
            <h2 class="text-center mb-5">Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <h5>Private Caregiving</h5>
                    <ul>
                        <li>Personalized care routines tailored to individual needs.</li>
                        <li>Medication reminders.</li>
                        <li>Support with daily living activities, ensuring safety and comfort.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Home Management</h5>
                    <ul>
                        <li>Coordination of household tasks from cleaning to maintenance.</li>
                        <li>Overseeing home staff, contractors, and service deliveries.</li>
                        <li>Organizing and inventory management for a smooth-running household.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Lifestyle Assistance</h5>
                    <ul>
                        <li>Personal shopping, errand running, and appointment scheduling.</li>
                        <li>Travel arrangements, including itinerary planning and transportation coordination.</li>
                        <li>Event planning and coordination, from intimate dinners to large gatherings.</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="/services" class="btn btn-light">View All</a>
            </div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section class="py-5 bg-light">
        <div class="container">
            <blockquote class="blockquote">
                <p>To whom this may concern,</p>
                <p>Dan Hardin-Peach would make a very amazing, loving, sympathetic caregiver. Dan was there during the
                    time my mother was on her last days of time. He came up from Florida with his husband and dog to
                    help my family and take care of her. He helped change, feed, wash my mom when needed. He also just
                    sat with her to give her company so we could run to the store or just take that mental break. I
                    couldn’t be happier that he was able to be there to help. If it wasn’t for Dan I don’t think I would
                    have been able to help my mom the way I did.</p>
                <footer class="blockquote-footer mt-3">Kelsey R.<br>Berlin, NJ</footer>
            </blockquote>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-5 text-white" style="background-color: #655e50;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mb-4">Get in Touch</h2>
                    <p>Thanks for visiting. If you or a family member may need my care, please contact me to discuss
                        your
                        situation or for further information.</p>
                    <a href="/contact" class="text-center btn btn-light mt-3">Contact Me</a>
                </div>
            </div>
        </div>
    </section>
@endsection
