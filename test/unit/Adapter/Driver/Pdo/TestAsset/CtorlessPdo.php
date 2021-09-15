<?php

namespace LaminasTest\Db\Adapter\Driver\Pdo\TestAsset;

use PDO;
use PDOStatement;
use PHPUnit\Framework\MockObject\MockObject;

class CtorlessPdo extends PDO
{
    /**
     * @var PDOStatement
     * @psalm-var PDOStatement&MockObject
     */
    protected $mockStatement;

    /**
     * @param PDOStatement $mockStatement
     * @psalm-param PDOStatement&MockObject $mockStatement
     */
    public function __construct($mockStatement)
    {
        $this->mockStatement = $mockStatement;
    }

    /**
     * @return PDOStatement|false
     */
    public function prepare(string $sql, array $options = []): PDOStatement
    {
        return $this->mockStatement;
    }
}
