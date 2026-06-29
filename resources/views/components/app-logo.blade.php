@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="Laravel Starter Kit" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md ">
            <img src={{ asset('images/logo.png') }}>
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Laravel Starter Kit" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md ">
            <img src={{ asset('images/logo.png') }}>
        </x-slot>
    </flux:brand>
@endif
