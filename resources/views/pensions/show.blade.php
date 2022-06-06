@extends('layouts.contentLayoutMaster')

@section('title', 'Régimen Pensionario')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/swiper.min.css') }}">
@endsection
{{-- page-styles --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-user-profile.css') }}">
@endsection

@section('actionbutton')
    <a href="{{ route('pensions.index') }}" class="btn btn-secondary">
        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px"
            height="24px">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
        </svg>
        <span class="align-middle ml-25 text-bold-600 white">Volver</span>
    </a>
@endsection

@section('content')
    <!-- page user profile start -->
    <section class="page-user-profile">
        <div class="row">
            <div class="col-12">
                <!-- user profile heading section start -->
                <div class="card">

                    <div class="user-profile-images">
                        <!-- user timeline image -->
                        <img src="{{ asset('images/profile/profile-banner.jpg') }}"
                            class="img-fluid rounded-top user-timeline-image" alt="user timeline image">
                        <!-- user profile image -->
                        <img src="{{ asset('images/drea/logo_admin.png') }}" style="background-color:#0D8ABC; "
                            class="user-profile-image rounded " alt="user profile image" height="140" width="140">
                    </div>
                    <div class="user-profile-text">
                        <h4 class="mb-0 text-bold-500 profile-text-color">{{ $pension->name }}</h4>
                        <small>{{ $pension->description }}</small>

                    </div>
                    <!-- user profile nav tabs start -->


                    <div class="card-body px-0">
                        <ul class="nav user-profile-nav justify-content-center justify-content-md-start nav-pills border-bottom-0 mb-0"
                            role="tablist">
                            <li class="nav-item mb-0">
                                <a class=" nav-link d-flex px-1 active" id="profile-tab" data-toggle="tab" href="#profile"
                                    aria-controls="friends" role="tab" aria-selected="false"><i
                                        class="bx bx-group"></i><span class="d-none d-md-block"> Trabajadores</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- user profile nav tabs ends -->

                </div>
                <!-- user profile heading section ends -->

                <!-- user profile content section start -->
                <div class="container">
                    <div class="row">
                        <!-- user profile nav tabs content start -->
                        <div class="col-lg-12">
                            <div class="tab-content">


                                <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                    <!-- user profile nav tabs friends start -->
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <h5>Trabajadores del Régimen de Pensiones: {{ $pension->name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        @forelse($users as $office => $chunk)
                                            <div class="col-6">

                                                <div class="card">

                                                    <div class="card-header">
                                                        <h4 class="card-title">{{ $office }}</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($chunk as $userp)
                                                            <li class="media my-50">
                                                                <a href="JavaScript:void(0);">
                                                                    <div class="avatar mr-1">
                                                                        <img src="{{ $userp->profile->photo ?? 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=Sin+Foto' }}"
                                                                            alt="avtar images" width="32" height="32">
                                                                        @if ($userp->profile->vaccine == 'NO')
                                                                            <span class="avatar-status-busy"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top"
                                                                                data-original-title="No se vacuno"></span>
                                                                        @elseif($userp->profile->vaccine == 'SI')
                                                                            <span class="avatar-status-online"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top"
                                                                                data-original-title="{{ $userp->profile->vaccine_first_date . ' - ' . $userp->profile->vaccine_second_date }}"></span>
                                                                        @else
                                                                            <span class="avatar-status-away "
                                                                                data-toggle="tooltip"
                                                                                data-placement="top"
                                                                                data-original-title="No se registro ninguna opción"></span>
                                                                        @endif
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0">
                                                                        <a
                                                                            href="{{ route('users.show', $userp->id) }}">{{ $userp->full_namea }}</a>
                                                                    </h6>


                                                                    <small class="text-muted">
                                                                        {{ $userp->profile->position->name ?? 'Sin Cargo' }}</small>
                                                                </div>
                                                            </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        @empty
                                            <div class="col-12 text-center ">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="{{ asset('images/drea/emoji.svg') }}" width="120px"
                                                            alt="My Happy SVG" />
                                                        <div class="text-primary font-weight-bold text-center mt-2 fs-16">No
                                                            hay trabajadores registrados en esta oficina.</div>
                                                    </div>

                                                </div>

                                            </div>
                                        @endforelse

                                    </div>
                                    <!-- user profile nav tabs friends ends -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- user profile content section start -->
            </div>
        </div>
    </section>
    <!-- page user profile ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
    <script src="{{ asset('vendors/js/extensions/swiper.min.js') }}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
    <script src="{{ asset('js/scripts/pages/page-user-profile.js') }}"></script>
@endsection
