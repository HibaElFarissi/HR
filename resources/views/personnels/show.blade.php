
@extends('adminlte::page')

@section('title')
      Show Person | Laravel
@endsection

@section('content_header')
    <h1 class="p-2 mb-2 bg-dark text-white text-center">Show Person</h1>
@endsection



@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row  ">
        <div class="col-md-8 mx-auto ">
            <div class="card my-5">
                <div class="card-header ">
                    <div class="text-center font-weight-bold text-Capitalize">
                     <h3>{{  $personnel->Prenom  }} {{ $personnel->Nom  }}</h3>
                    </div>
                    <hr/>

                   <div class="mt-2 text-center font-weight-bold text-upperCase">

                        <a href="{{ route('vacation.request',$personnel->CIN) }}" class="btn btn-outline-success">
                            Vacation request
                        </a>
                        <a href="{{ route('certificate.request',$personnel->CIN) }}" class="btn btn-outline-danger ">
                            Work Certificate
                        </a>
                        <a href="{{ route('salaire.request',$personnel->CIN) }}" class="btn btn-outline-primary">
                            Salaire request
                        </a>
                        
                    </div>
                    <hr>


                            <div class="form-group mb-3 bg-warning text-center ">
                                <label for="CIN">CIN</label>
                                <input type="text" disabled class="form-control rounded-0" name="CIN" maxlength="8" placeholder="CIN" value="{{ $personnel->CIN }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Nom">Nom</label>
                                   <input type="text" disabled class="form-control rounded-0" name="Nom" placeholder="Nom" value="{{ $personnel->Nom }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Prenom">Prenom</label>
                                   <input type="text" disabled class="form-control rounded-0" name="Prenom" placeholder="Prenom" value="{{ $personnel->Prenom }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Sexe">Sexe</label>
                                   <input type="text" disabled class="form-control rounded-0" name="Sexe" maxlength="6"  placeholder="Sexe" value="{{ $personnel->Sexe }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Date_Naissance">Date_Naissance</label>
                                   <input type="date" disabled class="form-control rounded-0" name="Date_Naissance" placeholder="Date de Naissance" value="{{ $personnel->Date_Naissance }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Téléphone">Téléphone</label>
                                   <input type="tel" disabled class="form-control rounded-0" name="Téléphone" maxlength="10"  placeholder="Téléphone" value="{{ $personnel->Téléphone }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Email">Email</label>
                                   <input type="email" disabled class="form-control rounded-0" name="Email" placeholder="Email" value="{{ $personnel->Email }}">
                            </div>

                            <div class="form-group mb-3 ">
                                   <label for="Adresse">Adresse</label>
                                   <input type="text" disabled class="form-control rounded-0 " name="Adresse" placeholder="Adresse" value="{{ $personnel->Adresse }}">
                            </div>

                            <center>
                                <div class="form-group-button d-grid gap-2">
                                    <button type="submit" class="btn btn-info">
                                        Submit
                                    </button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


