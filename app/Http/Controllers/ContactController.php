<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\StoreResquestContact;
use App\Http\Requests\UpdateRequestContact;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    
    public function __construct(
        protected Contact $repository
    )
    {
            
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contacts = ContactResource::collection(Contact::all());
       return view('contacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResquestContact $request)
    {
        try{
            $data = $request->validated();
            
            $create = $this->repository->creatContact($data);
            
            if($create) return redirect()->back()->with('message', 'Successfully Create');
            return redirect()->back()->with('message', 'Error Create');
        }catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 403); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $contact = new ContactResource(Contact::where('name', $name)->first());
        return view('contact', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $name)
    {
        $contact = new ContactResource(Contact::where('name', $name)->first());
        return view('contact_edit', ['contact' => $contact]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestContact $request, string $id)
    {
        try {
            $data = $request->validated();
            $update = $this->repository->updateContact($data, $id);
            if($update) return redirect()->back()->with('message', 'Successfully Update');
            return redirect()->back()->with('message', 'Error Update');
        }catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 403); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $delete = $this->repository->deleteContact($id);
            
            if($delete) return redirect()->back()->with('message', 'Successfully Delete');
            return redirect()->back()->with('message', 'Error Delete');
        }catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 403); 
        }
    }
}
