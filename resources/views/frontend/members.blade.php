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
            <find-members :users="{{ json_encode($users)  }}"></find-members>
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