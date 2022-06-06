@component('mail::layout')
    {{-- Header --}}
@slot('header')
    @component('mail::header', ['url' => config('app.url')])
        <p>FELÍZ CUMPLEAÑOS {{ $user->name }} 🥳🎉🍻</p>
    @endcomponent
@endslot

{{-- Body --}}
<h1>¡Hola! {{ $user->name }} 👋</h1>
<img src="{{ asset('images/drea/birthday/birthday.png') }}" height="400px" alt="" style="display: block;
margin-left: auto;
margin-right: auto;">
<p>{{ Arr::random($message) }}</p>

<table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td>
    <p>🥳🥳🎉🎂🍰🎁🍾🍻🍻</p>
</td>
</tr>
</table>


{{-- Subcopy --}}
@isset($subcopy)
    @slot('subcopy')
        @component('mail::subcopy')
            <h2>Prueba xdd</h2>
        @endcomponent
    @endslot
@endisset

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
    @endcomponent
@endslot
@endcomponent
