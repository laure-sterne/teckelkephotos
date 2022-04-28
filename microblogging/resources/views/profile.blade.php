
@include('header')
<x-guest-layout>



@foreach($user as $user)
@if($user == Auth::user())
<div class="flex justify-start"><p>{{$user->name}}</p></div>
<div class="flex justify-end"><p>{{$user->biography}}</p></div>
<div class="flex justify-center"> <img  width ="250px" height="250px" src="{{$user->img_url }}"></div>
@else
@endif
@endforeach

</x-guest-layout>
<x-auth-card>

@foreach ($post as $post)
<div class="flex justify-center flex-col">
    <p class="text-center">{{ $post->user->name }}</p>
    <div class="flex justify-center"><img width ="250px" height="250px" src="{{$post->img_url}}" ></div>
    <p class="text-center">"{{$post->description}}"</p>
    
</div>

@endforeach
</x-auth-card>
@include('posts.store')
