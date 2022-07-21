<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-bold">
                {{ $note->title }}
            </h2>
            <h2 class="font-light text-md">
                Last Updated: <span class="font-semibold">{{ Date::parse($note->updated_at)->diffForHumans() }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="flex flex-col p-10 gap-5">
        <div class="rounded-xl py-5 px-8 shadow-lg bg-white">
            {{ $note->text }}
        </div>
        <div class="flex justify-end gap-2">
            <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class="text-lg text-white px-6 py-2 rounded-xl bg-red-600 hover:cursor-pointer"/>
            </form>
            <a class="text-lg text-white px-6 py-2 rounded-xl bg-yellow-600 hover:cursor-pointer" href="{{ route('notes.edit', $note->id) }}">Edit</a>
        </div>
    </div>
</x-app-layout>