@extends('base')

@section('title', 'Services Page')

@section('content')

<header class="hero d-flex align-items-center text-white text-center" style="background-image: url('{{ asset('images/services_hands-hero-image.jpg') }}');">
    <div class="container">
        <h1 class="display-4 fw-semibold">Services</h1>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Private Caregiving</h5>
                <ul>
                    <li>Personalized care routines tailored to individual needs</li>
                    <li>Medication reminders</li>
                    <li>Support with bathing, grooming, dressing</li>
                    <li>Safety and mobility assistance</li>
                    <li>Meal preparation and hydration reminders</li>
                    <li>Companionship and emotional support</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Home Management</h5>
                <ul>
                    <li>Light housekeeping and laundry</li>
                    <li>Organizing and decluttering spaces</li>
                    <li>Grocery shopping and inventory tracking</li>
                    <li>Coordinating repairs and home maintenance</li>
                    <li>Scheduling and overseeing service providers</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Lifestyle Assistance</h5>
                <ul>
                    <li>Appointment coordination and reminders</li>
                    <li>Transportation and errands</li>
                    <li>Personal shopping</li>
                    <li>Mail sorting and bill tracking</li>
                    <li>Social and recreational planning</li>
                </ul>
            </div>
            <div class="col-md-12 text-center">
                <a href="/details" class="btn btn-dark">Details</a>
            </div>
        </div>
    </div>
</section>
@endsection
