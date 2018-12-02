<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Occupancy implements Rule
{
    const maxAdultsNumber=12;
    const maxNumberOfRooms=4;
    const maxChildrenAge =17;
    const maxAmountOfChildren =6;
    protected $message="";
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }





    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(count($value)>self::maxNumberOfRooms){
            $this->message="The :attribute exceeds the maximum number of rooms allowed per search ( ".self::maxNumberOfRooms." )";
            return false;
        }

        foreach ($value as $index => $room){
            $roomNumber = $index+1;
            $parts = explode(',',$room);
            $adults = reset($parts);

            if($adults>self::maxAdultsNumber){
                $this->message="The :attribute at room number {$roomNumber} exceeds the maximum amount of allowed adults per room ( ".self::maxAdultsNumber." )";
                return false;
            }

            if(count($parts)-1 > self::maxAmountOfChildren){
                $this->message="The :attribute at room number {$roomNumber} exceeds the maximum amount of children per room ( ".self::maxAmountOfChildren." )";
                return false;
            }

            for ($i=1;$i<count($parts);$i++){
                if($parts[$i]>self::maxChildrenAge){
                    $this->message="The :attribute at room number {$roomNumber} violates the maximum allowed age for a children ( ".self::maxChildrenAge." ) on child number {$i}";
                    return false;
                }
            }

        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
