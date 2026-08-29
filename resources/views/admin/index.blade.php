<x-layout>
    <x-slot:title>Admin - Black & White</x-slot:title>

    <div class="page">
        <h1>Admin Area</h1>
        <p>You can see this page because the <strong>view-admin</strong> gate allowed your account.</p>
        <p>Your role is: <strong>{{ auth()->user()->role }}</strong></p>
    </div>
</x-layout>
