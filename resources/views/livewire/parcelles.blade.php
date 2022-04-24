<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Parcelles') }}
        </h2>
    </x-slot>
    @if ($isOpen)
        @include('livewire.parcelle.update')
    @else
        @include('livewire.parcelle.create')
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Par id</th>
                <th>Parcelle lieu</th>
                <th>Parcelle nom</th>
                <th>Parcelle superficie</th>
                <th>Parcelle prop</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parcelle as $value)
                <tr>
                    <td>{{ $value->par_id }}</td>
                    <td>{{ $value->emp_lieu }}</td>
                    <td>{{ $value->par_nom }}</td>
                    <td>{{ $value->par_superficie }}</td>
                    <td>{{ $value->par_prop }}</td>
                    @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                        <td>
                            <button wire:click="edit({{ $value->par_id }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->role == 'admin')
                                <button wire:click="delete({{ $value->par_id }})"
                                    class="btn btn-danger btn-sm">Delete</button>
                            @endif
                        </td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    </script>
    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>
