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
    /** @var OrderSourceInterface */
    protected $source;

    /**
     * OrderRepository constructor.
     * @param OrderSourceInterface $source
     *
     * Принцип открытости/закрытости (Open-closed)
     */
    public function __construct(OrderSourceInterface $source)
    {
        $this->setSource($source);
    }

    /**
     * @param OrderSourceInterface $source
     * @return $this
     */
    public function setSource(OrderSourceInterface $source)
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