<div wire:ignore.self id="updateModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Edit Data</h5>
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
  
                    <button wire:click.prevent="update()" class="btn btn-dark">Save</button>
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>