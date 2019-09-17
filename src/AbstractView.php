<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios;

use MSBios\Exception\InvalidArgumentException;

/**
 * Class AbstractView
 * @package MSBios
 */
abstract class AbstractView
{
    protected $_template;
    protected $_content;

    /**
     * AbstractView constructor.
     * @param null $template
     */
    public function __construct($template = null)
    {
        if (null !== $template) {
            $this->setTemplate($template) ;
        }

    }

    /**
     * @param $template
     * @return AbstractView
     */
    public function setTemplate($template): self
    {
        if (!file_exists($template)) {
            throw new InvalidArgumentException("Invalid template '{$template}'.");
        }

        $this->_template = $template;
        return $this;
    }

    /**
     * @param $content
     * @return AbstractView
     */
    public function setContent($content): self
    {
        $this->_content = $content;
        return $this;
    }

}