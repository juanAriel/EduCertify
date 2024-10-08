<?php

namespace App\Exceptions;

use Exception;

class ParticipantAlreadyEnrolled extends Exception
{
    protected $message = 'This participant is already enrolled in this course.';

    public function __construct()
    {
        parent::__construct($this->message, 1);
    }
}
