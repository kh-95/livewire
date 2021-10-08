<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\CategoryRepository;
use App\Category;

class Categorycrud extends Component
{
    
protected $category;

public $categories,$search,$name,$category_id;






    public function render()
    {
        $this->categories=Category::where('name', 'like', '%'.$this->search.'%')->get();
        return view('livewire.categorycrud');
    }
    protected $updatesQuerystring=['search'];

    public function mount(CategoryRepository $category){
        $this->category = $category;
 
    }
    public function rest(){
        $this->category->reset();
        }
 public function store(){
    
 $this->category->store();
               }

               public function edit($id){

                $this->category->edit($id);
               
                
                }
                
                public function update(){
                
                    $this->category->update();
                    }
                
                
                
                    
                public function delete($id){
                
                    $this->category->delete($id);
                 
                
                
                    }




}
