<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            New Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg py-5 px-5">

                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <div>
                        <x-label for="code" value="{{ __('Codigo') }}" />
                        <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')"
                            required />
                    </div>

                    <div class="mt-4">
                        <x-label for="name_spanish" value="{{ __('Nombre Español') }}" />
                        <x-input id="name_spanish" class="block mt-1 w-full" type="text" name="name_spanish"
                            required />
                    </div>

                    <div class="mt-4">
                        <x-label for="name_english" value="{{ __('Nombre Ingles') }}" />
                        <x-input id="name_english" class="block mt-1 w-full" type="text" name="name_english"
                            required />
                    </div>

                    <div class="mt-4">
                        <x-label for="description_spanish" value="{{ __('Descripcion Español') }}" />
                        <x-input id="description_spanish" class="block mt-1 w-full" type="text"
                            name="description_spanish" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="description_english" value="{{ __('Descripcion Ingles') }}" />
                        <x-input id="description_english" class="block mt-1 w-full" type="text"
                            name="description_english" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="barcode" value="{{ __('Codigo Barra') }}" />
                        <x-input id="barcode" class="block mt-1 w-full" type="text" name="barcode" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="category_id" value="{{ __('Categoria') }}" />
                        <select id="category_id"
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                            name="category_id" required>
                            <option value="">Seleccione</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_spanish }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button class="ms-4 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-md">
                            {{ __('Cancelar') }}
                        </button>
                        <button class="ms-4 bg-blue-700 hover:bg-blue-800 text-gray-200 font-bold py-2 px-4 rounded-md"
                            onclick="save(event)">
                            {{ __('Guardar') }}
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function save(event) {

        event.preventDefault();
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const code = document.getElementById('code').value
        const name_spanish = document.getElementById('name_spanish').value
        const name_english = document.getElementById('name_english').value
        const description_spanish = document.getElementById('description_spanish').value
        const description_english = document.getElementById('description_english').value
        const barcode = document.getElementById('barcode').value
        const category_id = document.getElementById('category_id').value

        axios.post("{{ route('products.store') }}", {
                _token: token,
                code: code,
                name_spanish: name_spanish,
                name_english: name_english,
                description_spanish: description_spanish,
                description_english: description_english,
                barcode: barcode,
                category_id: category_id
            })
            .then(function(response) {
                console.log(response);
                alert('Guardado');
                window.location.href = "{{ route('products.index') }}";
            })
            .catch(function(error) {
                console.log(error);
            });

    }
</script>
