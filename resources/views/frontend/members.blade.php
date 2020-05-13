@extends('layouts.app')

@section('content')
<section class="page-section-ptb pt-3 profile-slider">
    <div class="container">
        <div class="row justify-content-center mb-5 sm-mb-3">
            <div class="col-md-8 text-center">
                <h2 class="title divider">All Profiles</h2>
            </div>
        </div>
        @if (!$users->isEmpty())
        <div class="row mb-5 sm-mb-3">
            @foreach ($users as $user)
            <div class="col-md-3 sm-mb-3">
                <div class="profile-item-hover-1">
                    <a href="{{ route('frontend.members.show', ['slug' => $user->slug]) }}" class="profile-item">
                        <div class="profile-image clearfix">
                            <img class="img-fluid" src="{{ $user->photo_url }}" alt="">
                            <div class="story-link" style="opacity: 1; background: none; height: 0%;">
                                <a href="#" data-toggle="modal" data-target="#{{ 'modal' .$user->id}}">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="profile-details profile-text">
                            <h5 class="title">{{ $user->name }}</h5>
                            <span class="text-black">{{ $user->age }} Years Old</span>
                        </div>
                    </a>
                </div>
            </div>

            <!--Modal: Name-->
            <div class="modal fade" id="{{'modal' .$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
        
                <!--Content-->
                <div class="modal-content">
        
                    <!--Body-->
                    <div class="modal-body mb-0 p-0">
        
                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HjdxJgn2AZI"
                        allowfullscreen></iframe>
                    </div>
        
                    </div>
        
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <button @click.prevent="selectUser({{ json_encode($user) }})" type="button" class="btn btn-outline-light text-success" data-dismiss="modal" data-toggle="tooltip" title="" data-original-title="Chat">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </button>

                        <button type="button" class="btn btn-outline-light text-danger" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    
                        <button class="btn btn-outline-light text-success" type="button" data-toggle="tooltip" title="" data-original-title="Video call">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        </button>        
                    </div>
        
                </div>
                <!--/.Content-->
        
                </div>
            </div>
            <!--Modal: Name-->

            
            @endforeach
        </div>
        @endif
        <div class="row">
            <div class="col-md-12 text-center">
                <!--<a class="button  btn-lg btn-theme full-rounded animated right-icn">
                    <span>Show More<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span>
                </a>-->
                {!! $users->render() !!}
            </div>
            <span v-if="selectedUsers != null" class="main-chat">
                <popup-without-convo v-for="user in selectedUsers" :key="user.id" :authuser="{{ json_encode(Auth::user()) }}" :user="user"  v-on:remove="removeSelectedUser" />
            </span>
        </div>
    </div>
</section>
@endsection