@extends('layouts.app')


@section('content')
@if (session()->has('message'))

<div class="bg-red-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-800 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Deleted</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
    </div>
</div>
@endif
    <div class="container text-center m-auto pt-15 pb-5 ">
        <h1 class="font-bold text-6xl ">All Posts</h1>
    </div>
    {{-- create post --}}
    @if(Auth::check())
    <div class="container mx-auto  py-15 px-5 border-b border-gray-300 ">
        <a href="/blog/create" class="hover:bg-green-600 border-2 text-white py-4 px-5 rounded-lg font-bold uppercase inline-block bg-green-400 transition duration-300">Create A New Post</a>
    </div>

    @endif
    {{-- Posts --}}
    @foreach ($posts as $post)
        <div class="container mx-auto sm:grid grid-cols-2 gap-15 py-15 px-5 border-b border-gray-300 ">
            <div class="flex">
                <img class="object-cover" src="/images/{{$post->image_path}}">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5">
                    {{$post->title}}
                </h2>
                <span>
                    By : <span class="text-gray-700 italic">{{$post->user->name}}</span>
                    <br>
                    <br>
                    On  <span class="text-gray-700 italic">{{date('d-m-Y',strtotime($post->updated_at))}}</span>
                </span>
                <p class="text-gray-700 text-l leading-6 py-8">
                    {{$post->description}}
                </p>
                <a href="/blog/{{$post->slug}}" class="hover:bg-black border-2 hover:text-white py-4 px-5 rounded-lg font-bold uppercase inline-block bg-gray-400 text-black transition duration-300 sm:">Read More</a>
            </div>
        </div>
    @endforeach
@endsection
