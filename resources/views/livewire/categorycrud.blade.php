<div>
<div>

<div class="col-md-4">
<input type="text" wire:model="search" class="form-control" placeholder="Search here..." >

</div>



@include('livewire.categories.create')


@include('livewire.categories.update')




<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>

    <th scope="col">Action</th>
  </tr>
</thead>

<tbody>
@foreach($categories as $category)
  <tr>
  
    <th scope="row">{{$category->id}}</th>
    <td>{{$category->name}}</td>
    
    
    <td>
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$category->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$category->id}})">Delete</button>
    </td>
  </tr>

  @endforeach 
</tbody>

</table>
</div>

</div>
