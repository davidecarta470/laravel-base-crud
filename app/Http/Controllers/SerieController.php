<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\MyRequest;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::orderBy('id','desc')->paginate(5);
        return view('series.index',compact('series'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MyRequest $request)
    {
        
        
        // $request->validate($this->validateField()['field'],$this->validateField()['sentence']
        // [
        //     'title'=>"required|max:50|min:2",
        //     'price'=>"required|min:2",

        // ],
        // [
        //     'title.required'=>'il titolo è un campo obbligatorio',
        //     'title.max'=>'il numero di caratteri consentito è di :max caratteri',
        //     'title.min'=>'il numero minimo di caratteri è di :min caratteri',
        //     'price.required'=>'il titolo è un campo obbligatorio',
        //     'price.min'=>'il numero minimo di caratteri è di :min caratteri'
        // ]
    // );
        $data = $request->all();
        $new_serie = new Serie();
        // $new_serie->title = $data['title'];
        // $new_serie->img = $data['img'];
        // $new_serie->description = $data['description'];
        // $new_serie->price = $data['price'];
        // $new_serie->series = $data['series'];
        // $new_serie->sale_date = $data['sale_date'];
        // $new_serie->type = $data['type'];
        // $new_serie->save();
        $new_serie->fill($data);
        $new_serie->save();
        return redirect()->route('series.index',$new_serie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $series)
    {
      //si utilizza la dependency injection dei parametri
       return view('series.show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $series)
    {
        
      return view('series.edit',compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(MyRequest $request, Serie $series)
    {
       
        $data = $request->all();
        $series->update($data);
        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $series)
    {
        $series->delete();
        return redirect()->route('series.index')->with('deleted',"il fumetto $series->title è stato eliminato");
    }


    private function validateField(){
        return [
            "field"=>['title'=>"required|max:50|min:2",
                      'price'=>"required|min:2"],
            "sentence"=>[      
                        'title.required'=>'il titolo è un campo obbligatorio',
                        'title.max'=>'il numero di caratteri consentito è di :max caratteri',
                        'title.min'=>'il numero minimo di caratteri è di :min caratteri',
                        'price.required'=>'il prezzo è un campo obbligatorio',
                        'price.min'=>'il numero minimo di caratteri è di :min caratteri'
                        ]
        ];

    }
}
