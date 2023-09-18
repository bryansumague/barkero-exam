<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold bg-slate-200 px-3 py-2">User Details</h1>
                    <div class="flex flex-col divide-y px-5">
                        <div class="flex gap-4 py-3">
                            <div class="min-w-[100px] text-right">Fullname:</div>
                            <div>{{ $user->name }}</div>
                        </div>
                        <div class="flex gap-4 py-3">
                            <div class="min-w-[100px] text-right">Phone:</div>
                            <div>{{ $user->phone }}</div>
                        </div>
                        <div class="flex gap-4 py-3">
                            <div class="min-w-[100px] text-right">Email:</div>
                            <div>{{ $user->email }}</div>
                        </div>
                        <div class="flex gap-4 py-3">
                            <div class="min-w-[100px] text-right">Address:</div>
                            <div>{{ $user->address }}</div>
                        </div>
                        <div class="flex gap-4 py-3">
                            <div class="min-w-[100px] text-right">Company:</div>
                            <div>{{ $user->company }}</div>
                        </div>
                        <div class="flex gap-4 py-3">
                            <div class="min-w-[100px] text-right">Job Role:</div>
                            <div>{{ $user->role->name; }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
