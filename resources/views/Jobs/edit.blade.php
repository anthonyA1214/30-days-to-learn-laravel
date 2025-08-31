<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form action="/jobs/{{ $job->id }}" method="POST">
        @csrf
        @method('PATCH')
        
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <!-- Job Title -->
                        <label for="title" class="block text-sm/6 font-medium text-white">Job Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input value="{{ $job->title }}" id="title" type="text" name="title" placeholder="e.g. Software Engineer" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                            @error('title')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Job Salary -->
                        <label for="salary" class="block text-sm/6 font-medium text-white mt-2">Job Salary</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input value="{{ $job->salary }}" id="salary" type="text" name="salary" placeholder="50000" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                            @error('salary')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 cursor-pointer">Delete</button>
            </div>
            <div class="flex gap-x-6 items-center">
                <a href="/jobs/{{ $job->id }}" type="button" class="text-sm/6 font-semibold text-white">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 cursor-pointer">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>