<x-admin-layout>

    <div class="bg-gray-200 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                UPDATE!
            </h2>
        </header>
    
        <form method="POST" action="/admins/{{$admin->id}}">
            @csrf

            @method('PUT')
            <div class="mb-2">
                <label
                    for="fname"
                    class="inline-block text-lg mb-2"
                    >First Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="fname"
                    placeholder="First Name"
                    value="{{$admin->fname}}"
                />
    
                @error('fname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label for="lname" class="inline-block text-lg mb-2"
                    >Last Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="lname"
                    placeholder="Last Name"
                    value="{{$admin->lname}}"
                />
                @error('lname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label
                    for="gender"
                    class="inline-block text-lg mb-2"
                    >Gender</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="gender"
                    placeholder="Gender"
                    value="{{$admin->gender}}"
                />
                @error('gender')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label for="status" class="inline-block text-lg mb-2"
                    >Status</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="status"
                    placeholder="Status"
                    value="{{$admin->status}}"
                />
                @error('status')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label
                    for="nationality"
                    class="inline-block text-lg mb-2"
                >
                    Nationality
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="nationality"
                    placeholder="Nationality"
                    value="{{$admin->nationality}}"
                />
                @error('nationality')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <label for="religion" class="inline-block text-lg mb-2">
                    Religion
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="religion"
                    placeholder="Religion"
                    value="{{$admin->religion}}"
                />
                @error('religion')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-2">
                <button
                    class="bg-gray-500 text-white rounded py-2 px-4 hover:bg-gray-900"
                >
                    Update
                </button>
    
                <a href="/home" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</x-admin-layout>