<x-guest-layout>
@foreach ($post as $post)
    <p>{{ $post->user->name }}</p>
    <p>{{$post->description}}</p>
    <img src="{{$post->img_url}}" >

@endforeach
</x-guest-layout>

