<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Create a new note</h3>
                    <form action="{{ route('store') }}" method="post" novalidate>
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label for="title" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Title
                                </label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label for="content" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Content
                                </label>
                                <textarea id="content" name="content" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" rows="5">{{ old('content') }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            Create Note
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
