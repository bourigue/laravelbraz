@if (Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Employe nss</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Employe nss"
            wire:model="emp_nss">
        @error('emp_nss')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Employe nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Employe nom"
            wire:model="emp_nom">
        @error('emp_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Employe prenom </label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="emp_prn" placeholder="Employe prenom">
        @error('emp_prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Employe Tarif</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="emp_tarif" placeholder="Employe Tarif">
        @error('emp_tarif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
@endif