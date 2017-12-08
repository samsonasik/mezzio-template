<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-template for the canonical source repository
 * @copyright Copyright (c) 2015-2017 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-template/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Expressive\Template;

class TemplatePath
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var null|string
     */
    protected $namespace;

    /**
     * Constructor
     *
     * @param string $path
     * @param null|string $namespace
     */
    public function __construct($path, $namespace = null)
    {
        $this->path      = $path;
        $this->namespace = $namespace;
    }

    /**
     * Casts to string by returning the path only.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->path;
    }

    /**
     * Get the namespace
     *
     * @return null|string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Get the path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
