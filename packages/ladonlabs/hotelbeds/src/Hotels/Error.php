<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 4/10/18
 * Time: 10:17 PM
 */

namespace ladonlabs\hotelbeds\Hotels;


class Error
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Error
     */
    public function setCode(string $code): Error
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Error
     */
    public function setMessage(string $message): Error
    {
        $this->message = $message;
        return $this;
    }


}