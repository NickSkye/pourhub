




@extends('layouts.layout')
@section('content')
    <section class="facility">
        <div class="container-fluid">
            <div class="content col-sm-6" data-aos="fade-up">
                <h2>If you’ve got questions, we’ve got answers.</h2>
                <p>Here’s what most people ask, but you might have a different question. If you do, please <a href="/contact">contact us</a> for more specific information. </p>
            </div>
            <div class="image col-sm-6" data-aos="flip-right" data-aos-delay="200" data-aos-easing="ease-in-sine">
                <img src="/images/facility.png" alt="">
            </div>
        </div>



        <div class="trained__therapists container" data-aos="fade-up">
            <h2>Have Any More Questions? Feel Free To Contact Us!
            </h2>
            <div class="container container-margin">
                <div class="row text-center">
                    <div class="col-sm-6">
                        <form action="/sendemail" class="contact-form" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">

                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="*FIRST NAME">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="*LAST NAME">
                            </div>

                            <div class="form-group">

                                <input type="email" class="form-control" id="email" name="email" placeholder="*EMAIL ADDRESS">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="phone" name="phone" placeholder="PHONE NUMBER">
                            </div>



                            <br>
                            <button href="#" class="link-cta" role="button">Submit</button>
                            {{--<button class="btn btn-primary btn-lg">Submit</button>--}}
                        </form>
                    </div>
                </div>
            </div>

        </div>



    </section>
@endsection