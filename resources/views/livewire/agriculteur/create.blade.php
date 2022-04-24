@if (Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Agriculteur nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Agriculteur nom"
            wire:model="agr_nom">
        @error('agr_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Agriculteur prenom </label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="agr_prn" placeholder="Agriculteur prenom">
        @error('agr_prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Agriculteur Residance</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="agr_resid" placeholder="Agriculteur Residance">
        @error('agr_resid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
@endif
