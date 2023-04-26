<?php

namespace App\Http\Requests;

use App\Helpers\ImageHelper;
use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{

    use ImageHelper;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return $this->isMethod("POST") ? $this->store_rules() : $this->update_rules();
    }

    public function messages()
    {
        return [

            "image.required" => "Image is required",
            "title.required" => " Title is required",
            "short_text.required" => "Short Text is required",
            "link" => "nullable",
        ];
    }

    private function store_rules()
    {
        return [
            "image" => "required",
            "title" => "required",
            "short_text" => "required",
            "link" => "nullable",
        ];
    }

    private function update_rules()
    {
        return [
            "image" => "nullable",
            "title" => "required",
            "short_text" => "required",
            "link" => "nullable",
            "status" => 'nullable',
        ];
    }
    public function validated(): array
    {
        if ($this->hasFile('image')) {
            $img_url =  $this->uploadImage($this->file('image'), 'banner');
            if ($this->input('old_img')) {
                $this->deleteImage($this->input('old_img'));
            }
        } else {
            if ($this->input('old_img')) {
                $img_url = $this->input('old_img');
            }
        }
        return array_merge(parent::validated(), ['image' => $img_url ?? '/assets/images/default-user.png']);
    }
}
