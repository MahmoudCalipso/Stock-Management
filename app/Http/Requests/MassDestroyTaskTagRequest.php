<?php

namespace App\Http\Requests;

use App\TaskTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTaskTagRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('task_tag_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:task_tags,id',
        ];
    }
}
