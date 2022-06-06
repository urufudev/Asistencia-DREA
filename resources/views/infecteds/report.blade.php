<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Personal Infectado</title>
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
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col-10" colspan="12">   
                    <p class="text-center" style="font-size:14px;margin-bottom: 0px;margin-top:0px;">
                        Lista de Personal Infectado
                    </p> 
                </th>
              </tr>
        </thead>
    </table>
    @foreach ($userinfecteds as $office => $userinfected)
    <table class="table table-bordered table-sm"  style=" font-size:10px;">
        <thead >
            
              <tr class="thead-light">
              
              <th scope="col" colspan="12">OFICINA: {{$office}}</th>
              
            </tr>
        </thead>
        <thead class="thead-light">
            <tr>
              <th scope="col" width="2%" class="text-center">#</th>
              <th scope="col" width="5%" class="text-center">DNI</th>
              <th scope="col">APELLIDOS Y NOMBRES</th>
              <th scope="col" >CARGO</th>
              <th scope="col"  width="7%" >CELULAR</th>
              
              <th scope="col" width="7%" >FECHA DE DIAGNÓSTICO</th>
              <th scope="col" width="7%" >ENTIDAD DE DIAGNÓSTICO</th>
              <th scope="col" width="7%">N° DOCUMENTO</th>
              <th scope="col" width="7%" class="text-center">INICIO</th>  
              <th scope="col" width="7%" class="text-center">TERMINO</th>  


              <th scope="col" width="7%" >ENTIDAD DE ALTA</th>
              <th scope="col" width="7%" class="text-center">FECHA DE ALTA</th>
            </tr>
          </thead>
        <tbody>
            @foreach ($userinfected as $item)
                <tr>
                    <th @if ($item->userinfecteds->count() >= 1) rowspan="{{$item->userinfecteds->count() +1}}" @else rowspan="1" @endif scope="row" class="text-center" style="vertical-align: middle;">{{ $loop->iteration }}</th>
                    <td @if ($item->userinfecteds->count() >= 1) rowspan="{{$item->userinfecteds->count() +1}}" @else rowspan="1" @endif class="text-center" style="vertical-align: middle;">{{$item->user->dni}}</td>
                    <td @if ($item->userinfecteds->count() >= 1) rowspan="{{$item->userinfecteds->count() +1}}" @else rowspan="1" @endif style="vertical-align: middle;">{{$item->user->full_name}}</td>
                    <td @if ($item->userinfecteds->count() >= 1) rowspan="{{$item->userinfecteds->count() +1}}" @else rowspan="1" @endif style="vertical-align: middle;">{{$item->user->profile->position->name ?? 'ANALISTA EN SISTEMAS Y TECNOLOGÍAS DE LA INFORMACIÓN'}}</td>
                    <td @if ($item->userinfecteds->count() >= 1) rowspan="{{$item->userinfecteds->count() +1}}" @else rowspan="1" @endif class="text-center" style="vertical-align: middle;"> {{$item->user->profile->phone ?? ''}}</td>
                    
                    <th  colspan="7"> Detalles:</th>
                    
                    
                      
                    
                </tr>
                @foreach ($item->userinfecteds as $i)
                    
                    <tr>
                    <td class="text-center"> {{$i->diagnosis_date_formated ?? ''}}</td>
                    <td class="text-center"> {{$i->diagnosis_entity ?? ''}}</td>
                    <td class="text-center"> {{$i->break_number ?? ''}}</td>
                    <td class="text-center"> {{$i->break_start_formated ?? ''}}</td>
                    <td class="text-center"> {{$i->break_end_formated ?? ''}}</td>
                    <td class="text-center"> {{$i->high_entity ?? ''}}</td>
                    <td class="text-center"> {{$i->high_date_formated ?? ''}}</td>
                    
                    </tr>
                    @endforeach
               
                     
                    
                    
                    
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