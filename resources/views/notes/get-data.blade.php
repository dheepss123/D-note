<x-app-layout>
    @include("layouts.navigation")
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg text-black font-bold mb-4">Your Notes</h3>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="text-lg font-bold mb-4">Your Notes</h3>
                            @if ($notes->isEmpty())
                                <p class="text-gray-600">No notes yet.</p>
                            @else
                                <ul class="divide-y divide-gray-200">
                                    @foreach ($notes as $note)
                                        <li class="py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">{{ $note->title }}</p>
                                                    <p class="text-sm font-medium text-gray-900 truncate">
                                                        {{ $note->created_at->format('d F Y') }}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate">{{ Str::limit($note->content, 100) }}</p>
                                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                        <a href="{{ route('notes.edit', $note->id) }}" class="text-orange-500 hover:text-orange-700">Edit</a>
                                                        <form action="{{ route('notes.destroy', $note->id) }}" method="post" class="ml-4">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
