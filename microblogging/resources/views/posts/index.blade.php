@include('header')
@include('posts.store')

<x-guest-layout>
@foreach ($post as $post)
<div class="flex justify-center flex-col">
    <p class="text-center">{{ $post->user->name }}</p>
    <div class="flex justify-center"><img width ="250px" height="250px" src="{{$post->img_url}}" ></div>
    <p class="text-center">"{{$post->description}}"</p>
    
</div>

@endforeach


</x-guest-layout>

@include('footer')