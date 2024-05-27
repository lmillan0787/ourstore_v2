@props(['route_edit', 'route_delete', 'item_id'])

<a href="{{ route($route_edit, $item_id) }}"
    class="text-sm text-white py-1 px-2 focus:outline-none focus:shadow-outline">
    <img src="{{ asset('img/pencil.png') }}" width="25" alt="" srcset="">
</a>
<a href="{{ route($route_delete, $item_id) }}"
    class="text-sm text-white py-1 px-2 focus:outline-none focus:shadow-outline">
    <img src="{{ asset('img/3d-trash-can.png') }}" width="20" alt="" srcset="">
</a>
