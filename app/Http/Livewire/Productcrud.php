<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;

class Productcrud extends Component
{
 public $products,$image,$purchaseprice,$saleprice,$stock,$categories,$category_id,$product_id;
    public function render()
    {
        $this->products=Product::all();
        $this->categories=Category::all();
        return view('livewire.productcrud');
    }
    public function rest(){
      $this->category_id='';
        $this->image='';
        $this->purchaseprice='';
        $this->saleprice='';
        $this->stock='';
        
        
        }
        public function store(){
    
            $this->validate([
           'category_id'=>'required',
           'purchaseprice'=>'required',
           'saleprice'=>'required',
         'stock' => 'required',
            ]);
              
            $image=$this->getImagePathAttribute();
              Product::Create([
                'category_id'=>$this->category_id,
               'image'=>$this->image,
               'purchase_price'=>$this->purchaseprice,
           'sale_price'=>$this->saleprice,
           'stock' => $this->stock,
             ]
           );
           
           
             $this->rest();   
              $this->emit('productStore');
               }
          
               public function getImagePathAttribute (){

                return asset('uploads/product_images/'. $this->image);
                
                }
                        

                public function edit($id){

      
                  $editproduct=Product::findOrFail($id);
                  
                  $this->product_id=$id;
                  $this->category_id=$editproduct->category_id;
                  $this->purchaseprice=$editproduct->purchase_price;
                  $this->saleprice=$editproduct->sale_price;
                  
                  $this->stock=$editproduct->stock;
                  
                  }
                  
                  public function update(){
                  
                   $this->validate([
                    'category_id'=>'required',
                    'purchaseprice'=>'required',
                    'saleprice'=>'required',
                  'stock' => 'required',
                  ]);
                  
                  $updateproduct=Product::findOrfail($this->product_id);
                  $updateproduct->update([
                      'category_id'=>$this->category_id,
                      'purchase_price'=>$this->purchaseprice,
                      'sale_price'=>$this->saleprice,
                      'stock'=>$this->stock,
                  ]);
                         $this->rest();
                         $this->emit('productStore');
                      }
                  
                  
                  
                      
                  public function delete($id){
                  
                      Product::find($id)->delete();
                   Storage::disk('public')->delete($product->image);
                  
                  
                      }




  



}
