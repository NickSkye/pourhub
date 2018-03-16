{{--<div class="parallax parazero">--}}
   {{--@include('partials.parazerocontent')--}}
{{--</div>--}}


<div id="myCarousel" class="carousel vertical slide" data-ride="carousel" style="z-index: -1; min-height: 900px;">


    <div class="carousel-inner">

        <div class="item active">
            <div class="parallax parazero">
            @include('partials.parazerocontent')

            </div>

        </div>

        <div class="item">
            <div class="parallax parazerotwo">
                @include('partials.parazerotwocontent')
            </div>
        </div>

        <div class="item">
            <div class="parallax parazerothree">
                @include('partials.parazerothreecontent')
            </div>
        </div>


    </div>

</div>
<div id="section05">
    <a href="#servs" class="servs"><span></span></a>
</div>

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

<div id="servs" class="row crystals">
    <div class="col-sm-12">
        <div class="about__block--container shadowdiv">
            <div class="about__block black-on-white container-fluid">
                <div class="content__block col-sm-4 services-blocks text-center" data-aos="fade-up" data-aos-delay="300">

                    <h2><br>Web Development</h2>
                    <img src="/images/webdev.png" class="serv-icons" alt="">
                    <p>IntelliSkye provides end-to-end PHP development solutions catering to client-centric requirements. It can be used to develop API development, Website development, Custom CMS solution, World class web applications and E-commerce solution. We focuses on providing innovative services that encompasses High Performance, High Efficiency and Cost Effective Development Strategy to meet requirements of its clients.</p>

                </div>
                <div class="content__block col-sm-4 services-blocks text-center" style="border-left: 1px solid black; border-right: 1px solid black;" data-aos="fade-up" data-aos-delay="100">

                    <h2><br>App Development</h2>
                    <img src="/images/appdev.png" class="serv-icons" alt="">
                    <p>We at IntelliSkye specialize in App and Website development. Working with both Android and iOS,
                        we provide our clients with the most complete apps to cover the largest array of users. We
                        believe communication is the key to any good relationship so we work side by side with you every
                        step of the way to make your dream become a reality.</p>
                    <p class="hidden-xs" style="margin-top: 100px; margin-bottom: 45px;">
                        <a href="#contact" class="text-center button hidden-xs">
                            Learn more about our services&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a></p>
                </div>
                <div class="content__block col-sm-4 services-blocks text-center" data-aos="fade-up" data-aos-delay="700">

                    <h2><br>SEO/SEM/AdWords</h2>
                    <img src="/images/seo.png" class="serv-icons" alt="">
                    <p>In today's highly competitive world, it is not enough to have a good website to promote your services. It is very essential that your website appears in the top rankings of major search engines. An SEO friendly website translates to better visibility of the website, thereby bringing in profitable business. Without a search engine optimized site, you may loose out on potential business opportunities. Our SEO experts implement excellent optimization techniques to ensure that your website gets high ranking in all the major search engine result pages, thereby maximizing your ROI.</p>
                    <p><a href="#contact" class="text-center button visible-xs">
                            Learn more about our services&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a></p>
                </div>


                {{--testing slide out--}}
                {{--slide out toggle--}}


            </div>
            <div id="whatwedo" class="container pull-out-container">
                <div class="row">
                    <i class="fa fa-times fa-2x" style="position: absolute; top: 5%; right: 5%;" aria-hidden="true"></i>
                </div>
                <div class="row">

                    <div class="col-sm-12">
                        <p class="greentext"><strong>Services Include:</strong></p>
                        <ul>
                            <li>Mobile App design and development</li>
                            <li>Web design and development</li>
                            <li>SEO/SEM/AdWords</li>
                            <li>Consulting</li>

                        </ul>
                    </div>
                </div>
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

