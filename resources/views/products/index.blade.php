<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <x-slot name="headerActions">
        <x-button-link href="{{ route('products.create') }}" class="btn-primary">Create New Product</x-button-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            
                <table class="table-auto w-full">
                    <thead class="bg-slate-200">
                        <tr>
                            <th class="py-3 pr-5">ID</th>
                            <th class="py-3 text-left">Name</th>
                            <th class="py-3">Price</th>
                            <th class="py-3">Weight</th>
                            <th class="py-3">Quantity</th>
                            <th class="py-3">Status</th>
                            <th  class="py-3 w-[280px]">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="py-3 pr-5 text-center">{{ $product->id }}</td>
                            <td class="py-3">{{ $product->name }}</td>
                            <td class="py-3 text-center">{{ $product->price }}</td>
                            <td class="py-3 text-center">{{ $product->weight }}</td>
                            <td class="py-3 text-center">{{ $product->quantity }}</td>
                            <td class="py-3 text-center">{{ $product->status }}</td>
                            <td class="text-center">
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    <div class="flex w-full justify-center gap-3">
                                        <a class="btn btn-secondary btn-sm" href="{{ route('products.edit',$product->id) }}">Edit</a>
                
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button class="btn-sm">Delete</x-danger-button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
                {!! $products->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>


