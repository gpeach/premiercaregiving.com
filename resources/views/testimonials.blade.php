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
                        <p>To Whom it May Concern, </p>
                        <p>I am writing this letter to recommend Daniel Hardin-Peach for his exceptional dedication and
                            compassionate care as a caregiver for my mother, Jennifer P. Over the time that he has been
                            providing care for my mother, Dan has consistently demonstrated professionalism, love and
                            incredible commitment to ensuring my mother's comfort, safety, and overall well-being. </p>
                        <p>Dan has been invaluable during a time that has been very challenging for me. As an only
                            child, I am extremely protective of my Mother and I am beyond careful as to whom I trust in
                            caring for my mother. Dan is kind and patient in nature, and has a strong sense of empathy
                            and love for his clients. I have witnessed firsthand the genuine bond that has developed
                            between them, which has had a profoundly positive impact on my mother's emotional state and
                            quality of life. Mom looks forward to Dan coming to the house and calls him “a great guy and
                            companion”. </p>
                        <p>Beyond his exceptional interpersonal skills, Dan exhibits a remarkable level of competence
                            and efficiency in carrying out caregiving responsibilities. His attention to detail and his
                            ability to anticipate my mother's needs have made a significant difference in ensuring that
                            my mother receives the best possible care. From administering medication on time to
                            assisting with daily activities, Dan consistently goes above and beyond to provide
                            exceptional care which has provided me with a sense of reassurance and confidence in his
                            abilities and care. </p>
                        <p>Dan has proven to be highly reliable and dependable. He is punctual and provides excellent
                            communication to me and other caregivers which has helped us to coordinate my mother's care
                            effectively and ensure a smooth caregiving schedule. I assigned Dan to manage the other
                            caregivers and he has managed everything very smoothly. </p>
                        <p>Without any reservation I offer my highest recommendation for Daniel Hardin-Peach. His
                            genuine care for my mother's well-being, and his overall excellence as a caregiver make him
                            a true standout. I have immense gratitude for the positive impact he has made on my mother's
                            life and our family as a whole along with the peace of mind he gives me knowing that my
                            mother is being well taken care of by an honest, respectful and trustworthy person. </p>
                        <p>Please do not hesitate to contact me with any questions or for further information. I am more
                            than happy to discuss my experiences with Dan in more detail. </p>
                        <footer class="blockquote-footer mt-3">Rick P.<br>Sea Ranch Lakes, FL</footer>
                    </blockquote>

                    <hr class="my-5">

                    <blockquote class="blockquote">

                        <p>To whom it may concern: <br><br>It is with the greatest of pleasure that I take this opportunity to recommend Dan Hardin-Peach as a skilled and caring home health aid. I am wheelchair bound because of a medical condition which results in degradation of muscles throughout my body and Dan serves as my aid during the season we are in Florida. Dan is highly skilled and demonstrates a deep understanding of the medical conditions he works with. He is frequently able to provide me with information and guidance. Dan understands his work so well that he anticipates and prepares for each net step in our process. He has a fine attention to detail and to cleanliness as well. I also understand that he provides broad household management services to a number of his clients Perhaps as important as his skills and caring, both my wife and I simply enjoy his presence. He bring a happy countenance and can brighten an otherwise bleak day. He lives and has lived an interesting life. We regard Dan as a friend. I can not imagine an aid I could recommend more highly. <br><br>Feel free to call me.</p>

                        <footer class="blockquote-footer mt-3">Dick M.<br>Lauderdale By The Sea, FL</footer>
                    </blockquote>

                    <hr class="my-5">

                    <blockquote class="blockquote">
                            <p>To whomever it may concern,</p>
                            <p>Dan Hardin Peach is a very caring person. I have known Dan for many years. My wife
                                recently passed. Dan was not only here for me but also my wife. If he hadn’t been here I
                                wouldn’t have been able to make it.&nbsp; He was a big part of the care. I believe Dan
                                will make a great caregiver.&nbsp;&nbsp;</p>
                        <footer class="blockquote-footer mt-3">Thomas L.<br>Berlin, NJ</footer>
                    </blockquote>

                    <hr class="my-5">

                    <blockquote class="blockquote">
                        <p>To Whom this May Concern,</p>
                        <p>It is my pleasure to call Dan Hardin Peach a neighbor, friend, and confidant for over 5 years
                            now. His personal character resonates with my favorite human being… a human, being
                            compassionate and competent, without bias or prejudice regardless of the life matter at
                            hand. From my life experience with Dan, his caregiver quality reached beyond the medical
                            caduceus and tugged my heart strings reminding me we all need help sometimes.<br><br>Living
                            and breathing nursing for 30 years now has opened my eyes to what beholds a true caregiver.
                            It is not only the letters behind his name that support his passion to help others, but also
                            his genuine love of life.<br><br>I stand beside Dan as a medical caregiver, CNA and
                            companion with high recommendations, and also with gratitude for all he has done for others.<br><br>Feel
                            free to reach out to me for any further acknowledgements.</p>
                        <footer class="blockquote-footer mt-3">Annmarie Spitaleri RN BSN MBS<br>Fort Lauderdale, FL</footer>
                    </blockquote>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/details_portrait.jpg') }}" alt="Caregiver portrait"
                         class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
@endsection
