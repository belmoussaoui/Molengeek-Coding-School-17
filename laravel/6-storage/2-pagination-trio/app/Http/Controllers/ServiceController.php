<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::paginate(3);
        $page = "service";
        $portfolios = Portfolio::all();
        $galeries = Galerie::all();
        return view("backoffice.service.all",compact("services","page","portfolios","galeries"));       
    }


    public function destroy($id){
        $service = Service::find($id);
        $service->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $service = Service::find($id);
        $page = "service";

        return view("backoffice.service.edit", compact("service","page"));       
    }


    public function update($id, Request $request){
        $request->validate([
	        'icone' => 'required|max:255',
	        'titre' => 'required|max:255',
            'description' => 'required',
	    ]);

        $service = Service::find($id);
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;   
        $service->updated_at = now();   

        $service->save();

        return redirect()->route("service");
    }


    public function create(){
        return view("backoffice.service.create");
    }


    public function store(Request $request){
        $request->validate([
	        'icone' => 'required|max:255',
	        'titre' => 'required|max:255',
            'description' => 'required',
	    ]);
        $service = new Service();
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;   
        $service->created_at = now();   
 
        $service->save();
 
        return redirect()->route('service')->with('message', 'The success message!');;
    }
}
