<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="post" action="{{ route('products.update',$product->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $product->name }}" required autofocus autocomplete="product_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" value="{{ $product->price }}" required autocomplete="price" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>

                        <div>
                            <x-input-label for="weight" :value="__('Weight')" />
                            <x-text-input id="weight" name="weight" type="text" class="mt-1 block w-full" value="{{ $product->weight }}" autocomplete="weight" />
                            <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                        </div>
                        

                        <div>
                            <x-input-label for="quantity" :value="__('Quantity')" />
                            <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full" value="{{ $product->quantity }}" required autocomplete="quantity" />
                            <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                        </div>
                
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                @foreach($status as $v)
                                    <option value="{{ $v }}" @if($v == $product->status) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>