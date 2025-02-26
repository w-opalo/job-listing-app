<x-layout>
    @forelse ($opalo as $job)
    <ul>
     <li>{{$job}}</li>    
    </ul>   
    @empty
    <ul>
        <li>No Jobs availabale</li>    
    </ul> 
    @endforelse
</x-layout>