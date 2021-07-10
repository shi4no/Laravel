@extends('layout.layout')

@section('content')
         <div class="flex-center position-ref full-height">
             @if (Route::has('login'))
                <div class="top right links">
                    @auth
                        <a href="{{  url('/home') }}">Home</a>
                        @else
                        <s href="{{  route(login) }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route("register") }}">Register</a>

                            @endif
                    @endauth 
                        </div>
             @endif

             <div class="content">
                 <img src="/img/soup.jpg" alt="Luwi's Miki House">
                 <div class="title m-b-md">
                     Luwi's Miki House<br/>
                     Ilocos Best Miki
                 </div>
                 
                
                 </div>
             </div>
         </div>
 @endsection
