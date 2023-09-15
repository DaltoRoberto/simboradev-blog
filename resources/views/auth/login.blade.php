@extends('layouts.blog')

@section('content')
    <div class="container">

        <div class="border border-gray-200 rounded-lg p-6 shadow-lg w-full lg:w-[30%] lg:mx-auto text-center">
            <h2 class="font-bold text-xl">Forneça as suas credenciais</h2>

            <form action="{{route('access')}}" method="POST" class="mt-4 text-left space-y-4">
                @csrf
                <div class="">
                    <label for="" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="ex: email@domain.com">
                    <span class="text-xs font-thin text-red-500"> @error('email'){{$message}}@enderror</span>

                </div>

                <div class="">
                    <label for="" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Forneça a sua senha">
                    <span class="text-xs font-thin text-red-500"> @error('password'){{$message}}@enderror</span>
                </div>
                <div class="mt-2">
                    <button type="submit"
                            class="w-full py-2 bg-blue-500 rounded text-white hover:bg-opacity-80 transition-colors duration-300">
                        Entrar
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
