@props(['name', 'type' => 'text'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        class="border border-gray-400 p-2 w-full" placeholder="Your {{ $name }} here" required
        value="{{ old($name) }}">
    <x-form.error name="{{ $name }}"> </x-form.error>
</x-form.field>
