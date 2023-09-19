@extends('layouts.blog', ['title'=>$post->title])

@section('content')
    <main class="mt-10">
        <article>


            <!-- begin:header-wrapper -->
            <div class="w-full bg-gray-500 py-10">
                <div class="container">
                    <header class="py-8  ">
                        <h1 class="text-xl lg:text-4xl  font-medium text-gray-50 pb-4">{{$post->title}}</h1>
                        <div class="flex gap-2">
                            <span class="tag">PHP</span>
                            <span class="tag">Programação</span>
                            <span class="tag">Banco de dados</span>
                        </div>
                    </header>
                </div>
            </div>
            <!-- end:header-wrapper -->
            <div class="content w-[90%] lg:w-[60%] mx-auto py-8 font-light lg:text-sm text-gray-700">
                {{$post->content}}
            </div>
        </article>
    </main>
@endsection
