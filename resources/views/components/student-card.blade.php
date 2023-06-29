@props(['student'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/default.png"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <p>
                    {{ $student->fname}}, {{ $student->lname}}
                </p>
            </h3>
            
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-gray-500 text-white rounded-xl py-2 px-3 mr-2 text-xs"
                >
                    <a>{{ $student->gender}}</a>
                </li>
                <li
                    class="flex items-center justify-center bg-gray-500 text-white rounded-xl py-2 px-3 mr-2 text-xs"
                >
                    <a>{{ $student->status}}</a>
                </li>
                
            </ul>
            <div class="text-lg mt-4">
                <p>{{ $student->nationality}}</p>
            </div>
        </div>
    </div>
</x-card>