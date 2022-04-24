@if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <input type="hidden" wire:model="int_debut" placeholder="Enter debut">
        <label for="exampleFormControlInput1">Int emp nss</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter emp nss"
            wire:model="int_emp_nss">
        @error('int_emp_nss')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Int par id</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="int_par_id" placeholder="Enter par id" >
        @error('int_par_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Int nb jrs</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="int_nb_jrs" placeholder="Enter nb jrs">
        @error('int_nb_jrs')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
@endif
