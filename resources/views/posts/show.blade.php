@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
             <img src="/storage/{{$post->image}}" class="w-100" style="border-radius:2px">
        </div>

        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                <img src="{{$post->user->profile->profileImage()}}" style="width:40px; height:40px; border-radius:50%">
                </div>
                <div>
                  <div class="font-weight-bold d-flex align-items-center">
                        <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                       
                  </div>
                </div>
            </div>
            <hr>
            <p>
                <span class="pr-2">
                    <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                </span>{{$post->caption}} 
            </p>
        </div>
    </div>
</div>
@endsection
