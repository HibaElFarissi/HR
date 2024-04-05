
@extends('adminlte::page')

@section('title')
   Work Certificate Request
@endsection

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto">
            <div class="card p-3 my-5">
                <div class="card-header">
                    <h3>Work Certificate  Request</h3>
                </div>
              <div class="card-body">
                <p class="lead">
                    <b>{{ $personnel->Prenom }} {{ $personnel->Nom }}</b> is presently employed with me in the following.
                </p>

                <p class="lead">
                    <b>{{ $personnel->Adresse }}</b> Address
                </p>

                <p class="lead">
                    His employment began on <b>{{ $personnel->Date_Naissance }}</b> .
                </p>

                <p class="lead">
                    This Certification is being issued upon the request of   <b>{{ $personnel->Prenom }} {{ $personnel->Nom }}</b>  for whatever legal purpose it may serve.
                </p>

                <p class="lead">
                    Issued on <b>{{ \Carbon\Carbon::today()->toDateString() }} at</b>  <b>{{ \Carbon\Carbon::now()->toTimeString() }}
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
