<div>
<div class="col-md-4">
<input type="text" wire:model="search" class="form-control" placeholder="Search here..." >

</div>




@include('livewire.products.create')


@include('livewire.products.update')




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Purchase_price</th>
      <th scope="col">Sale_price</th>
      <th scope="col">profit_percent</th>
      <th scope="col">Stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($products as $product)
    <tr>
    
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->category->name}}</td>
      <td><img src="{{$product->image}}" class="img-thumbnail" alt=""></td>
      <td>{{$product->purchase_price}}</td>
      <td>{{$product->sale_price}}</td>
      <td>{{$product->profit_percent}} %</td>
      <td>{{$product->stock}}</td>
   <td> 
<button class="btn btn-sm btn-info " data-toggle="modal" data-target="#updateModal"   wire:click="edit({{$product->id}})">Edit</button>
<button class="btn btn-sm btn-danger "  wire:click.prevent="delete({{$product->id}})">Delete</button>
      </td>
    </tr>
  
    @endforeach 
  </tbody>
  
</table>
</div>
