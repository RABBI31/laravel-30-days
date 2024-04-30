<x-layout heading="Job Listing">
    <ul>
        @foreach($jobs as $job)
        <li>
            <a href="{{url('jobs/'.$job['id'])}}"> 
            <strong>{{ $job['title']}}: </strong> {{ $job['salary']}} yearly
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>