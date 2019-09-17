<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Source;

use MSBios\Config\MySQLSourceConfig;
use MSBios\OrderSourceInterface;

/**
 * Class MySQLOrderSource
 * @package MSBios\Source
 */
class MySQLOrderSource implements OrderSourceInterface
{
    /** @var MySQLSourceConfig */
    protected $config;

    /**
     * MySQLOrderSource constructor.
     * @param MySQLSourceConfig $config
     */
    public function __construct(MySQLSourceConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @param $orderID
     * @return mixed
     */
    public function load($orderID)
    {
        /** @var \PDO $pdo */
        $pdo = new \PDO($this->config->getDns(), $this->config->getUser(), $this->config->getPassword());
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