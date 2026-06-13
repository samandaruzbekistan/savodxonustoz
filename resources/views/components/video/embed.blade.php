@props(['video'])

<div {{ $attributes->merge(['class' => 'relative aspect-video w-full overflow-hidden rounded-2xl bg-black']) }}>
    <iframe
        src="{{ $video->embed_url }}"
        title="{{ $video->title }}"
        loading="lazy"
        class="absolute inset-0 h-full w-full"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
    ></iframe>
</div>
