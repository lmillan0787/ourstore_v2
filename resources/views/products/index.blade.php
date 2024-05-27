<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('products.create') }}" class="pt-4 my-4 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-4 px-4 border border-gray-400 rounded shadow">
                {{ __('+') }}
            </a>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">


                <x-table>
                    <x-table-header :headers="[
                                            'Producto',
                                            'Categoria',
                                            'Precio',
                                            'Impuesto',
                                            'Estado',
                                            'Acción'
                                            ]">
                    </x-table-header>
                    <x-table-body>
                        @foreach ($products as $product)
                            <x-table-row>
                                <x-table-cell> {{ $product->name_spanish }} </x-table-cell>
                                <x-table-cell> {{ $product->category->name_spanish }} </x-table-cell>
                                <x-table-cell> {{ $product->price }} </x-table-cell>
                                <x-table-cell> {{ $product->tax }} </x-table-cell>
                                <x-table-cell> Activo </x-table-cell>
                                <x-table-cell buttons="true">
                                    <x-table-button route_edit="products.edit" route_delete="products.destroy" item_id="{{$product->id}}"></x-table-button>
                                </x-table-cell>
                            </x-table-row>
                        @endforeach
                    </x-table-body>
                    <x-table-footer :data="$products"></x-table-footer>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
