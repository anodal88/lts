<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/29/18
 * Time: 10:37 PM
 */

namespace App\Http\Requests;


use App\Http\Outputs\BaseResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;
use JMS\Serializer\Serializer;
abstract class FormRequest extends LaravelFormRequest
{
    /** @var Serializer $serializer */
    protected $serializer;

    public function __construct(Serializer $serializer){
        $this->serializer = $serializer;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    abstract public function authorize();
    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $errorApiResponse = (new BaseResponse())->setSuccess(false)->setErrors($errors);

        throw new HttpResponseException(response()->json($this->serializer->toArray($errorApiResponse), JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}