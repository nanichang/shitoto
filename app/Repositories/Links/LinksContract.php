<?php
namespace App\Repositories\Links;
interface LinksContract {
    public function create($request);
    public function findAll();
    public function findById($id);
    public function update($request, $slug);
    public function remove($slug);
}
