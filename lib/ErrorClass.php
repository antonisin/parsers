<?php

/**
 * Created by PhpStorm.
 * User: Maxim Antonisin <maxim.antonisin@gmail.com>
 * Date: 17.08.15
 * Time: 20:29
 */

/**
 * Class ErrorClass;
 * This class contain and store all necessary parameters and method for write, prepare, catch, set and return errors;
 *
 * @author Maxim Antonisin <maxim.antonisin@gmail.com>
 * @version 1.0.beta
 */
class ErrorClass
{
    /**
     * Array of all saved errors;
     *
     * @access public
     * @var array
     */
    private $errorsStack = [];

    /**
     * Return array of all saved errors (array) $errorsStack;
     *
     * @access private
     * @return array
     */
    public function getErrors()
    {
        return $this->errorsStack;
    }

    /**
     * Add in error array new value $value;
     *
     * @param mixed $value
     * @return mixed Instance of $this class
     */
    public function setError($value)
    {
        $this->errorsStack[] = $value;

        return $this;
    }

    /**
     * Return last error value from $errorsStack;
     *
     * @access private
     * @return mixed
     */
    public function getLastError()
    {
        return end($this->getErrors());
    }

    /**
     * Return first error value from $errorsStack;
     *
     * @access private
     * @return mixed
     */
    public function getFirstError()
    {
        return reset($this->getErrors());
    }

    /**
     * Return count of $errorsStack array;
     *
     * @access private
     * @return int
     */
    public function getErrorCount()
    {
        return count($this->getErrors());
    }

    /**
     * Check if $errorStack is not empty;
     * Return (true) if $errorsStack is empty and (false) if $errorsStack is not empty;
     *
     * @access private
     * @return bool
     */
    public function hasErrors()
    {
        return empty($this->getErrors());
    }

    /**
     * Clear all $errorsStack array;
     *
     * @access private
     * @return mixed Instance of $this class
     */
    public function clearErrors()
    {
        $this->errorsStack = [];

        return $this;
    }
}
