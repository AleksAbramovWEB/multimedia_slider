<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddImageRequest;
use App\Http\Requests\ApiImageRequest;
use App\Models\ImagineForSlider;
use App\Repositories\ImagineForSliderRepository;
use Illuminate\Http\Request;

class ImagineForSliderController extends Controller
{
    public function home(ImagineForSliderRepository $repository){
        $images = $repository->getImagesForHome();
        return view('home', compact('images'));
    }

    public function add_image(AddImageRequest $request, ImagineForSlider $imagine){
        $path = "content/".$request->file('picture')->store('img', 'content');
        $imagine::create(['path' => $path]);
        \Image::make($path)->resize(300, 300)->save($path);
        return back();
    }

    public function image_api(ApiImageRequest $request, ImagineForSliderRepository $repository){
        $image = $repository->getImagesForApi($request->get_img);
        if (!empty($image))
            $image = ['id' => $image->id, 'path' => asset($image->path)];
        return response()->json($image);
    }
}
