@extends('layouts.main-app')
@section('content')
    <section class="intro text-center section-padding" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wp1">

                    <h1 class="animated fadeInDown" style="color: white">Welcome to the Epilepsy Awareness Event</h1>

                </div>
            </div>
        </div>
    </section>
    <section class="features text-center section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Epilepsy</h1>
                    <hr>
                    <br>
                    <h3>The overall risk of dying for people with epilepsy is 1.6 to 3 times higher than for people without epilepsy.</h3>

                    <div class="features-wrapper">
                        <div class="col-md-4 wp2">
                            <div class="icon">
                                <i class="fa fa-question shadow"></i>
                            </div>
                            <h2>What is Epilepsy?</h2>
                            <p>Epilepsy is one of the most common serious neurological conditions in the world. It affects around 600,000 people in the UK.</p>
                            <p>Epilepsy is a condition that is defined by multiple seizures. Epilepsy is a seizure disorder!</p>
                        </div>
                        <div class="col-md-4 wp2 delay-05s">
                            <div class="icon">
                                <i class="fa fa-users shadow"></i>
                            </div>
                            <h2>How many people are affected?</h2>
                            <p> Almost 1 in 100 people in the UK have epilepsy. Around 87 people are diagnosed with epilepsy in the UK every day.</p>
                        </div>
                        <div class="col-md-4 wp2 delay-1s">
                            <div class="icon">
                                <i class="fa fa-heart shadow"></i>
                            </div>
                            <h2>How do seizures happen?</h2>
                            <p>When there is a sudden excessive electrical discharge that disrupts the normal activity of the nerve cells, a seizure may result. Seizures cause a change in function or behavior.</p>
                            <p></p>
                        </div>
                        <div class="col-md-4 wp2 delay-1s">
                            <div class="icon">
                                <i class="fa fa-plus shadow"></i>
                            </div>
                            <h2>More about seizures</h2>
                            <p>Most seizures end on their own and don't cause serious problems.</p>
                            <p>During some seizures, people can injure themselves, develop other medical problems, or have a life-threatening emergency.</p>
                            <p></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center" id="important-links">
        <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
                <div class="iphone">
                    <div class="wp3" style="margin-top: 100px">
                       <img src="{{asset('img/hopeImg.jpg')}}">
                    </div>
                </div>
                <div class="fluid-white"></div>
            </div>
            <div class="container designs">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7">
                        <div id="servicesSlider">
                            <h1>Important Links</h1>
                            <hr><br>
                            <ul class="slides">
                                <li>
                                    <br>
                                    <h3>Epilepsy Event Discord</h3>
                                    <hr><br>
                                    <a href="http://discord.epilepsyevent.com/"><i class="fab fa-discord fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>HeartbeatUTH Discord</h3>
                                    <hr><br>
                                    <a href="http://discord.heartbeatuth.com/"><i class="fab fa-discord fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>ETS2C Link</h3>
                                    <hr><br>
                                    <a href="https://ets2c.com/view/81940/yamyam-tartue-baltic"><i class="fas fa-link fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>Facebook</h3>
                                    <hr><br>
                                    <a href="https://www.facebook.com/EpilepsyEvent/"><i class="fab fa-facebook fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>Donations</h3>
                                    <hr><br>
                                    <a href="https://www.justgiving.com/fundraising/epilepsywareness2020"><i class="fas fa-donate fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>Epilepsy Event Forum</h3>
                                    <hr><br>
                                    <a href="https://forum.truckersmp.com/index.php?/topic/87448-28th-march-2020-epilespy-awareness/"><i class="fas fa-link fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>Twitch</h3>
                                    <hr><br>
                                    <a href="https://www.twitch.tv/epilepsyevent"><i class="fab fa-twitch fa-5x"></i></a>
                                    <br>
                                </li>
                                <li>
                                    <br>
                                    <h3>Twitter</h3>
                                    <hr><br>
                                    <a href="https://twitter.com/EventEpilepsy"><i class="fab fa-twitter fa-5x"></i></a>
                                    <br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio text-center section-padding ignite-cta" id="routes">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 style="color: white">Event Routes</h1>
                    <hr>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div id="portfolioSlider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-4 wp4">
                                <div class="overlay-effect effects clearfix">
                                    <div class="img">
                                        <img src="" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 style="color: white">Coming Soon...</h2>
                                <p></p>
                            </div>
                            <div class="col-md-4 wp4">
                                <div class="overlay-effect effects clearfix">
                                    <div class="img">
                                        <img src="" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 style="color: white">Coming Soon...</h2>
                                <p></p>
                            </div>
                            <div class="col-md-4 wp4">
                                <div class="overlay-effect effects clearfix">
                                    <div class="img">
                                        <img src="" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 style="color: white">Coming Soon...</h2>
                                <p></p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-4 wp4">
                                <div class="overlay-effect effects clearfix">
                                    <div class="img">
                                        <img src="" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 style="color: white">Coming Soon...</h2>
                                <p></p>
                            </div>
                            <div class="col-md-4 wp4">
                                <div class="overlay-effect effects clearfix">
                                    <div class="img">
                                        <img src="" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 style="color: white">Coming Soon...</h2>
                                <p></p>
                            </div>
                            <div class="col-md-4 wp4">
                                <div class="overlay-effect effects clearfix">
                                    <div class="img">
                                        <img src="" alt="">
                                        <div class="overlay">
                                            <a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>
                                            <a class="close-overlay hidden">x</a>
                                        </div>
                                    </div>
                                </div>
                                <h2 style="color: white">Coming Soon...</h2>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="team text-center section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About the Team</h1>
                </div>
            </div>
            <div class="row">
                <div class="team-wrapper">
                    <div id="teamSlider">
                        <ul class="slides">
                            <li>
                                <div class="col-md-4 wp5">
                                    <img src="{{asset('img/YamYam.jpg')}}" width="50%" height="50%" alt="Team Member">
                                    <h2>YamYam</h2>
                                    <p>Founder</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                            <li><a href="#" class="social-btn"><i class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 wp5 delay-05s">
                                    <img src="{{asset('img/CookieNightStorm.jpg')}}" width="75%" height="75%" alt="Team Member">
                                    <h2>CookieNightStorm</h2>
                                    <p>Event Manager</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                            <li><a href="#" class="social-btn"><i class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fab fa-twitch"></i></a></li>
                                            <li><a href="#" class="social-btn"><i class="fab fa-discord"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 wp5 delay-1s">
                                    <img src="{{asset('img/CockersGamingLogo.png')}}" width="50%" height="50%" alt="Team Member">
                                    <h2>Cockers Gaming</h2>
                                    <p>Website Developer</p>
                                    <div class="social">
                                        <ul class="social-buttons">
                                            <li><a href="https://discord.cockersgaming.uk/" class="social-btn"><i class="fab fa-discord"></i></a></li>
                                            <li><a href="https://www.twitch.tv/cockersgaming" class="social-btn"><i class="fab fa-twitch"></i></a></li>
                                            <li><a href="https://cockersgaming.uk" target="_blank" class="social-btn"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dark-bg text-center section-padding contact-wrap" id="contact">
        <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
            <h1>Contact US Form</h1>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            {!! Form::open(['route'=>'contactus.store']) !!}
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('Name:') !!}
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Message:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Contact US!</button>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
