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
    /** @var string */
    protected $_template;

    /** @var string */
    protected $_content;

    /**
     * AbstractView constructor.
     * @param null $template
     */
    public function __construct($template = null)
    {
        if (null !== $template) {
            $this->setTemplate($template);
        }

    }

    /**
     * @param string $template
     * @return AbstractView
     */
    public function setTemplate(string $template): self
    {
        if (!file_exists($template)) {
            throw new InvalidArgumentException("Invalid template '{$template}'.");
        }

        $this->_template = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->_template;
    }

    /**
     * @param string $content
     * @return AbstractView
     */
    public function setContent(string $content): self
    {
        $this->_content = $content;
        return $this;
    }

    /**
     * @return string
     */
    protected function _render(): string
    {
        if ($this->_template !== null) {
            extract(['content' => $this->_content]);
            ob_start();
            include($this->_template);
            return ob_get_clean();
        }

        return '';
    }

}