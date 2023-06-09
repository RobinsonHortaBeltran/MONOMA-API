<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * En: Validation rules that apply to the application.
 * Es: Reglas de validación que se aplican a la solicitud.
 *
 * @class   ClientsValidateRequest
 * @package Modules\Clients\Http\Requests
 */
class CompaniesValidateRequest extends FormRequest
{
    /**
     * En: Get the validation rules that apply to the request.
     * Es: Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'username' =>  ['required','string','min:1','max:255'],
            'password' =>  ['required','string','min:1','max:255'],
        ];
    }

    /**
     * En: Determine if the user is authorized to make this request.
     * Es: Determine si el usuario está autorizado a realizar esta solicitud.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
