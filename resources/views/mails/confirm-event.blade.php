@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }} 🖥
        @endcomponent
    @endslot

    {{-- Body --}}
    <h1>¡Hola! {{ $user->name }} 👋</h1>
    <p>Se confirma su registro en la fecha y turno:</p>
    <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td align="center">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td>
                                        <div style="border:1px dashed #0062cd;padding:15px;color:#999;font-size:12px">
                                            <strong style="box-sizing:border-box;color:#0062cd">FECHA Y TURNO: </strong>
                                            <h2 style="text-transform:uppercase">{{ $event->date->isoFormat('dddd') }} |
                                                {{ $event->name }}</h2>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td>
                No responda este correo, para cualquier modificación puede realizarlo desde su <a
                    href="{{ route('presencials.index') }}">plataforma</a> o solicite asistencia en el Área de Personal.
                <br>
                <a href="{{ route('presencials.index') }}">{{ route('presencials.index') }}</a>
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
