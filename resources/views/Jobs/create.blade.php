<x-layout>
    <x-slot:heading>
        Create Job Page
    </x-slot:heading>

    <form action="/jobs" method="post">
        @csrf
        
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-400">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <!-- Job Title -->
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" type="text" name="title" placeholder="e.g. Software Engineer" required/>
                            <x-form-error name="title"/>
                        </div>

                        <!-- Job Salary -->
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" type="text" name="salary" placeholder="50000" required/>
                            <x-form-error name="salary" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>
</x-layout>