{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employes') }}
        </h2>
    </x-slot>
    @if ($isOpen)
        @include('livewire.employe.update')
    @else
        @include('livewire.employe.create')
    @endif
    <table class="table table-bordered mt-5" id="sampleTable">
        <thead>
            <tr>
                <th>Emp_nss</th>
                <th>Emp_nom</th>
                <th>Emp_prn</th>
                <th>Emp_tarif</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employe as $value)
                <tr>
                    <td>{{ $value->emp_nss }}</td>
                    <td>{{ $value->emp_nom }}</td>
                    <td>{{ $value->emp_prn }}</td>
                    <td>{{ $value->emp_tarif }}</td>
                    @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                        <td>
                            <button wire:click="edit({{ $value->emp_nss }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            @if (Auth::user()->role == 'admin')
                                <button wire:click="delete({{ $value->emp_nss }})"
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
