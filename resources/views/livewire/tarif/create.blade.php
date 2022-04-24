@if (Auth::user()->role == 'admin')
<form>
    <div class="form-group">
        <label class="form-label" for="exampleFormControlInput1">Tarif description</label>
        
        <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Enter tar description"
            wire:model="tar_description">
        @error('tar_description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label class="form-label" for="exampleFormControlInput1">Tarif ero</label>
        <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Enter tar ero"
            wire:model="tar_ero">
        @error('tar_ero')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
@endif