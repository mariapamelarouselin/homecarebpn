@extends('_layout.index')
@section('content')
<!-- about section -->
    <section class="about text-center" id="about">
        <div class="container">
            <div class="row">
                <h2>about us</h2>
                <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="{{url('doctor/img/item1.jpg')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>C</h1>
                            </div>
                            <h3>Children’s specialist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{url('doctor/img/item2.jpg')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>W</h1>
                            </div>

                            <h3>Children’s specialist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{url('doctor/img/item3.jpg')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>M</h1>
                            </div>
                            <h3>Children’s specialist</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of about section -->


    <!-- service section starts here -->
    <section class="service text-center" id="service">
        <div class="container">
            <div class="row">
                <h2>our services</h2>
                <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="heart img-responsive" src="{{url('doctor/img/service1.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Heart problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="brain img-responsive" src="{{url('doctor/img/service2.png')}}" alt="">
                            </div>
                        </div>
                        <h3>brain problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="knee img-responsive" src="{{url('doctor/img/service3.png')}}" alt="">
                            </div>
                        </div>
                        <h3>knee problem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="bone img-responsive" src="{{url('doctor/img/service4.png')}}" alt="">
                            </div>
                        </div>
                        <h3>human bones problem</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of service section -->


    <!-- team section -->
    <section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>our team</h2>
                    <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
                </div>
                @foreach($Dokter as $index=>$item)
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('doctor/img/member1.jpg')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>{{ $value->name}}</h3>
                        <p>{{ $value->content}} </p>
                        
                    </div>
                </div>
                @endforeach
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Danielle, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('doctor/img/member2.jpg')}}" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('doctor/img/member3.jpg')}}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Caitlin, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Joseph, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('doctor/img/member4.jpg')}}" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{url('doctor/img/member5.jpg')}}" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Michael, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Hasina, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{url('doctor/img/member6.jpg')}}" alt="member-5">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- end of team section -->
@endsection