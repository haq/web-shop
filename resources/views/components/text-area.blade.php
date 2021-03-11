@props(['disabled' => false, 'id', 'errors'])

@if ($errors->has($id))
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control is-invalid']) !!}></textarea>
@else
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!}></textarea>
@endif
