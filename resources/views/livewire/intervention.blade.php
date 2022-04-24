{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interventions') }}
        </h2>
    </x-slot>
    @if ($isOpen)
        @include('livewire.intervention.update')
    @else
        @include('livewire.intervention.create')
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Int debut</th>
                <th>Int emp nss</th>
                <th>Int par id</th>
                <th>Int nb jrs</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($intervention as $value)
                <tr>
                    <td>{{ $value->int_debut }}</td>
                    <td>{{ $value->int_emp_nss }}</td>
                    <td>{{ $value->int_par_id }}</td>
                    <td>{{ $value->int_nb_jrs }}</td>
                    @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                        <td>
                           
                            <button wire:click="edit({{ $value->int_debut }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->role == 'admin')
                                <button wire:click="delete({{ $value->int_debut }})"
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
