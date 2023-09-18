<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex gap-10">
                <div class="w-full sm:w-1/2 p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <form method="post" action="{{ route('products.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('post')
                
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="product_name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
    
                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price')" required autocomplete="price" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>
    
                        <div>
                            <x-input-label for="weight" :value="__('Weight')" />
                            <x-text-input id="weight" name="weight" type="text" class="mt-1 block w-full" :value="old('weight')" autocomplete="weight" />
                            <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                        </div>
                        
    
                        <div>
                            <x-input-label for="quantity" :value="__('Quantity')" />
                            <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full" :value="old('quantity')" required autocomplete="quantity" />
                            <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                        </div>
                
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                <option value="active">Active</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-1/2">
                    <h3 class="text-2xl font-bold text-center text-gray-600">Take survey now</h3>
                    <div id="surveyForm"></div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/survey.js')
</x-app-layout>