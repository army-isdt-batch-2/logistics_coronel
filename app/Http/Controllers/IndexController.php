<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logistics;  
class IndexController extends Controller
{ 
    protected $request; 
    public function __construct(Request $request)
    { 
        $this->request = $request;
    } 
    public function index()
    {  
        $data = Logistics::all(); 
        if($this->request->has('search')){
            $data = Logistics::where(
                $this->request->by,
                'LIKE',  
                '%'.$this->request->search.'%'
            )->get(); 
            /**
             * Kinds of operator
             * = != < > <= >= LIKE
             * 
             * ->where(column_name, operator, string)
             * 
             */
        } 
        
        if($this->request->has('name')){
            // dates 
            // whereBetween('colum',[date1, date2])
            $data = Logistics::whereBetween('name',[
                $this->request->name,
                $this->request->price
            ])->get(); 
        }
        if ($this->request->has('name')){
            $data= Logistics::where('name','>=', $this->request->name)
                         ->where('name','>=', $this->request->name)
                         ->get();
        }


        return view('index')->with([ 
            'data' => $data
        ]);
    }
}