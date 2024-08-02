<x-layout>

    <x-flash type="success">
        You are logged out!
    </x-flash>

    <x-flash class="mt-10">
        Great job!
    </x-flash>

    <x-form-button
        method="DELETE"
        action="/comments"
        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
    >
        Delete
    </x-form-button>

</x-layout>
