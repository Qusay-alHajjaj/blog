@extends('layouts.app')


@section('content')
    @if (session()->has('message'))

        <div class="bg-indigo-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
            </div>
        </div>
    @endif
    <div class="container text-center m-auto pt-15 pb-5 ">
        <h1 class="font-bold text-5xl uppercase ">{{$post->title}}</h1>
        <div class="mt-3 gap-10">
            <div class="p-2"> By : <span class="text-gray-700 italic font-bold ">{{$post->user->name}}</span></div>
            <div class="p-2"> On : <span class="text-gray-700 italic font-bold ">{{date('d-m-Y',strtotime($post->updated_at))}}</span></div>
        </div>
    </div>
    <div class="container mx-auto text-center pt-15 pb-5">
        <div class="flex h-96">
            <img class="object-cover w-full" src="/images/{{$post->image_path}}">
        </div>
        <p class="text-l leading-6 py-8">
        {{$post->description}}
        </p>
        @if (Auth::user() && Auth::user()->id == $post->user_id)

            <div class="flex justify-start inline-block">
                <a href="/blog/{{$post->slug}}/edit"
                    class="hover:bg-green-700 border-2 text-white
                    py-4 px-5 rounded-lg font-bold mt-5 place-self-start
                    uppercase inline-block bg-green-500 font-bold
                    transition duration-300 sm:">
                    Edit post</a>
                    <form action="/blog/{{$post->slug}}" method="POST" class="mx-5 inline-block flex justify-start" >
                        @csrf
                        @method('delete')
                            <button type="submit"
                                class="hover:bg-red-700 border-2 text-white
                                py-4 px-5 rounded-lg font-bold mt-5 place-self-start
                                uppercase inline-block bg-red-500 font-bold
                                transition duration-300 sm:">
                                Delete post</button>
                    </form>
            </div>
        @endif
    </div>


@endsection
