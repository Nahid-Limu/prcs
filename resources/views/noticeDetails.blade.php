@extends('layouts.app')

@section('title', 'Notice Details')

@section('content')

<!-- start #main -->
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
        <h2>Notice</h2>
        <p>Notice Details</p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- notice details -->
    <section class="section">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <div class="text-center mr-4">
                        <div class="p-4 bg-primary text-white">
                            <span class="h2 d-block">{{ date('j', strtotime($Notice->pulish_date)) }}</span> {{ date('F  Y', strtotime($Notice->pulish_date)) }}
                        </div>
                    </div>
                    <!-- notice content -->
                    <div>
                        <h3 class="mb-4">{{ $Notice->title }}</h3>
                        <p>{!! $Notice->description !!}</p>
                        {{-- <ul class="list-styled mb-5">
                            <li>Digital Access to Scholarship at Smart</li>
                            <li>institutes</li>
                            <li>Smart-affiliated hospitals and research</li>
                            <li>Smart Catalyst</li>
                            <li>Smart Library Portal</li>
                            <li>Smart research programs and departments</li>
                        </ul> --}}
                        @php
                            $url= asset('assets/file/notice').'/'.$Notice->document; 
                        @endphp
                        <a href="{{ $url }}" type="button" class="btn btn-sm btn-outline-info" title=""> <i class='bx bx-download'></i> Download ( {{$Notice->document}} )</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /notice details -->

</main>
<!-- End #main -->

@endsection
