<div>

  <div class="col-md-4">
<input type="text" wire:model="search" class="form-control" placeholder="Search here..." >

</div>



@include('livewire.users.create')


@include('livewire.users.update')




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Image</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($users as $user)
    <tr>
    
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{$user->updated_at}}</td>
      <td>
      @if($user->image)
      
      <img src="{{'public/'.$user->image}}"/>
      @endif
      </td>
      <td>{{$user->address}}</td>
      <td>
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$user->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$user->id}})">Delete</button>
      </td>
    </tr>
  
    @endforeach 
  </tbody>
  
</table>
</div>
