@extends('layouts.blog')

@section('content')
    <div class="container">
        @if(session()->has('logged'))
            <div class="rounded p-4 bg-green-100 text-green-500">
                <p class="">{{ session()->get('logged') }}</p>
            </div>
        @endif
    </div>

    <main class="py-10">
        <section class="container">
            <div class="w-full">
                <header class="pb-10 mb-10 ">
                    <h1 class="text-4xl font-thin text-gray-600 pb-4">Últimas Postagens</h1>
                    <p class="font-thin text-gray-400">Acompanhe as publicações recém lançadas no <span class="">SimboraDev</span>
                    </p>
                </header>

                @foreach($posts as $post)
                    @include('components.article', ['post'=>$post])
                @endforeach

            </div>
        </section>
    </main>

@endsection
