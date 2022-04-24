@if ( Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Parcelle lieu</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Parcelle lieu"
            wire:model="emp_lieu">
        @error('emp_lieu')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Parcelle nom </label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="par_nom" placeholder="Enter Parcelle nom">
        @error('par_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Parcelle superficie</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="par_superficie" placeholder="Enter Parcelle superficie">
        @error('par_superficie')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Parcelle prop</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="par_prop" placeholder="Enter Parcelle prop">
        @error('par_prop')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
@endif
