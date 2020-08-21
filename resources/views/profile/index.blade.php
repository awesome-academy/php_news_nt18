@extends('layouts.app')
@section('content')
<div class="container">
    <div class="timeline">
        <div class="timeline-cover">
            <div class="timeline-nav-bar hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-info">
                            <img src="{{ asset('bower_components/bower-package/images/users/user-1.jpg') }}" alt="" class="img-responsive profile-photo" />
                            {{-- <h3>Sarah Cruiz</h3>  --}}
                            <p class="text-muted">{{ trans('profile.status') }}</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <ul class="list-inline profile-menu">
                            <li><a href="#" class="active">{{ trans('profile.timeline') }}</a></li>
                            <li><a href="#">{{ trans('profile.about') }}</a></li>
                            <li><a href="#">{{ trans('profile.album') }}</a></li>
                            <li><a href="#">{{ trans('profile.friends') }}</a></li>
                        </ul>
                        <ul class="follow-me list-inline">
                            {{-- <li>1,299 {{ trans('profile.follower-number') }}</li>   --}}
                            <li><button class="btn-primary">{{ trans('profile.add-friend') }}</button></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="navbar-mobile hidden-lg hidden-md">
                <div class="profile-info">
                    <img src="{{ asset('bower_components/bower-package/images/users/user-1.jpg') }}" alt="" class="img-responsive profile-photo" />
                    {{-- <h4>Sarah Cruiz</h4>  
                    <p class="text-muted">Creative Director</p>   --}}
                </div>
                <div class="mobile-menu">
                    <ul class="list-inline">
                        <li><a href="#" class="active">{{ trans('profile.timeline') }}</a></li>
                        <li><a href="#">{{ trans('profile.about') }}</a></li>
                        <li><a href="#">{{ trans('profile.album') }}</a></li>
                        <li><a href="#">{{ trans('profile.friends') }}</a></li>
                    </ul>
                    <button class="btn-primary">{{ trans('profile.add-friend') }}</button>
                </div>
            </div>

        </div>
        <div id="page-contents">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <div class="create-post">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    <img src="{{ asset('bower_components/bower-package/images/users/user-1.jpg') }}" alt="" class="profile-photo-md" />
                                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="{{ trans('profile.write-post') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="tools">
                                    <ul class="publishing-tools list-inline">
                                        <li><a href="#"><i class="ion-compose"></i></a></li>
                                        <li><a href="#"><i class="ion-images"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                                        <li><a href="#"><i class="ion-map"></i></a></li>
                                    </ul>
                                    <button class="btn btn-primary pull-right">{{ trans('profile.publish') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
