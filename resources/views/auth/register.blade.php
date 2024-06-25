<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>
    
    <form method="POST" action="/register" >
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <x-form-label for='full_name'>Full Name</x-form-label>
                <div class="mt-2">
                <x-form-input
                  type="text" 
                  name="name" 
                  id="full_name" 
                  autocomplete="full_name"
                  placeholder="Your full name">
                </x-form-input>
                </div>
               <x-form-error name="full_name"></x-form-error>
            </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form-label for='email'>Email</x-form-label>
                <div class="mt-2">
                  <x-form-input
                  type="email" 
                  name="email" 
                  id="email" 
                  placeholder="test@test.com" >
                </x-form-input>
                </div>
                @error('email')
                  <p class="text-red-500 ">{{$message}}</p>
                @enderror
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form-label for='password'>Password</x-form-label>
                <div class="mt-2">
                  <x-form-input
                  type="password" 
                  name="password" 
                  id="password" 
                  placeholder="*******" >
                </x-form-input>
                </div>
                @error('password')
                  <p class="text-red-500 ">{{$message}}</p>
                @enderror
                </div>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form-label for='password_confirmation'>Confirm Password</x-form-label>
                <div class="mt-2">
                  <x-form-input
                  type="password" 
                  name="password_confirmation" 
                  id="password_confirmation" 
                  placeholder="*******" >
                </x-form-input>
                </div>
                @error('password_confirmation')
                  <p class="text-red-500 ">{{$message}}</p>
                @enderror
                </div>
            </div>

        </div>  
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
  
</x-layout>