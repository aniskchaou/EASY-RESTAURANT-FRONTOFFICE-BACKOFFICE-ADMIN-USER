<?php
namespace App\Http\Controllers\admin;
use App\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class OfferController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $offers = Offer::all();  
  
        return view('admin.pages.offer.index', compact('offers'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.offer.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([  
            'name'=>'required',  
        ]);  
  
        $cat = new Offer;  
        $cat->name =  $request->get('name');
        $cat->price =  $request->get('price');
        $cat->start =  $request->get('start');
        $cat->end =  $request->get('end');
        $cat->conditions =  $request->get('conditions');
        $cat->save(); 
        return redirect('offer/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Offer::find($id);  
     return view('admin.pages.offer.edit', compact('cat'));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([  
            'name'=>'required',  
             
        ]);  
  
        $cat = Offer::find($id);  
          $cat->name =  $request->get('name');
        $cat->price =  $request->get('price');
        $cat->end =  $request->get('end');
        $cat->start =  $request->get('start');
        $cat->conditions =  $request->get('conditions');    
        $cat->save();
        return redirect('offer/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat=Offer::find($id);  
        $cat->delete(); 
        return redirect('offer/index');
    }
}
