{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarifs') }}
        </h2>
    </x-slot>
    @if ($isOpen)
        @include('livewire.tarif.update')
    @else
        @include('livewire.tarif.create')
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Tarif description</th>
                <th>Tarif ero</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarif as $value)
                <tr>
                    <td>{{ $value->tar_description }}</td>
                    <td>{{ $value->tar_ero }}</td>
                    @if(Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                        <td>
                            <button wire:click="edit({{ json_encode($value->tar_description) }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->role == 'admin')
                                <button wire:click="delete({{ json_encode($value->tar_description )}})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
