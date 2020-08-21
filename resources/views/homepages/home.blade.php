@extends('layouts.app')
@section('content')
    <section id="banner">
        <div class="container">
            <div class="sign-up-form">
                <a href="#" class="logo"><img src="{{ asset('bower_components/bower-package/images/logo.png') }}" alt="{{ trans('register.friend-finder') }}"/></a>
                <h2 class="text-white">{{ trans('register.find-friend') }}</h2>
                <div class="line-divider"></div>
                <div class="form-wrapper">
                    <p class="signup-text">{{ trans('register.signup-welcome') }}</p>
                    <form action="#">
                        <fieldset class="form-group">
                            <input type="text" class="form-control" id="example-name" placeholder="{{ trans('register.enter-name') }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="example-email" placeholder="{{ trans('register.enter-email') }}">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="password" class="form-control" id="example-password" placeholder="{{ trans('register.enter-pass') }}">
                        </fieldset>
                    </form>
                    <p>{{ trans('register.agree') }}</p>
                    <button class="btn-secondary">{{ trans('register.signup') }}</button>
                </div>
                <a href="#">{{ trans('register.have-acc') }}</a>
                <img class="form-shadow" src="{{ asset('bower_components/bower-package/images/bottom-shadow.png') }}" alt="" />
            </div>
            <svg class="arrows hidden-xs hidden-sm">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </div>
    </section>
    <section id="features">
        <div class="container wrapper">
            <h1 class="section-title slideDown">{{ trans('register.herd') }}</h1>
            <div class="row slideUp">
                <div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
                    <div class="feature-icon"><i class="icon ion-person-add"></i></div>
                    <h3>{{ trans('register.make-friend') }}</h3>
                </div>
                <div class="feature-item col-md-2 col-sm-6 col-xs-6">
                    <div class="feature-icon"><i class="icon ion-images"></i></div>
                    <h3>{{ trans('register.publish-posts') }}</h3>
                </div>
                <div class="feature-item col-md-2 col-sm-6 col-xs-6">
                    <div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
                    <h3>{{ trans('register.private-chat') }}</h3>
                </div>
                <div class="feature-item col-md-2 col-sm-6 col-xs-6">
                    <div class="feature-icon"><i class="icon ion-compose"></i></div>
                    <h3>{{ trans('register.create-polls') }}</h3>
                </div>
            </div>
            <h2 class="sub-title">{{ trans('register.find-like') }}</h2>
            <div id="incremental-counter" data-value="101242"></div>
            <p>{{ trans('register.people-sign') }}</p>
            <img src="{{ asset('bower_components/bower-package/images/face-map.png') }}" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
        </div>
    </section>
    <div class="img-divider hidden-sm hidden-xs"></div>
@endsection
