@extends('base')

@section('title', 'Contact Page')

@section('content')
<header class="hero d-flex align-items-center text-white text-center" style="background-image: url('{{ asset('images/garden-wheelchair-web-hero.png') }}');">
    <div class="container">
        <h1 class="display-4 fw-semibold">Contact Premier Caregiving</h1>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Let’s Connect</h2>
                <p>If you or a loved one may need assistance, I’m here to help. Contact me directly to schedule a consultation or ask any questions about the services I provide.</p>
                <p><strong>Email:</strong> <a href="mailto:brookhardinpeach@gmail.com">brookhardinpeach@gmail.com</a><br>
                    <strong>Phone:</strong> <a href="tel:+19545430946">(954) 543-0946</a></p>
                <p><strong>Address:</strong><br>1541 South Ocean Blvd Unit 411<br>Pompano Beach FL 33062</p>
            </div>
            <div class="col-md-6">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
