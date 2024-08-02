<x-form
    method="{{ $method }}"
    action="{{ $action }}"
>
    <button
        type="submit"
        class="{{ $attributes }}"
    >
        {{ $slot }}
    </button>
</x-form>
