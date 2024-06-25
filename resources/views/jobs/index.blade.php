<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>Open jobs</h1>
    <div>
        @foreach ($jobs as $job )
        <a href="/jobs/{{$job->id}}" class="block px-4 py-6 bg-gray-300 rounded-lg m-3">
            <div class="text-blue-400">
                {{$job->employer->name}}
            </div>
            <strong>{{$job->title}}:</strong>{{$job->salary}}
        </a>
        @endforeach
    </div>
   <div>{{$jobs->links()}}</div>
</x-layout>