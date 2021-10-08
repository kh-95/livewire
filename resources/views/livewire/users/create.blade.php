


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
                        <label for="exampleFormControlInput1"> Name</label>
                        <input type="text" id="exampleFormControlInput1" class="form-control"  placeholder="EnterName" wire:model="name" />
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email</label>
                        <input type="email" id="exampleFormControlInput2" class="form-control" placeholder="Enter Email" wire:model="email" />
                        @error('email')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Password</label>
                        <input type="password" id="exampleFormControlInput2" class="form-control" placeholder="Enter Password" wire:model="password" />
                        @error('password')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Phone</label>
                        <input type="text" id="exampleFormControlInput2" class="form-control" placeholder="Enter Phone" wire:model="phone" />
                        @error('phone')<span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Image</label>
                        <section>
                        @if($image)
                        <image src={{$image}} width="200"/>
                        @endif
                        <input type="file" id="image" class="form-control" placeholder="user image" wire:change="$emit('filechoosen')" />
                        @error('image')<span class="text-danger">{{ $message }}</span>
                        @enderror
                        </section>
                    </div>
    <div class="col-md-2">
<button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">AddAddress</button>
</div>
@foreach($inputs as $key => $value)
<div class=" add-input">
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter address" wire:model="address.{{ $value }}">
@error('address.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
</div>
</div>

<div class="col-md-2">
<button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
</div>
</div>
</div>
@endforeach
                
                    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
