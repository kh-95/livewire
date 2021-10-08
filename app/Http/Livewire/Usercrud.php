<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
use App\Address_User;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class Usercrud extends Component
{


public $name , $email , $password, $phone,$image, $users,$search,$address,$user;
public $inputs = [];
    public $i = 1;


 
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

protected $listeners = ['fileUpload' => 'handleFileUpload'];


public function handleFileUpload($imageData){

$this->image=$imageData;

}
    public function render()
    {

       
        $this->users=User::where('name', 'like', '%'.$this->search.'%')->get();
        return view('livewire.usercrud');
    }

    protected $updatesQuerystring=['search'];

    public function mount(){
        
        
 $this->search=request()->query('search',$this->search);
    }

public function rest(){
$this->name='';
$this->email='';
$this->password='';
$this->phone='';
$this->image='';
$this->address='';

}
   
public function store(){
    
 $this->validate([
'name'=>'required',
'email'=>'required|email',
'password'=>'required|min:6',
'address.*' => 'required',
 ],[
    'address.0.required' => 'address field is required',
        
    'address.*.required' => 'address field is required',
       
    
 ]



);
   $image=$this->storeImage();

  $user= User::Create([

    'name'=>$this->name,
    'email'=>$this->email,
    'password'=>md5($this->password),
    'phone'=>$this->phone,
    'image'=>$this->image,
     
    
  ]
);

foreach ($this->address as $key => $value) {
    $user->addresses()->create(['address' => $this->address[$key]]);
}
  $this->rest();   
   $this->emit('userStore');
    }
public function storeImage(){

if( !$this->image ) {
    return null;
}
$img = ImageManagerStatic::make($this->image)->encode('png');

$name=Str::random().'.png';
Storage::disk('public')->put($name,$img);

return $name;
}








public function edit($id){

      
$edituser=User::findOrFail($id);

$this->user_id=$id;
$this->email=$edituser->email;
$this->password=md5($edituser->password);
$this->name=$edituser->name;
$this->phone=$edituser->phone;

}

public function update(){

 $this->validate([
'name'=>'required',
'email'=>'required|email',
'password'=>'required|min:6',
]);

$updateuser=User::findOrfail($this->user_id);
$updateuser->update([
    'name'=>$this->name,
    'email'=>$this->email,
    'password'=>md5($this->password),
    'phone'=>$this->phone,
]);
       $this->rest();
       $this->emit('userStore');
    }



    
public function delete($id){

    User::find($id)->delete();
 Storage::disk('public')->delete($user->image);


    }
    
}
