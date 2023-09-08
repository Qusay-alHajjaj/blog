@extends('layouts.app')

@section('content')
{{-- hero --}}
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 font-bold text-5xl uppercase pb-10 text-center">Welcome To The Legends Blog</h1>
        <button class="bg-gray-100 text-gray-600 font-bold py-4 px-5 uppercase rounded-lg text-xl hover:text-black transition duration-300 hover-bg-size hover:bg-gray-400" id="str-btn">Start Reading</button>
    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://www.picsum.photos/id/872/960/620">
        </div>
        <div class="flex flex-col items-center justify-center ">
            <h2 class="font-bold text-gray-700 text-3xl uppercase">
                How To Learn Programming in 2023
            </h2>
            <p class="font-bold text-xl text-gray-600 pt-2">
                You can find a list of all Programming Languages in 2023 Here
            </p>
            <p class="py-4 leading-5 text-sm text-gray-500">
                Get the same random image every time based on a seed, by adding /seed/seed to the start of the url You may combine any of the options above.
                For example, to get a specific image that is grayscale and blurred.
            </p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l hover:text-white hover:bg-black transition duration-300" href="/">Read More</a>
        </div>
    </div>

{{-- blog categories --}}
    {{-- <div class="text-center p-15 bg-gray-700 text-white">
        <h2 class="text-2xl">
            Blog Categories
        </h2>
        <div class="container sm:grid grid-cols-4 mx-auto pt-10">
            <div class="font-bold text-2xl py-2">Ux Design Thinking</div>
            <div class="font-bold text-2xl py-2">Programming Languages</div>
            <div class="font-bold text-2xl py-2">Ghraphic Design</div>
            <div class="font-bold text-2xl py-2">Front-End Development</div>
        </div>
    </div> --}}
{{-- recent posts --}}
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">
            PHP short for Hypertext PreProcessor  is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications
            In general, PHP is regarded as an easy programming language to master for people just starting to learn to program. As with any programming language, PHP has rules of coding, abbreviations, and algorithms. Learning PHP will be easy or challenging depending on how you approach learning the language itself
            Definition. SQL stands for Structured Query Language and is used to manage relational databases. PHP stands for Hypertext Preprocessor and is a programming language used for web development. Functionalit
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Php</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>
                </ul>
                <h3 class="text-l py-10 leading-6">
                    PHP short for Hypertext PreProcessor  is the most widely used open source and general purpose server side scripting language used mainly in web development to create dynamic websites and applications
                    In general, PHP is regarded as an easy programming language to master for people just starting to learn to program. As with any programming language, PHP has rules of coding, abbreviations, and algorithms. Learning PHP will be easy or challenging depending on how you approach learning the language itself
                    Definition. SQL stands for Structured Query Language and is used to manage relational databases. PHP stands for Hypertext Preprocessor and is a programming language used for web development. Functionalit
                </h3>
                <a href="/" class="hover:bg-opacity-100  hover:bg-gray-300 border-2 hover:text-black py-4 px-5 rounded-lg font-bold uppercase inline-block bg-opacity-0 text-gray-100 transition duration-300">Read More</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://www.picsum.photos/id/242/960/620">
        </div>
    </div>
@endsection
