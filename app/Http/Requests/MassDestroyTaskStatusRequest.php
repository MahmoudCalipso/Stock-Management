<?php

namespace App\Http\Requests;

use App\TaskStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTaskStatusRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('task_status_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:task_statuses,id',
        ];
    }
}
