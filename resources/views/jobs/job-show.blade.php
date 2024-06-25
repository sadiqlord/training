<x-layout>
    <x-slot:heading>
        Job Detail Page
    </x-slot:heading>
    <div>
      <p> Job Title:<strong>{{$job->title}}</strong></p>
       Job Salary: {{$job->salary}}
    </div>
    <div class="pt-3">
      <a href="/jobs/{{$job->id}}/edit" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">edit job</a>
    </div>
</x-layout>