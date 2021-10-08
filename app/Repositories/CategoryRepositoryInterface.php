<?php

namespace App\Repositories;

interface CategoryRepositoryInterface
{
    
public function render();
public function mount();
public function rest();
public function store();
public function edit($id);
public function update();
public function delete($id);




}
?>