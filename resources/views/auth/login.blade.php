<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form action="/login" method="POST">
        @csrf
        
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <!-- Email-->
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" type="email" name="email" :value="old('email')" required/>
                            <x-form-error name="email" />
                        </div>

                        <!-- Password -->
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" type="password" name="password" required/>
                            <x-form-error name="password" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <div class="flex gap-x-6 items-center">
                <x-form-button>Log In</x-form-button>
            </div>
        </div>
    </form>
</x-layout>