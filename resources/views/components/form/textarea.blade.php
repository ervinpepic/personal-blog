@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea name="{{ $name }}" id="{{ $name }}" class="border border-gray-400 p-2 w-full"
        placeholder="Your {{ $name }} here" required>{{ old($name) }}</textarea>
    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>
