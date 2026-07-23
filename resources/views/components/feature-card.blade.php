@props(['title', 'description'])
<div class="feature-card">
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
    {{ $slot }}
</div>
