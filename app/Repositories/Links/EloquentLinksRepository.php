<?php
namespace App\Repositories\Links;
use App\Repositories\Links\LinksContract;
use App\Link;

class EloquentLinksRepository implements LinksContract {
    
    public function create($request) {
        $link = new Link;
        $link->title = $request->title;
        $link->url = $request->url;
        $link->score_point = 510;
        // dd($link);
        $link->save();
        return $link;
    }

    // return all Links
    public function findAll() {
        $links = Link::all();
        return $links;
    }

    // return a Link by ID
    public function findById($id) {
        return Link::where('id', $id)->first();
    }

    // return a Link by slug
    public function findBySlug($slug){
        return Link::where('slug', $slug)->first();
    }

    // Update a Link
    public function update($request, $id) {
        $link = $this->findById($id);
        $link->title = $request->title;
        $link->url = $request->url;
        $link->score_point = 510;
        $link->save();
        return $link;
    }

    // Remove a Link
    public function remove($id) {
        $link = $this->findById($id);
        return $link->delete();
    }
}
