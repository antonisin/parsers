<?php

/**
 * Created by PhpStorm.
 * User: Maxim Antonisin
 * Date: 17.08.15
 * Time: 20:19
 */

/**
 * Class BaseParser
 * This class is base parser for store and contain base methods and parameters for extend parsers;
 *
 * @author Maxim Antonisin <maxim.antonisin@gmail.com>
 * @version 1.0.beta
 */
class BaseParser extends ErrorClass
{
    /**
     * Base url;
     *
     * @access public
     * @var string
     */
    private $URL = 'http://url.url';

    /**
     * Return base url (string) $URL;
     *
     * @access private
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Set base url (string) $URL.
     *
     * @access private
     * @param string $URL
     * @return mixed Instance of $this class
     */
    public function setURL($URL)
    {
        $this->URL = $URL;

        return $this;
    }
}