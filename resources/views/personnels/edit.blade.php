
@extends('adminlte::page')
{{-- @extends('home') --}}


@section('title')
      Update Person | Laravel
@endsection

@section('content_header')
               <h1 class="p-2 mb-2 bg-dark text-white text-center">Update Person</h1>
@endsection



@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-upperCase">
                       <h3>Update Person</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('personnels.update', $personnel->CIN)}}" method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                   <label for="CIN">CIN</label>
                                   <input type="text" class="form-control" name="CIN" maxlength="8" placeholder="CIN" value="{{ old('CIN', $personnel->CIN) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Nom">Nom</label>
                                   <input type="text" class="form-control" name="Nom" placeholder="Nom" value="{{ old('Nom', $personnel->Nom) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Prenom">Prenom</label>
                                   <input type="text" class="form-control" name="Prenom" placeholder="Prenom" value="{{ old('Prenom', $personnel->Prenom) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Sexe">Sexe</label>
                                   <input type="text" class="form-control" name="Sexe" maxlength="6"  placeholder="Sexe" value="{{ old('Sexe', $personnel->Sexe) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Date_Naissance">Date_Naissance</label>
                                   <input type="date" class="form-control" name="Date_Naissance" placeholder="Date de Naissance" value="{{ old('Date_Naissance', $personnel->Date_Naissance) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Téléphone">Téléphone</label>
                                   <input type="tel" class="form-control" name="Téléphone" maxlength="10"  placeholder="Téléphone" value="{{ old('Téléphone', $personnel->Téléphone) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Email">Email</label>
                                   <input type="email" class="form-control" name="Email" placeholder="Email" value="{{ old('Email' , $personnel->Email) }}">
                            </div>

                            <div class="form-group mb-3">
                                   <label for="Adresse">Adresse</label>
                                   <input type="text" class="form-control" name="Adresse" placeholder="Adresse" value="{{ old('Adresse', $personnel->Adresse) }}">
                            </div>

                            <div class="form-group-button">

                                <center>
                                    <button type="submit" class="btn btn-outline-info">
                                        Submit
                                    </button>
                                </center>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


