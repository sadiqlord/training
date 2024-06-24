<x-layout>
    <x-slot:heading>
        Job Detail Page
    </x-slot:heading>
    <div>
      <p> Job Title:<strong>{{$job->title}}</strong></p>
       Job Salary: {{$job->salary}}
    </div>
   
</x-layout>