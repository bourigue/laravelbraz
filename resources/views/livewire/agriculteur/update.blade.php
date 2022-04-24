@if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')

<form>
    <div class="form-group">
        <input type="hidden" wire:model="agr_id">
        <label for="exampleFormControlInput1">Agr_Nom</label>
        <input type="agr_nom" class="form-control" wire:model="agr_nom" id="exampleFormControlInput1" placeholder="Enter Agriculteur nom" >
        @error('agr_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Agr_Prenom</label>
        <input type="text" class="form-control" wire:model="agr_prn" id="exampleFormControlInput2" placeholder="Agriculteur prenom">
        @error('agr_prn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Agr_Resid</label>
        <input type="text" class="form-control" wire:model="agr_resid" id="exampleFormControlInput3" placeholder="Agriculteur Residance">
        @error('agr_resid')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
@endif
