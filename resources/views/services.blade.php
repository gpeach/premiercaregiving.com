@extends('base')

@section('title', 'Services Page')

@section('content')

    <header class="hero d-flex align-items-center text-white text-center"
            style="background-image: url('{{ asset('images/services_hands-hero-image.jpg') }}');">
        <div class="container">
            <h1 class="display-4 fw-semibold">Services</h1>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mt-5">Private Caregiving</h5>
                    <ul>
                        <li>Personalized care routines tailored to individual needs.</li>
                        <li>Medication reminders.</li>
                        <li>Support with daily living activities, ensuring safety and comfort.</li>
                    </ul>

                    <h5 class="mt-5">Home Management</h5>
                    <ul>
                        <li>Coordination of household tasks from cleaning to maintenance.</li>
                        <li>Overseeing home staff, contractors, and service deliveries.</li>
                        <li>Organizing and inventory management for a smooth-running household.</li>
                    </ul>

                    <h5 class="mt-5">Lifestyle Assistance</h5>
                    <ul>
                        <li>Personal shopping, errand running, and appointment scheduling.</li>
                        <li>Travel arrangements, including itinerary planning and transportation coordination.</li>
                        <li>Event planning and coordination, from intimate dinners to large gatherings.</li>
                    </ul>
                    <h5 class="mt-5">Patient Advocate</h5>
                    <p>I’m a patient advocate, helping seniors and their loved ones navigate the health care system in
                        many ways, like communicating with doctors, finding legal help, working with insurance
                        companies, and setting up medical tests and screenings. As a senior Patient Advocate I can
                        assist with many aspects of medical care to make it a little less complicated.</p>

                </div>

                <div class="col-md-6">
                    <h5 class="mt-5">Discreet Client Support</h5>
                    <ul>
                        <li>Privacy assurance and confidentiality in all interactions.</li>
                        <li>Coordination with other professionals (e.g., financial advisors, personal trainers) on
                            behalf of the client.
                        </li>
                        <li>24/7 support availability for emergencies and urgent requests.</li>
                    </ul>

                    <h5 class="mt-5">Transitioning Care: From Daily Support to In-Home Hospice</h5>
                    <p>My services gracefully navigate the shift from regular caregiving to in-home hospice,
                        understanding the profound changes individuals and families face. I offer compassionate and
                        specialized care, ensuring each person maintains their dignity and comfort. As I journey with
                        you during these sensitive times, my training as a caregiver will provide both physical and
                        emotional support right at home, promising a peaceful and dignified experience for your loved
                        ones.</p>

                    <h5 class="mt-5">Respite Care: Everyone deserves a break</h5>
                    <p>My respite care service provides family caregivers with the relief they need, ensuring their
                        loved ones continue to receive compassionate and attentive care in their absence. Whether it's
                        for a few hours or longer, everyone deserves a break.</p>
                </div>

                <div class="col-md-12 mt-3 text-center">
                    <a href="/details" class="btn btn-dark">Details</a>
                </div>
            </div>
        </div>
    </section>
@endsection
