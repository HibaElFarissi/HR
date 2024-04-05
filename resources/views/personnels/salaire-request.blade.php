
@extends('adminlte::page')

@section('title')
  Salaire Request
@endsection

@section('content')
<div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto">
            <div class="card p-3 my-5">
                <div class="card-header">
                    <h3>Salaire Request</h3>
                    {{-- <i class="bi bi-currency-dollar"></i> --}}

                </div>
              <div class="card-body">
                <p class="lead">
                    <b>{{ $personnel->Prenom }} {{ $personnel->Nom }}</b> is presently employed with me in the following.
                </p>

                <p class="lead">
                    <b>{{ $personnel->Adresse }}</b> Address
                </p>

                <p class="lead">
                    He is requesting a Salaire starting from <b>_____________</b>
                </p>

                <p class="lead">
                   And ends on <b>_____________</b>
                </p>

                <p class="m-5">
                _____________
                _____________
                </p>

                <div class="my-4">
                    <a href="#" onclick="
                    document.getElementById('printLink').style.display='none';
                        setTimeout(function(){
                            document.getElementById('printLink').style.display='inline';
                        },2000);
                        window.print();"
                        class="btn btn-sm btn-danger"  id="printLink">

                        <i class="fas fa-print"></i>
                    </a>
                </div>
              </div>
            </div>

         </div>
      </div>
</div>
@endsection
