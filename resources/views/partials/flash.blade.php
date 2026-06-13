@foreach (['success' => 'success', 'error' => 'error', 'info' => 'info', 'warning' => 'warning'] as $key => $type)
    @if (session($key))
        <x-alert type="{{ $type }}" class="mb-4">{{ session($key) }}</x-alert>
    @endif
@endforeach
