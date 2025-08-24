<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <p class="text-white text-lg font-bold">{{ $job['title'] }}</p>
    <p class="text-white">This job pays {{ $job['salary'] }} per year.</p>

</x-layout>