<div class="row founders founderstop hidden-xs" id="foundersbig">

    {{--@include('partials.modals')--}}
    <div  class="col-sm-6 animatedfounders founders-left" data-toggle="modal" data-target="#nickModal">
        {{--<img src="/images/nickingenuity.jpg" class="employee-photo" alt="">--}}
        <div class="employee-photo left"></div>
        <div class="founder-button-left">
            <h3>Nicholas Hoyt</h3>
            Nicholas Hoyt is a UCI alum with many years of experience in developing mobile
            applications and award winning websites under his belt. Skilled in both native Android, and iOS development, he
            has worked on an array of different projects since he co-founded IntelliSkye. Nicholas has worked with several large companies creating beautiful and interactive websites. He has honed his skills in the design and
            development of web applications and is constantly at the forefront of creating new and
            exciting websites.</div>
    </div>
    <div  class="col-sm-6 animatedfounders founders-right" data-toggle="modal" data-target="#doriModal">
        {{--<img src="/images/dori.jpg" class="employee-photo" alt="">--}}
        <div class="employee-photo right"></div>
        <div class="founder-button-right">
            <h3>Dori Mouawad</h3>
            Dori Mouawad is a UCI alum with many years of experience in developing mobile
            applications under his belt. An expert in both native Android, and iOS development, he
            has worked on an array of different projects since he helped to found IntelliSkye. Some of
            the different types of projects he has completed range from a mobile side scroller game,
            to an application to help educate those most at risk of the dangers of human traffiking
            and how to avoid becoming a victim. He has honed his skills in the design and
            development of mobile applications is constantly at the forefront of creating new and
            exciting applications.</div>
    </div>
    {{--@include('partials.pullouts')--}}
</div>


{{--<div class="row crystals hidden-xs">--}}
{{--<div class="col-sm-12">--}}
{{--<div class="about__block--container shadowdiv" id="team">--}}
{{--<div class="about__block container-fluid">--}}
{{--<div class="image col-sm-4 no-padding-right"  data-aos="slide-right" data-aos-delay="300">--}}

{{--<img src="/images/dori.jpg" class="employee-photo" alt="" data-aos-delay="200"--}}
{{--data-aos-easing="ease-in-sine">--}}
{{--</div>--}}
{{--<div class="image col-sm-4 no-padding-right"  data-aos="fade-up" data-aos-delay="300">--}}
{{--<img src="/images/nickingenuity.jpg" class="employee-photo" alt="" data-aos-delay="200"--}}
{{--data-aos-easing="ease-in-sine">--}}
{{--</div>--}}
{{--<div class="image col-sm-4 no-padding-right" id="empthreebutton" data-aos="slide-left" data-aos-delay="300">--}}
{{--<img src="/images/steveo.jpg" class="employee-photo" alt="" data-aos-delay="200"--}}
{{--data-aos-easing="ease-in-sine">--}}
{{--</div>--}}
{{--TEST--}}

{{--EMPLOYEE THREE--}}
{{--<div id="empthree" class="container pull-out-container-inner black-on-white">--}}
{{--<div class="row">--}}
{{--<i class="fa fa-times fa-2x" style="position: absolute; top: 5%; right: 5%;"--}}
{{--aria-hidden="true"></i>--}}
{{--</div>--}}
{{--<div class="row" style="margin-left: 0px; margin-right: 15px;">--}}
{{--<div class="col-xs-4">--}}
{{--<h2>Steven Grenrock</h2>--}}
{{--<p>Steven Grenrock is a groundbreaking designer and artist. His works have been featured on several websites and he has worked as the graphic designer for several previous mobile applications with IntelliSkye. He has a passion for new and unique designs and is capable of creating the dream that you see for your mobile application or website.</p>--}}
{{--</div>--}}
{{--<div class="col-xs-4">--}}
{{--<img src="/images/steveo.jpg" class="employee-photo-sm">--}}
{{--</div>--}}
{{--<div class="col-xs-4">--}}
{{--<h2>Skills</h2>--}}
{{--<h5>GRAPHICS</h5>--}}
{{--<div class="progress">--}}
{{--<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"--}}
{{--aria-valuemax="100" style="width: 100%;">--}}
{{--<span class="sr-only">100% Complete</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--line graph with skills--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--end test--}}
{{--</div>--}}
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
                    {{--<h2>Skills</h2>--}}
                    {{--line graph with skills--}}
                    {{--<h5>iOS / Android</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 90%;">--}}
                            {{--<span class="sr-only">90% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<h5>WEB DEVELOPMENT</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 60%;">--}}
                            {{--<span class="sr-only">60% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<h5>DATABASES</h5>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width: 80%;">--}}
                            {{--<span class="sr-only">80% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}


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

