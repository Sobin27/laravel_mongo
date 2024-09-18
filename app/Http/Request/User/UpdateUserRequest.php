<?php
namespace App\Http\Request\User;

use App\Http\Request\BaseRequest;

class UpdateUserRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'userId' => 'required|string',
            'name' => 'string',
            'email' => 'email',
        ];
    }
}
