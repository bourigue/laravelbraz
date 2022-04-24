@if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <input type="hidden" wire:model="par_id">
        <label for="exampleFormControlInput1">Parcelle lieu</label>
        <input type="emp_lieu" class="form-control" wire:model="emp_lieu" id="exampleFormControlInput1">
        @error('emp_lieu')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Parcelle nom</label>
        <input type="text" class="form-control" wire:model="par_nom" id="exampleFormControlInput2">
        @error('par_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Parcelle superficie</label>
        <input type="text" class="form-control" wire:model="par_superficie" id="exampleFormControlInput3">
        @error('par_superficie')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Parcelle prop</label>
        <input type="text" class="form-control" wire:model="par_prop" id="exampleFormControlInput3">
        @error('par_prop')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
@endif
