@extends('layouts.dashbord.app')
@section('content')


 <h1>Users<small></small></h1>


 @livewireStyles


 
 <div class="card-body ">
  @livewire('usercrud')            
                
              </div> 
            






              @livewireScripts


@endsection