@forelse ($users as $office => $chunk)
                <div class="card lg:w-50 xl:w-50 md:w-50">

                    <div class="card-header  align-center">

                        <h3>{{ $office }} {{$month.'/'.$year}}</h3>

                    </div>


                    <div class="card-body text-uppercase">
                        <table class="table table-sm table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th {{-- style="width: 85px" --}}><b>Trabajadores/Fechas</b></th>
                                    <td><b>Condición</b></td>
                                    @for ($i = 1; $i <= $daysInMonth; $i++)
                                        <th {{-- style="width: 5px" --}}> <b>{{ $i }}</b> </th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chunk as $userp)
                                    <tr>
                                        <td>{{ $userp->user->full_name }}</td>
                                        <td>{{ $userp->user->profile->condition->name }}</td>
                                        @for ($i = 1; $i <= $daysInMonth; $i++)
                                            <td {{-- style="width: 5px" --}}>
                                                @php
                                                $day = now()->setYear($year)->setMonth($month)->setDay($i)->format('Y-m-d')
                                                @endphp
                                                
                                                {{ isset($presencialworks[$userp->user->id][$day]) ? '1' : '0' }}
                                                
                                            </td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                
            @empty
            Sin resultados
            @endforelse