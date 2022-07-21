<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">New Note</h2>
    </x-slot>

    <div class="w-screen flex justify-center items-center">
        <form class="relative w-96 mt-10 flex flex-col rounded-2xl shadow-xl bg-white overflow-hidden" action="{{ route('notes.store') }}" method="POST">
            @csrf
            <div class="m-6">
                <div>
                    <div class="flex justify-between">
                        <label class="opacity-80 @error('title') text-red-600 @enderror" for="note-title">Title :</label>
                        @error('title')
                            <p class="text-red-600 text-sm">The title is required</p>
                        @enderror
                    </div>
                    <input class="border-none focus:ring-0" type="text" name="title" id="note-title" value="{{ old('title') }}">
                </div>
                <hr class="mb-3">
                <div>
                    <div class="flex justify-between">
                        <label class="opacity-80 @error('text') text-red-600 @enderror" for="note-text">Text :</label>
                        @error('text')
                            <p class="text-red-600 text-sm">The content is required</p>
                        @enderror
                    </div>
                    <textarea class="w-full resize-none border-none focus:ring-0" name="text" id="note-text" cols="30" rows="7">{{ old('text') }}</textarea>
                </div>
            </div>
            <input class="hover:cursor-pointer text-lg inset-x-0 bottom-0 bg-green-600 text-white py-3" type="submit" value="Create">
        </form>
    </div>
</x-app-layout>