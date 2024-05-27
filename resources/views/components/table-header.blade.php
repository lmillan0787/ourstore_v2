@props(['headers'])
<thead class="align-bottom">
    <x-table-row>
        @foreach($headers as $header)
            <x-table-header-cell>{{ $header }}</x-table-header-cell>
        @endforeach
    </x-table-row>
</thead>
