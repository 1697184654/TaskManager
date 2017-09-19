<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:projects,name',
            'thumbnail' =>'image|dimensions:min_width=261,min_height=98'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '项目名称必填！',
            'name.unique'=>'很抱歉，项目名称被占用',
            'thumbnail.image'=>'请上传图片格式的文件',
            'thumbnail.dimensions'=>'您上传的图片格式不得小于宽261px,高98px的图片'
        ];
    }
}
