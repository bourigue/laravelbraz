@if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <input type="hidden" wire:model="emp_nss">
        <label for="exampleFormControlInput1">Employe nom</label>
        <input type="emp_nom" class="form-control" wire:model="emp_nom" id="exampleFormControlInput1"  placeholder="Employe nom">
        @error('emp_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Employe prenom</label>
        <input type="text" class="form-control" wire:model="emp_prn" id="exampleFormControlInput2" placeholder="Employe prenom">
        @error('emp_prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Employe Tarif</label>
        <input type="text" class="form-control" wire:model="emp_tarif" id="exampleFormControlInput3" placeholder="Employe Tarif">
        @error('emp_tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
@endif
