
@extends('layouts.app')


@section('content')

    <div class="container text-center m-auto pt-15 pb-5 ">
        <h1 class="font-bold text-6xl uppercase ">Edit the Post</h1>
    </div>
    <div class="container mx-auto text-center pt-15 pb-5">

        <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">@csrf @method('PUT')
            <input type="text" name="title" value="{{$post->title}}" class="w-full text-5xl h-20 rounded-lg shadow-lg p-15 mb-5 border-b">
            <textarea name="description" class="w-full text-xl h-60 rounded-lg shadow-lg p-15 mb-5 border-b">{{$post->description}}</textarea>
            <div class="py-20">
                <label class="items-center inline-block bg-gray-200 hover:bg-gray-700 text-black hover:text-white transition duration-300 cursor-pointer p-12 px-20 rounded-lg ">
                    <span class="font-bold uppercase">Select An Image To Upload</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>
            <button type="submit" class="uppercase bg-green-400 hover:bg-green-700 text-white transition duration-300 p-5 rounded-lg shadow-lg ">Modify The Post</button>
        </form>
    </div>

@endsection
