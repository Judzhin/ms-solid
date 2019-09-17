<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

/**
 * Class OrderRepository
 * @package MSBios
 */
class OrderRepository
{
    /** @var IOrderSource */
    protected $source;

    /**
     * OrderRepository constructor.
     * @param IOrderSource $source
     *
     * Принцип открытости/закрытости (Open-closed)
     */
    public function __construct(IOrderSource $source)
    {
        $this->setSource($source);
    }

    /**
     * @param IOrderSource $source
     * @return $this
     */
    public function setSource(IOrderSource $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @param $orderID
     * @return mixed
     */
    public function load($orderID)
    {
        return $this->source->load($orderID);
    }

    public function save($order){/*...*/}
    public function update($order){/*...*/}
    public function delete($order){/*...*/}
}