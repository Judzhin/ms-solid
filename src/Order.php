<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios;

/**
 * Class Order
 * @package MSBios
 *
 * Принцип единственной ответственности (Single responsibility)
 */
class Order
{
    /**
     *
     */
    public function calculateTotalSum()
    {
        // ...
    }

    /**
     *
     */
    public function getItems()
    {
        // ...
    }

    /**
     *
     */
    public function getItemCount()
    {
        // ...
    }

    /**
     * @param $item
     */
    public function addItem($item)
    {
        // ...
    }

    /**
     * @param $item
     */
    public function deleteItem($item)
    {
        // ...
    }

    // Move to OrderViewer
    // public function printOrder(){}
    // public function showOrder(){}

    // Move to OrderRepository
    // public function load(){}
    // public function save(){}
    // public function update(){}
    // public function delete(){}
}