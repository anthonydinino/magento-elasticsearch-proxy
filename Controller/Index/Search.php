<?php declare(strict_types=1);

namespace Aligent\ElasticsearchProxy\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Search implements HttpGetActionInterface
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
        return "Hello";
    }
}
