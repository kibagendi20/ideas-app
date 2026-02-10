<x-layout title="IDEA">

    @if(count($ideas))
        <div class="mt-6 text-white">
            <h2>Your Ideas</h2>
            <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach($ideas as $idea)
                    <x-idea.card href="/ideas/{{$idea -> id}}">
                        {{ $idea->description }}
                    </x-idea.card>
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet.</p>
    @endif
        <p class="text-white text-sm underline mt-6"><a href="/ideas/create">Click to Create</a></p>

</x-layout>

