
@extends('adminlte::page')

@section('plugins.Datatables', true)


@section('title')
    List of Personnels
@endsection

@section('content_header')
    <h1>List of Personnels</h1>
@endsection

@section('content')
<div class="container">


    <div class="row ">
        <div class="col-md-16 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-upperCase">
                       <h3>Personnels</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="MTable" class=" table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Sexe</th>
                                <th>Date Naissance</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personnels as $key => $personnel)
                             <tr>
                                <th>{{ $key+=1 }}</th>
                                <td>{{ $personnel -> CIN }}</td>
                                <td>{{ $personnel -> Nom }}</td>
                                <td>{{ $personnel -> Prenom}}</td>
                                <td>{{ $personnel -> Sexe}}</td>
                                <td>{{ $personnel -> Date_Naissance}}</td>
                                <td>{{ $personnel -> Téléphone}}</td>
                                <td>{{ $personnel -> Email}}</td>
                                <td>{{ $personnel -> Adresse}}</td>

                                <td class="d-flex justify-content-center align-items-center">

                                    <a href="{{ route('personnels.show', $personnel -> CIN) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="{{ route('personnels.edit', $personnel -> CIN) }}"
                                        class="btn btn-sm btn-warning mx-2" >
                                        <i class="fas fa-edit"></i>
                                    </a>


                                    <form id="DeleteForm" action="{{ route ('personnels.destroy',$personnel->CIN)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                    </form>

                                    <button type="submit" onclick="deletePer()" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
             $('#MTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy', 'excel' , 'csv', 'pdf', 'print', 'colvis'
                ]
             });

        });
       //  Delete:

    function deletePer(DeleteForm){

        Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                    if (result.isConfirmed) {
                        document.getElementById('DeleteForm').submit();
                    }

            })

}






//         // message alert:
    </script>
    @if( session()->has('success'))
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: "{{session()->get('success')}}",
                    showConfirmButton: false,
                    timer: 3200
                })
            </script>

    @endif
@endsection
