@if ($type === 'error')
    <div class="border border-red-500 bg-red-100 rounded-lg p-4">
    <h1 class="text-lg text-red-500 font -bold">Error</h1>
    <p class="text-red-500">{{ $slot }}</p>
</div>
@elseif ($type === 'success')
    <div class="border border-green-500 bg-green-100 rounded-lg p-4">
    <h1 class="text-lg text-green-500 font -bold">Success</h1>
    <p class="text-green-500">{{ $slot }}</p>
</div>

@else
    <div class="border border-gray-500 bg-gray-100 rounded-lg p-4">
    <h1 class="text-lg text-gray-500 font -bold">Info</h1>
    <p class="text-gray-500">{{ $slot }}</p>
</div>
@endif
