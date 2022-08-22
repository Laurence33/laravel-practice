@props(['trigger', 'end'])
<div x-data="{ show: false }" class="w-full">
    <div @click.away="show = false" x-on:click="show = !show">
        {{ $trigger }}
    </div>
    <div x-show="show" class=" py-2 absolute z-50 bg-gray-100 w-full mt-2 rounded-xl overflow-auto max-h-52"
        style="display: none">
        {{ $slot }}
    </div>
</div>
{{ $end }}
