@extends('layouts.dashbord.app')
@section('content')


 <h1>Products<small></small></h1>


 @livewireStyles


 
 <div class="card-body ">
  @livewire('productcrud')            
                
              </div> 
            
            






              @livewireScripts


@endsection