<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form action="/register" method="POST">
        @csrf
        
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <!-- First Name -->
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="first_name" type="text" name="first_name" required/>
                            <x-form-error name="first_name"/>
                        </div>

                        <!-- Last Name -->
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="last_name" type="text" name="last_name" required/>
                            <x-form-error name="last_name" />
                        </div>

                        <!-- Email-->
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" type="email" name="email" required/>
                            <x-form-error name="email" />
                        </div>

                        <!-- Password -->
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" type="password" name="password" required/>
                            
                        </div>

                         <!-- Confirm Password -->
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" type="password" name="password_confirmation" required/>
                            <x-form-error name="password" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <div class="flex gap-x-6 items-center">
                <x-form-button>Register</x-form-button>
            </div>
        </div>
    </form>
</x-layout>