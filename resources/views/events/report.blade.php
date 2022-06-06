<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Trabajo Presencial - {{$event->date->format('d/m/Y')}}</title>
    <style>
        @page {
            margin-top: 0cm;
            margin-bottom: 1cm;
        }
        
            header {
                position: fixed;
               
            }
        .page-break {
                page-break-after: always;
            }
            table {
                page-break-inside: avoid !important;
            }
    </style>
    <link href="{{asset('/css/eventpdfy.css')}}" rel="stylesheet"> 
</head>
<body style="margin-top:2.7cm;">    
<header>
    <div class="mt-2">
        <p class="text-center">
        <img class="text-center" src ="{{asset('/images/drea/header_l2.jpg')}}" height="85px">
        </p>    
    </div>
</header>
    @foreach ($eventdetails as $office => $eventdetail)
    <table class="table table-bordered table-sm"  style=" font-size:10px;">
        <thead >
          <tr>
            <th scope="col-10" colspan="7">   
                <p class="text-center" style="font-size:12px;margin-bottom: 0px;margin-top:0px;">
                    {{$event->name .' '. $event->date->format('d/m/Y')}}
                </p> 
            </th>
          </tr>
            <tr class="thead-light">
            <th scope="col" colspan="5">OFICINA: {{$eventdetail->first()->office->name}}</th>
            <th scope="col" colspan="2" class="text-center">TEMPERATURA</th>
          </tr>
        </thead>
        <thead class="thead-light">
            <tr>
              <th scope="col" width="3%" class="text-center">#</th>
              <th scope="col" width="5%" class="text-center">DNI</th>
              <th scope="col" >APELLIDOS Y NOMBRES</th>
              <th scope="col"   >CARGO</th>
              <th scope="col"  width="7%" >CELULAR</th>
              <th scope="col" width="7%" class="text-center">ENTRADA</th>
              <th scope="col" width="7%" class="text-center">SALIDA</th>
            </tr>
          </thead>
        <tbody>
            @foreach ($eventdetail as $item)
                <tr>
                    <th scope="row" class="text-center" style="vertical-align: middle;">{{ $loop->iteration }}</th>
                    <td class="text-center" style="vertical-align: middle;">{{$item->user->dni}}</td>
                    <td style="vertical-align: middle;">{{$item->user->full_name}}</td>
                    <td style="vertical-align: middle;">{{$item->user->profile->position->name ?? 'ANALISTA EN SISTEMAS Y TECNOLOGÍAS DE LA INFORMACIÓN'}}</td>
                    <td class="text-center"> {{$item->user->profile->phone ?? ''}}</td>
                    <td></td>
                    <td></td>
                    </tr>
            @endforeach
        </tbody>
      </table>{{-- <div class="page-break"></div> --}}<div style="page-break-after:auto;">@endforeach<script type="text/php">
        if (isset($pdf)) {
            $x = 10;
            $y = 580;
            $text = "Página {PAGE_NUM} de {PAGE_COUNT}";
            $font = null;
            $size = 10;
            $color = array(0,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        }
    </script></body></html>