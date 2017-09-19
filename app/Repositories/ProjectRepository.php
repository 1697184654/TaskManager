<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 2017/8/25
 * Time: 8:22
 */

namespace App\Repositories;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectRepository
{
    /**
     * 获取缩略图名字
     * @param Request $request
     * @return string
     */
    public function thumbnail( Request $request )
    {
        if ( $request->hasFile('thumbnail') )
        {
            $file = $request->thumbnail;
            $name = str_random(10) . '.jpg';
            $path = public_path() . '/thumbnails/' . $name;
            Image::make($file)->resize(264,98)->encode('jpg')->save($path);
            return $name;
        }
    }

    /**
     * 创建工程
     * @param Request $request
     */
    public function createProject( Request $request )
    {

        $request->user()->projects()->create([
            'name'=>$request->name,
            'thumbnail'=>$this->thumbnail($request)
        ]);
    }
}