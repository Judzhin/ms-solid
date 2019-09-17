<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Config;


class MySQLSourceConfig
{
    /** @var string */
    protected $dns;

    /** @var string */
    protected $user;

    /** @var string */
    protected $password;

    /**
     * MySQLSourceConfig constructor.
     *
     * @param string $dns
     * @param string $user
     * @param string $password
     */
    public function __construct(string $dns, string $user, string $password)
    {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDns(): string
    {
        return $this->dns;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}