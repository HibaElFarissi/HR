
@extends('adminlte::page')
{{-- @extends('home') --}}


@section('title')
    Home
@endsection

@section('content_header')
    <h1 class="font-weight-600">Dashboard</h1>
@endsection

@section('content')

    <div class="container">
        <div class="row my-5 ">
            <div class="col-md-4 ">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Personnel::count()}}</h3>
                    <p>Personnels</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                    <a href="{{ url('admin/personnels') }}" class='small-box-footer'>
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
            </div>
            </div>
            </div>
    </div>

    <div class="container">
        <div class="row my-4 ">
            <div class="col-md-4 ">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4>Attetation</h4>
                    {{-- <h3>{{\App\Models\Personnel::count()}}</h3> --}}
                    <p>List des demandes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                    <a href="{{ url('admin/personnels/Attestation') }}" class='small-box-footer'>
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            </div>
    </div>


@endsection
