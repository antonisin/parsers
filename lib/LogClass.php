<?php

/**
 * Created by PhpStorm.
 * User: Maxim Antonisin <maxim.antonisin@gmail.com>
 * Date: 17.08.15
 * Time: 20:42
 */

/**
 * Class LogClass;
 * This class contain all necessary methods for prepare, write, catch, set and return logs;
 *
 * @author Maxim Antonisin <maxim.antonisin@gmail.com>
 * @version 1.0.beta
 */
class LogClass extends ErrorClass
{
    /**
     * Array with all saved logs;
     *
     * @access public
     * @var array
     */
    private $logsStack = [];

    /**
     * Enable/Disable a debug status;
     *
     * @access private
     * @var bool
     */
    private $debug = false;

    /**
     * Return array of all saved logs (array) $logsStack;
     *
     * @access private
     * @return array
     */
    public function getLogs()
    {
        return $this->logsStack;
    }

    /**
     * Add in log array new value $value;
     *
     * @access private
     * @param mixed $value
     * @return mixed Instance of $this class
     */
    public function setLog($value)
    {
        $this->logsStack = $value;

        return $this;
    }

    /**
     * Return debug status (boolean) $debug;
     *
     * @access private
     * @return boolean
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * Enable/Disable debug status;
     *
     * @access private
     * @param boolean $debug
     * @return mixed Instance of $this class
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Clear all logs;
     *
     * @access private
     * @return mixed Instance of $this class
     */
    public function clearLogs()
    {
        $this->debug = [];
        $this->clearErrors();

        return $this;
    }
}
