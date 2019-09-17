<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Source;

use MSBios\OrderSourceInterface;

/**
 * Class ApiOrderSource
 * @package MSBios\Source
 */
class ApiOrderSource implements OrderSourceInterface
{
    /**
     * @param $orderID
     * @return mixed
     */
    public function load($orderID)
    {
        // TODO: Implement load() method.
    }

    /**
     * @param $order
     * @return mixed
     */
    public function save($order)
    {
        // TODO: Implement save() method.
    }

    /**
     * @param $order
     * @return mixed
     */
    public function update($order)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $order
     * @return mixed
     */
    public function delete($order)
    {
        // TODO: Implement delete() method.
    }
}