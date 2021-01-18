@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-7 offset-2">
             <a href="/profile/{{$post->user->id}}">
             <img src="/storage/{{$post->image}}" class="w-100" style="border-radius:2px">
             </a>
        </div>
    </div>

   <div class="row pt-2 pb-4">
        <div class="col-7 offset-2">

            <p>
                <span class="pr-2">
                    <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold">{{$post->user->username}}</a>
                </span>{{$post->caption}} 
            </p>
        </div>
    </div>
  
    @endforeach
    
        <div class="row">
            <div class="col-5">{{$posts->links()}}</div>
        </div>
   
</div>

@endsection
