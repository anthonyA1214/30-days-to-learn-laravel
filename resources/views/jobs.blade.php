<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="text-white space-y-5">
        @foreach ($jobs as $job)
        <a href="jobs/{{ $job['id'] }}" class="bg-gray-800 block p-5 rounded-lg border border-gray-700 hover:bg-gray-700 transition">    
            <div>
                <p class="text-blue-500 font-bold">{{ $job->employer->name }}</p>
            </div>
            <div>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.   
            </div>
        </a>
        @endforeach
    </div>
    
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>