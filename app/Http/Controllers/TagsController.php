<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tag;


class TagsController extends Controller
{
    public function show(Tag $tag)
    {
       $vlist= $tag->vlist()->published()->get();

        return view ('vlist.index',compact('vlist'));

    }
}
