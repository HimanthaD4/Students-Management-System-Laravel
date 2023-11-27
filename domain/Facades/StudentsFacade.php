<?php

namespace domain\Facades;

use domain\Services\StudentService;
use Illuminate\Support\Facades\Facade;

class StudentsFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return StudentService::class;
    }

}
