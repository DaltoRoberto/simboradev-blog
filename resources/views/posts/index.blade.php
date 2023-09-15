@extends('layouts.blog')

@section('content')
    <!-- begin:content -->
    <main class="py-10">
        <section class="">
            <div class="w-full">

                <div class="w-full bg-gray-500 py-10">
                    <div class="container">
                        <header class="py-8 mb-10 ">
                            <h1 class="text-4xl font-medium text-gray-50 pb-4">Blog</h1>
                            <p class="font-thin text-gray-100">Publicações e tutoriais para os amantes de desenvolvimento web</p>

                            <div class="lg:w-[100%] mt-8">
                                <form action="{{route('posts.search')}}" method="GET">
                                    <div class="flex py-4 px-4 bg-white border border-gray-400 rounded-lg">
                                        <input type="text" name="search" class="flex-1 focus:outline-none font-light text-blue-500" placeholder="Busque por um artigo">
                                        <button type="submit" class="font-medium text-xs text-white bg-gray-700 hover:bg-gray-800 transition-colors duration-300 rounded-lg py-2 px-4">Procurar</button>
                                    </div>
                                </form>
                            </div>

                        </header>
                    </div>
                </div>
                <div class="container">

                    @foreach($posts as $post)
                        @include('components.article', ['post'=>$post])
                    @endforeach

                    <div class="w-full flex justify-between items-center py-4">

                        <div class="flex py-2">

                        </div> <!-- begin:pagination -->

                        <div class="">
                            {{$posts->links()}}

                        </div>
                        <!-- end:pagination -->
                    </div>
                </div>
            </div>
    </main>
    <!-- end:content -->
@endsection
