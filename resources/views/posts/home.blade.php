@extends('layouts.app')

@section('content')
    
    <div class="flex justify-center">
        <div class="w-8/12 bg-blue-400 p-6 rounded-lg mb-4 text-center">
            <h1 class="text-5xl text-gray-700 uppercase bold italic">BELBAH'S POST APPLICATION</h1>
        </div> 
    </div>

    @if (Auth::check() && (Auth::user()->username == 'nforkuo'))
    <div class="flex justify-center">
        <form action="{{ route('home') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block flex justify-between">
                    <input type="file" class="block shadow-3xl mb-10 p-1/2 w-60 placeholder-gray-400" name="image">
                    
                    <button type="submit" class="bg-blue-500 p-1/2 text-white mb-10 w-20 rounded font-medium">Show</button>
                </div>
            </form>
            
    </div>
    @endif

    <div class="flex justify-center">
        <img src="{{ asset('images/1639960378.jpg') }}" class="w-8/12 mb-8 shadow-xl" alt="">
    </div>
@endsection
