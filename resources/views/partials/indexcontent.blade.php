{{--<div class="parallax parazero">--}}
   {{--@include('partials.parazerocontent')--}}
{{--</div>--}}


<div class="main-scotch circle">

</div>

{{--<div id="myCarousel" class="carousel vertical slide" data-ride="carousel" style="z-index: -1; min-height: 900px;">--}}


    {{--<div class="carousel-inner circle">--}}

        {{--<div class="item active">--}}
            {{--<div class="parallax parazero">--}}
            {{--@include('partials.parazerocontent')--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="item">--}}
            {{--<div class="parallax parazerotwo">--}}
                {{--@include('partials.parazerotwocontent')--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="item">--}}
            {{--<div class="parallax parazerothree">--}}
                {{--@include('partials.parazerothreecontent')--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}

{{--</div>--}}


{{--<div class="parallax paraone">--}}
{{--<div>--}}
{{--<iframe class="animation" id="iframe-animation" src="http://pixijs.teamgbaws.net/header/" style="display: block;">--}}
{{--<div class="row text-center ">--}}
{{--<div class="col-xs-12 top-margin-50" data-aos="fade-up" data-aos-duration="1500">--}}
{{--<h2 class="title-load animated" id="services">--}}
{{--OUR<br>SERVICES--}}
{{--</h2>--}}

{{--</div>--}}
{{--</div>--}}
{{--</iframe>--}}
{{--</div>--}}
@if(Session::has('success'))
    <div class="alert alert-success text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Success!</strong> {{ Session::get('message', '') }}
    </div>
@endif
<div id="servs" class="row crystals">
    <div class="col-sm-12">
        <div class="about__block--container shadowdiv">
            <div class="about__block black-on-white container-fluid">
                <div class="content__block col-sm-4 services-blocks text-center" data-aos="fade-up" data-aos-delay="300">

                    <h2><br>Scotch</h2>
                    <img src="/images/webdev.png" class="serv-icons" alt="">
                    <p>LOREM IPSUM</p>

                </div>
                <div class="content__block col-sm-4 services-blocks text-center" style="border-left: 1px solid black; border-right: 1px solid black;" data-aos="fade-up" data-aos-delay="100">

                    <h2><br>Bourbon</h2>
                    <img src="/images/appdev.png" class="serv-icons" alt="">
                    <p>lorem ipsum</p>

                </div>
                <div class="content__block col-sm-4 services-blocks text-center" data-aos="fade-up" data-aos-delay="700">

                    <h2><br>Whisk(e)y</h2>
                    <img src="/images/seo.png" class="serv-icons" alt="">
                    <p>Lorem Ipsum</p>

                </div>


                {{--testing slide out--}}
                {{--slide out toggle--}}


            </div>


        </div>
    </div>
</div>


{{--<div class="parallax paratwo">--}}
{{--<div class="row text-center ">--}}
{{--<div class="col-xs-12 top-margin-50" data-aos="fade-up" data-aos-duration="1500">--}}
{{--<h2 class="title-load animated">--}}
{{--OUR<br>TEAM--}}
{{--</h2>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}




<div class="row crystals founderstop visible-xs" id="founderssm">
    <div class="col-sm-12">
        <div class="about__block--container shadowdiv black-on-white" id="teamsm">
            <div class="about__block container-fluid">
                {{--DORI--}}
                <div class="image no-padding-right" data-aos="slide-right" data-aos-delay="300">

                    <img src="/images/dori.jpg" class="employee-photo-mobile" alt="" data-aos-delay="200"
                         data-aos-easing="ease-in-sine">
                </div>
                <div class="employee-info" data-aos="fade-up" data-aos-delay="300">
                    <h2>Dori Mouawad</h2>
                    <h3>Vice President | Co-founder</h3>



                    <p>Dori Mouawad is a UCI alum with many years of experience in developing mobile
                        applications under his belt. An expert in both native Android, and iOS development, he
                        has worked on an array of different projects since he helped to found IntelliSkye. Some of
                        the different types of projects he has completed range from a mobile side scroller game,
                        to an application to help educate those most at risk of the dangers of human traffiking
                        and how to avoid becoming a victim. He has honed his skills in the design and
                        development of mobile applications is constantly at the forefront of creating new and
                        exciting applications.</p>
                </div>

                {{--NICK--}}
                <div class="image no-padding-right" data-aos="fade-up" data-aos-delay="300">
                    <img src="/images/nickingenuity.jpg" class="employee-photo-mobile" alt="" data-aos-delay="200"
                         data-aos-easing="ease-in-sine">
                </div>
                <div class="employee-info" data-aos="fade-up" data-aos-delay="300">
                    <h2>Nicholas Hoyt</h2>
                    <h3>CEO | Founder</h3>
                    {{--<h2>Skills</h2>--}}
                    {{--line graph with skills--}}
                    {{--<h5>iOS / Android</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 80%;">--}}
                            {{--<span class="sr-only">80% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<h5>WEB DEVELOPMENT</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 95%;">--}}
                            {{--<span class="sr-only">95% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<h5>DATABASES</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 60%;">--}}
                            {{--<span class="sr-only">60% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <p>
                        Nicholas Hoyt is a UCI alum with many years of experience in developing mobile
                        applications and award winning websites under his belt. Skilled in both native Android, and iOS development, he
                        has worked on an array of different projects since he co-founded IntelliSkye. Nicholas has worked with several large companies creating beautiful and interactive websites. He has honed his skills in the design and
                        development of web applications and is constantly at the forefront of creating new and
                        exciting websites.
                    </p>
                </div>

                {{--STEVEN--}}
                {{--<div class="image no-padding-right" data-aos="slide-left" data-aos-delay="300">--}}
                    {{--<img src="/images/steveo.jpg" class="employee-photo-mobile" alt="" data-aos-delay="200"--}}
                         {{--data-aos-easing="ease-in-sine">--}}
                {{--</div>--}}
                {{--<div class="employee-info" data-aos="fade-up" data-aos-delay="300">--}}
                    {{--<h2>Skills</h2>--}}
                    {{--<h5>GRAPHICS</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 100%;">--}}
                            {{--<span class="sr-only">100% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    {{--<p>Steven Grenrock is a groundbreaking designer and artist. His works have been featured on several websites and he has worked as the graphic designer for several previous mobile applications with IntelliSkye. He has a passion for new and unique designs and is capable of creating the dream that you see for your mobile application or website.</p>--}}
                {{--</div>--}}


            </div>
        </div>
    </div>
</div>


<div class="parallax parathree black-on-white">
    <div class="row text-center ">
        <div class="col-xs-12 top-margin-100" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="title-load animated" id="skills">
                OUR SKILLS
            </h2>

        </div>
    </div>

</div>
<div class="project-section row crystals black-on-white">
    <div class="col-xs-12">


        <div class="row" data-aos="slide-right" data-aos-delay="300">
            <div class="col-sm-3">
                <img src="/images/icons/Androidicon.png" class="skillsicon" alt="">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/appleicon.png" class="skillsicon" alt="">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/awsicon.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/bootstrapicon.png" alt="" class="skillsicon">
            </div>
        </div>
        <div class="row" data-aos="slide-left" data-aos-delay="300">
            <div class="col-sm-3">
                <img src="/images/icons/cssicon.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/HTML_Logo.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/java_thumb.png" class="skillsicon" alt="">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/jqueryicon.png" alt="" class="skillsicon">
            </div>
        </div>


        <div class="row" data-aos="slide-right" data-aos-delay="300">

            <div class="col-sm-3">
                <img src="/images/icons/js.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/laravelicon.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/linux.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/mysqlicon.png" alt="" class="skillsicon">
            </div>
        </div>


        <div class="row" data-aos="slide-left" data-aos-delay="300">
            <div class="col-sm-3">
                <img src="/images/icons/pythonicon.png" class="skillsicon" alt="">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/sassicon.png" alt="" class="skillsicon">
            </div>
            <div class="col-sm-3">
                <img src="/images/icons/swifticon.png" alt="" class="skillsicon">
            </div>

        </div>


    </div>


</div>


</div>
</div>
<div class="parallax parafour black-on-white">
    <div class="row text-center ">
        <div class="col-xs-12 top-margin-100" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="title-load animated" id="skills">
                GET IN TOUCH
            </h2>
            <p>We believe communication is the foundation for any strong relationship. </p>

        </div>
    </div>

</div>

<hr>

<div class="row crystals text-center black-on-white">
    <div class="col-sm-12">
        <div class="about__block--container shadowdiv" id="contact">
            <div class="about__block container-fluid">
                <div class="content__block col-sm-6 col-sm-offset-3" data-aos="fade-up" data-aos-delay="300">

                    <h2>LETS WORK TOGETHER</h2>
                    <p>The best software is necessary to achieve your goals. Here at intelliskye we have what it
                        takes
                        to make your dreams become a reality. We will never stop fighting for you. Youre going
                        to like
                        the way you look, I guaruntee it.</p>

                    <p id="contactformbutton" class="button">
                        Contact Us&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
                    </p>

                </div>
                {{--CONTACT FORM HERE--}}

            </div>
        </div>
    </div>
</div>

