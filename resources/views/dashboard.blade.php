<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Manage Data</h3>
                    <ul>
                        <li><a href="{{ route('sanitation-facilities.index') }}">Sanitation Facilities</a></li>
                        <li><a href="{{ route('water-sources.index') }}">Water Sources</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
