<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

/**
 * Interface OrderSourceInterface
 * @package MSBios
 */
interface OrderSourceInterface
{
    /**
     * @param $orderID
     * @return mixed
     */
    public function load($orderID);

    /**
     * @param $order
     * @return mixed
     */
    public function save($order);


    /**
     * @param $order
     * @return mixed
     */
    public function update($order);

    /**
     * @param $order
     * @return mixed
     */
    public function delete($order);
}