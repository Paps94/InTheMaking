@extends('layouts.app')

<!--Bootstrap css-->
<link rel="stylesheet" href="/css/bootstrap.min.css">

@section('content')

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            You got a new email from your website!
        @endcomponent
    @endslot

{{-- Body --}}
    Was sent by:  {{ $name }}
    From :        {{ $email }}
    Subject:      {{ $subject }}
    _______________________________________________

    {{ $bodyMessage }}

{{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent

@endsection
