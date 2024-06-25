<x-layout>
    <x-slot:heading>
        Job creation Page
    </x-slot:heading>
    <div>
      job creation
    </div>
    <form method="POST" action="/jobs" >
        @csrf
        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">create job</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">fill expected details of a job.</p>
    
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
                <x-form-label for='title'>Title</x-form-label>
                <div class="mt-2">
                <x-form-input
                  type="text" 
                  name="title" 
                  id="title" 
                  autocomplete="title"
                  placeholder="CEO" >
                </x-form-input>
                </div>
               <x-form-error name="title"></x-form-error>
            </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form-label for='title'>Salary</x-form-label>
                <div class="mt-2">
                  <x-form-input
                  type="text" 
                  name="salary" 
                  id="salary" 
                  placeholder="50000" >
                </x-form-input>
                </div>
                @error('salary')
                  <p class="text-red-500 ">{{$message}}</p>
                @enderror
                </div>
            </div>
        </div>  
        <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
  
</x-layout>