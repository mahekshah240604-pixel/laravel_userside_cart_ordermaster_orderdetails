<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class myproductcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mydata=product::all();
        return view('product.index',compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'Product_name'=>'required',
            'Product_price'=>'required',
            'Product_image'=>'required|image|mimes:jpg,png',
            'Product_details'=>'required',
            'Product_qty'=>'required|min:1|max:100',
        ],
        [
            'Product_name.required'=>'name is required',
            'Product_price.required'=>'price is required',
            'Product_image.required'=>'image is required',
            'Product_image.mimes'=>'allow jpg & png file',
            'Product_details.required'=>'details are required',
            'Product_qty.required'=>'qly are required',
            'Product_qty.min'=>'qty add between 1 to 100',
            'Product_qty.max'=>'qty add between 1 to 100',

        ]
        
        );

        $create=new product();

        $create->Product_name = $request->input('Product_name');
        $create->Product_price = $request->input('Product_price');
        // $create->Product_image = $request->file('Product_image');
       if($request->hasFile('Product_image'))
        {
            $file=$request->file('Product_image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('upload/',$filename);

            $create->Product_image=$filename;

        
        } 

         $create->Product_details = $request->input('Product_details');
         $create->Product_qty = $request->input('Product_qty');

         $create->save();

         echo  "<script>alert('record added');window.location='product/create'</script>";

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=product::where('Product_id','=',$id)->first();
        return view('product.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
            'Product_name'=>'required',
            'Product_price'=>'required',
            'Product_image'=>'required|image|mimes:jpg,png',
            'Product_details'=>'required',
            'Product_qty'=>'required|min:1|max:100',
        ],
        [
            'Product_name.required'=>'name is required',
            'Product_price.required'=>'price is required',
            'Product_image.required'=>'image is required',
            'Product_image.mimes'=>'allow jpg & png file',
            'Product_details.required'=>'details are required',
            'Product_qty.required'=>'qly are required',
            'Product_qty.min'=>'qty add between 1 to 100',
            'Product_qty.max'=>'qty add between 1 to 100',

        ]
        
        );


        $edit=product::where('Product_id',$id)->first();
         $edit->Product_name = $request->input('Product_name');
        $edit->Product_price = $request->input('Product_price');
        // $create->Product_image = $request->file('Product_image');
       if($request->hasFile('Product_image'))
        {
            $file=$request->file('Product_image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('upload/',$filename);

            $edit->Product_image=$filename;

        
        } 

         $edit->Product_details = $request->input('Product_details');
          $edit->Product_qty = $request->input('Product_qty');
        $edit->save();

         echo  "<script>alert('record edit');window.location='/product'</script>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::where('Product_id','=',$id)->delete();
        return redirect('product');
    }
}
