@extends('layouts.pag')

@section('content')
    <style>
        .email{
            padding-right: 30%;
            text-align: center;

        }
    </style>

    <div class="content">
        <div class="container wow fadeInUp delay-03s">
            <div class="row">
                <div class="logo text-center">
                    <a href="{{route('login')}}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="250"></a>
                    <h2>Procurement | PSI Moçambique</h2>
                </div>

                <h2 class="subs-title text-center">Código de confirmação!!!</h2>
                <div class="subcription-info text-center">
                    <form class="subscribe_form" action="{{route('registar-cod-confirmacao.store')}}" method="post">
                        {{ csrf_field() }}
                        <input placeholder="_ _ _ _ _ _ _ _ _ _" required class="email" id="codigo" name="codigo" maxlength="15" type="text" value="{{ old('codigo') }}" >
                        <input class="subscribe" name="email" value="Confirmar" type="submit">
                    </form>
                    <p class="sub-p">We Promise to never span you.</p>

                    @if(Session::has('message'))
                        <div class="alert alert-danger text-center">{{ Session::get('message') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="about-title">
                            <h2>About Us</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </br>voluptatum deleniti atque corrupti quos dolores e</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
                            <div class="img">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <h3 class="abt-hd">Our process</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="img">
                                <i class="fa fa-eye"></i>
                            </div>
                            <h3 class="abt-hd">Our Vision</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
                            <div class="img">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="abt-hd">Our Approach</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
                            <div class="img">
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                            <h3 class="abt-hd">Our Objective</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-title">
                            <i class="fa fa-envelope"></i>
                            <h2>Get in touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="contact col-md-6 wow fadeIn delay-08s">
                        <div class="col-md-10 col-md-offset-1">
                            <div id="note"></div>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div class="text-center"><button type="submit" class="contact-submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#codigo').click(function () {
            $('.alert').hide();
        })
    </script>
@endsection