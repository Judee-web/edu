@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        @include('layouts.left-menu')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-3">
                <div class="col ps-4">
                    <!-- <h1 class="display-6 mb-3"><i class="ms-auto bi bi-grid"></i> {{ __('Dashboard') }}</h1> -->
                    <div class="row dashboard">
                        <div class="col">
                            <div class="card rounded-pill">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold"><i class="bi bi-person-lines-fill me-3"></i> Total payment</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-md-stretch mt-4">
                        <div class="col">
                            <div class="p-3 text-white bg-dark rounded-3">
                                <h3>Welcome to school fees portal</h3>
                                <p><i class="bi bi-emoji-heart-eyes"></i> Make fees payment today.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 bg-white border rounded-3" style="height: 100%;">
                                <h3>Now easy to pay school fees</h3>
                                <p class="text-end">with <i class="bi bi-lightning"></i> <a href="" target="_blank" style="text-decoration: none;">Becky'sApp</a> <i class="bi bi-lightning"></i>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 mt-4">

                    <div class="card mb-3">
                                <div class="card-header bg-transparent"><i class="bi bi-calendar-event me-2"></i> Events</div>
                                <div class="card-body text-dark">
                                    @include('components.events.event-calendar', ['editable' => 'false', 'selectable' => 'false'])
                                    {{-- <div class="overflow-auto" style="height: 250px;">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">List group item heading</h5>
                                                <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Some placeholder content in a paragraph.</p>
                                                <small>And some small print.</small>
                                            </a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="card mb-3">

                            <a target="_blank" href="https://paystack.com/pay/ckg6jrqz3k">check out</a>

                        </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
@endsection
