<?php


namespace Codex\Sitemap;

use Codex\Attributes\AttributeType as T;
use Codex\Attributes\AttributeDefinitionRegistry;
use Codex\Attributes\AttributeExtension;

class SitemapAttributeExtension extends AttributeExtension
{
    public function register(AttributeDefinitionRegistry $registry)
    {
        T::STRING;
    }
}
