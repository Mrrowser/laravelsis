<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>

        <x-layout>
            
            @include('partials._search')

            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

                @if(count($students) == 0)
                <p>No students found</p>
                @endif 
                
                @foreach($students as $student)
                
                <x-student-card :student="$student" />

                @endforeach

            </div>

        </x-layout>
    </x-slot>
</x-app-layout>

