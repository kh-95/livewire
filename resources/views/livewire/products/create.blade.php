

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Create</button>


    <div wire:ignore.self id="createModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>

            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">

<label>Categories</label>

<select wire:model="category_id" class="form-control"  >



@foreach($categories as $category)

<option value="{{$category->id}}" >{{$category->name}}</option>
@endforeach
</select>

</div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> Image</label>
                        <input type="file" id="exampleFormControlInput1" class="form-control"  placeholder="image" wire:model="image" />
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
  <img src="{{asset('uploads/product_images/default.png')}}"  class="img-thumbnail image-preview" alt="">
  </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Purchase_price</label>
                        <input type="number" id="exampleFormControlInput2" class="form-control" placeholder="Enter purchaseprice" wire:model="purchaseprice" />
                        @error('purchaseprice')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Sale_price</label>
                        <input type="number" id="exampleFormControlInput2" class="form-control" placeholder="Enter saleprice" wire:model="saleprice" />
                        @error('saleprice')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Stock</label>
                        <input type="number" id="exampleFormControlInput2" class="form-control" placeholder="Enter stock" wire:model="stock" />
                        @error('stock')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
    
                    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
