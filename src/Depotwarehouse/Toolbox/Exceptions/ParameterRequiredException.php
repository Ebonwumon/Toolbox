<?php
/**
 * Created by PhpStorm.
 * User: ebon
 * Date: 7/21/14
 * Time: 3:45 AM
 */

namespace Depotwarehouse\Toolbox\Exceptions;


class ParameterRequiredException extends \Exception {

    public function __construct($parameter) {
        $message = "A piece of data was not properly passed. Check the parameter: {$parameter}";
        parent::__construct($message);
    }

} 