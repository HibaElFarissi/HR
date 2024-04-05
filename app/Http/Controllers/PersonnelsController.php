<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
         $personnels = Personnel::all();
         return view('personnels.index')->with([
            'personnels' =>  $personnels
         ]);
    }


    public function create()
    {
        //
        return view('personnels.create');
    }


    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'CIN' => 'required|unique:personnels,CIN',
            'Nom' => 'required|unique:personnels,Nom',
            'Prenom' => 'required|unique:personnels,Prenom',
            'Sexe' => 'required',
            'Téléphone' => 'required',
            'Date_Naissance' => 'required',
            'Email' => 'required',
            'Adresse' => 'required',
        ]);

        Personnel::create($request->except('_token'));
        return redirect()->route('personnels.index')->with([
          'success' => 'Person added successfully'
        ]);
    }



    public function show($id)
    {
        //

        $personnel = Personnel::where('CIN', $id)->first();
        return view('personnels.show')->with([
          'personnel' =>$personnel
        ]);
    }




    public function edit($id)
    {

         //
         $personnel = Personnel::where('CIN', $id)->first();
         return view('personnels.edit')->with([
             'personnel' => $personnel
         ]);
    }



    public function update(Request $request, $id)
    {
        //
          //
          $personnel = Personnel::where('CIN', $id)->first();
          $this->validate($request, [
             'CIN' => 'required|unique:personnels,id,'.$personnel->CIN,
             'Nom' => 'required',
             'Prenom' => 'required',
             'Sexe' => 'required',
             'Téléphone' => 'required',
             'Date_Naissance' => 'required',
             'Email' => 'required',
             'Adresse' => 'required',
         ]);

         $personnel->update($request->except('_token', '_method'));
         return redirect()->route('personnels.index')->with([
             'success' => 'Person updated successfully'
         ]);
    }



    public function destroy($id)
    {
        //
        $personnel = Personnel::where('CIN', $id)->first();
        $personnel->delete();
        return redirect()->route('personnels.index')->with([
            'success' => 'Personnel deleted succesfully'
        ]);
    }


     // function VacationReuqest:
     public function VacationRequest($id){
        $personnel = Personnel::where('CIN',$id)->first();
        return view('personnels.vacation-request')->with([
            'personnel' => $personnel
        ]);
    }


       // function CertificateRequest:

        public function CertificateRequest($id){
            $personnel = Personnel::where('CIN',$id)->first();
            return view('personnels.certificate-request')->with([
                'personnel' => $personnel
            ]);
        }


        // function SalaireRequest:

    public function SalaireRequest($id){
        $personnel = Personnel::where('CIN',$id)->first();
        return view('personnels.salaire-request')->with([
            'personnel' => $personnel
        ]);
    }
}
