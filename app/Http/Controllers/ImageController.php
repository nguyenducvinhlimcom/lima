<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Repositories\ImageRepository;

class ImageController extends Controller
{

    public function __construct(
        private readonly ImageRepository $imageReposiotry
    ){
    }


    /**
     * Upload an image
     *
     * @param ImageRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function upload(ImageRequest $request)
    {
        try {
            $image = $this->imageReposiotry->create($request->validated());
            $data = $this->imageReposiotry->uploaded($image);
        } catch (\Throwable $th) {
            throw $th;
        }
        return response()->json($data);
    }

}
