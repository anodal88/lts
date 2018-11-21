<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 11/18/18
 * Time: 9:18 PM
 */

namespace App\IntegrationHub\Common;


use Illuminate\Database\Eloquent\Model;

class BaseResponse extends Model
{

    /**
     * @var boolean
     */
    protected $success;

    /**
     * @var array
     */
    protected $errors=[];

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return BaseResponse
     */
    public function setSuccess(bool $success): BaseResponse
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return BaseResponse
     */
    public function setErrors(array $errors): BaseResponse
    {
        $this->errors = $errors;
        return $this;
    }


}