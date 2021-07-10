@extends('layout.layout')

@section('content')
         <div class="flex-center position-ref full-height">
            

             <div class="content">
                 <div class="title m-b-md">
                     Miki List
                 </div>
                
                <!--
                 @for ($i = 0; $i <5; $i++)
                 <p>the value of i is {{  $i }}</p>
                     
                 @endfor -->
                 
                 @foreach ( $mikis as $mikil)
                  <div>
                     {{ $loop->index }} {{  $mikil['type'] }} - {{  $mikil['base'] }} - {{ $mikil ['price'] }}
                     @if ($loop->first)
                     <span.- first in the loop</span>
                         
                     @endif
                  </div>
                 @endforeach
                 <div>
                     
                 </div>
             </div>
         </div>
@endsection
