<?php declare(strict_types=1);

namespace Docs\Core\Content\Product;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityCustomFieldsTrait;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ProductExtensionEntity extends Entity
{
    use EntityCustomFieldsTrait;
    use EntityIdTrait;

    protected string $customString;

    public function getCustomString(): string
    {
        return $this->customString;
    }

    public function setCustomString(string $customString): void
    {
        $this->customString = $customString;
    }
}