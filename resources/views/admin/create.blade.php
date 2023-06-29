<x-admin-layout>

    <div class="bg-gray-200 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                ANNOUNCEMENT!
            </h2>
            <p class="mb-4">Post a Announcement</p>
        </header>
    
        <form method="POST" action="/admins">
            @csrf
            <div class="mb-2">
                <label
                    for="what"
                    class="inline-block text-lg mb-2"
                    >What?</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="what"
                    placeholder="What?"
                    value="{{old('what')}}"
                />
    
                @error('what')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label for="where" class="inline-block text-lg mb-2"
                    >Where?</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="where"
                    placeholder="Where?"
                    value="{{old('where')}}"
                />
                @error('where')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label
                    for="whenn"
                    class="inline-block text-lg mb-2"
                    >When?</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="whenn"
                    placeholder="When?"
                    value="{{old('whenn')}}"
                />
                @error('whenn')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label for="message" class="inline-block text-lg mb-2"
                    >Message</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="message"
                    placeholder="When?"
                    value="{{old('message')}}"
                />
                @error('message')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <button
                    class="bg-gray-500 text-white rounded py-2 px-4 hover:bg-gray-900"
                >
                    Submit
                </button>
    
                <a href="/home" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</x-admin-layout>