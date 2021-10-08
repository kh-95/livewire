@extends('layouts.dashbord.app')
@section('content')


 <h1>Categories<small></small></h1>


 @livewireStyles


 
 <div class="card-body ">
  @livewire('categorycrud')            
                
              </div> 
            






              @livewireScripts


@endsection