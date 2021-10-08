<?php


namespace App\Repositories;
use App\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public $categories,$search,$name,$category_id;
public function render()
    {
$this->categories=Category::where('name', 'like', '%'.$this->search.'%')->get();
return view('livewire.categorycrud');
    }


public function mount(){
$this->search=request()->query('search',$this->search);
           }


public function rest(){
$this->name='';
            }


public function store(){
$this->validate([
'name'=>'required',
]);
Category::Create([
'name'=>$this->name,
]);
$this->rest();   
$this->emit('categoryStore');
}


public function edit($id){
$editcategory=Category::findOrFail($id);
$this->category_id=$id;
$this->name=$editcategory->name;                   
}


public function update(){
$this->validate([
'name'=>'required',
]);
$updatecategory=Category::findOrfail($this->category_id);
$updatecategory->update([
'name'=>$this->name,
]);
$this->rest();
$this->emit('categoryStore');
}


                    
public function delete($id){
                    
Category::find($id)->delete();
}
                     
                    
                    
                        
           





}

?>