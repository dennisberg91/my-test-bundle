<?php declare(strict_types=1);

namespace MichielBakker\MyTestBundle\Service;

class MessageBuilder
{
    private string $prefix = 'Default Prefix';

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * @param string $name
     */
    public function printMessage(string $name): string
    {
        return sprintf('%s %s!', $this->prefix, $name);
    }
}
