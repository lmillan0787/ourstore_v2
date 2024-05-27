@props(['buttons' => null])

<td class="pb-3 text-center text-gray-300 @if($buttons!=null) flex justify-center items-center space-around @endif">
    {{ $slot }}
</td>
