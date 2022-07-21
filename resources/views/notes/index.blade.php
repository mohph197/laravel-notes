<x-app-layout>
    <x-slot name='header'>
        <h2 class="text-xl font-bold">Notes</h2>
    </x-slot>
    <div class="flex flex-col justify-center items-stretch gap-3 w-full py-5 px-40">
        <div class="flex justify-end gap-5">
            <a class="text-lg text-white px-6 py-2 rounded-xl bg-green-600 hover:cursor-pointer" href="{{ route('notes.create') }}">New</a>
        </div>
    
        <div class="grid grid-cols-3 gap-4">
            @foreach ($notes as $note)
                <a class="bg-white shadow-md rounded-xl p-6" href="{{ route('notes.show', $note->id) }}">
                    <h3 class="text-lg font-bold">{{ $note->title }}</h3>
                    <p>{{ $note->text }}</p>
                    <p class="text-xs mt-3">{{ Date::parse($note->updated_at)->diffForHumans() }}</p>
                </a>
            @endforeach
        </div>
        {{ $notes->links() }}
    </div>
</x-app-layout>