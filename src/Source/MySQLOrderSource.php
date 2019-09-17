<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Source;

use MSBios\IOrderSource;

/**
 * Class MySQLOrderSource
 * @package MSBios\Source
 */
class MySQLOrderSource implements IOrderSource
{

    /**
     * @param $orderID
     * @return mixed
     */
    public function load($orderID)
    {
        $pdo = new \PDO($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
        $statement = $pdo->prepare('SELECT * FROM `orders` WHERE id=:id');
        $statement->execute([':id' => $orderID]);
        return $query->fetchObject('Order');
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