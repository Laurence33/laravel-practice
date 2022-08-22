@props(['active' => false])

@php
$classes = 'block text-left px-3 text-xs leading-6 hover:bg-blue-500 focus:bg-blue-500 focus:text-white hover:text-white';

if ($active) {
    $classes .= ' bg-blue-500 text-white';
}
@endphp
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>