<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <x-forms.form method="POST" action="/register">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mb-10 grid grid-cols-1 gap-x-6 gap-y-8">
                    <x-forms.input label="First Name" name="firstName" />

                    <x-forms.input label="Last Name" name="lastName" />

                    <x-forms.input label="Phone Number" name="phone" type="tel" />

                    <x-forms.input label="Email" name="email" type="email"/>
                        
                    <x-forms.input label="Password" name="password" type="password"/>
                
                    <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-forms.button>Register</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>