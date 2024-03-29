<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnonceRequest;
use App\Models\Annonce;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::latest()->paginate(5);
        
        return view('admin.annonces.index',compact('annonces'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
  
        $entreprises = Entreprise::all(); 

        return view('admin.annonces.create', compact('entreprises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnonceRequest $request)
    {
      
        Annonce::create($request->validated());
         
        return redirect()->route('annonces.index')
                        ->with('success','Company created successfully.');
;
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        return view('admin.annonces.show',compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        $entreprises = Entreprise::all(); 
        return view('admin.annonces.edit', compact('annonce', 'entreprises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnonceRequest $request, Annonce $annonce)
    {

        
        $annonce->update($request->validated());
        
        return redirect()->route('annonces.index')
                        ->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
      
        $annonce->delete();
         
        return redirect()->route('dashboard')
                        ->with('success','Company deleted successfully');
    }

    public function showDashboard()
    {
        $annonces = Annonce::all(); 
        return view('annonces.index', compact('annonces'));
    }

    public function showWelcome()
    {
        $annonces = Annonce::latest()->paginate(5); 
        return view('welcome', compact('annonces'));
    }

}