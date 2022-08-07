<x-Master.frontapp>

    <x-slot name="title">
        Home Page
    </x-slot>
    <x-home.Hero/>
    <x-home.Featured/>
    <x-home.Categories/>
    <x-home.Offer/>
{{--    <x-home.Products/>--}}
    @include('components.home.products')
    <x-home.Products2/>
    <x-home.Subscribe/>
    <x-home.Vendor/>

</x-Master.frontapp>
