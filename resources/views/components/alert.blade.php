<div {{ $attributes->merge(['class' => 'mb-4 px-3 py-2 rounded-xl ' . $type]) }}>
  {!! $message ?? $slot !!}
</div>
