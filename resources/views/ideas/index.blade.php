<x-layout>

    @if(count($ideas))
        <div class="mt-6 text-black">
            <h2>Your Ideas</h2>
            <ul class="mt-6">
                @foreach($ideas as $idea)
                    <li>
                        <a href="/ideas/{{$idea->id}}" class="text-sm">{{ $idea->description }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <p class="text-black text-sm underline">You have no ideas. Click to Create</p>
    @endif
</x-layout>

