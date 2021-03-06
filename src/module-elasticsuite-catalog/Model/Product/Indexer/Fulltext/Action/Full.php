<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCatalog
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticSuiteCatalog\Model\Product\Indexer\Fulltext\Action;

use Smile\ElasticSuiteCatalog\Model\ResourceModel\Product\Indexer\Fulltext\Action\Full as ResourceModel;

/**
 * ElasticSearch product full indexer.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCatalog
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
class Full
{
    /**
     * @var \Smile\ElasticSuiteCatalog\Model\ResourceModel\Product\Indexer\Fulltext\Action\Full
     */
    private $resourceModel;

    /**
     * Constructor.
     *
     * @param ResourceModel $resourceModel Indexer resource model.
     */
    public function __construct(ResourceModel $resourceModel)
    {
        $this->resourceModel = $resourceModel;
    }

    /**
     * Get data for a list of product in a store id.
     * If the product list ids is null, all products data will be loaded.
     *
     * @param integer    $storeId    Store id.
     * @param array|null $productIds List of product ids.
     *
     * @return Generator
     */
    public function rebuildStoreIndex($storeId, $productIds = null)
    {
        $lastProductId = 0;

        do {
            $products = $this->getSearchableProducts($storeId, $productIds, $lastProductId);

            foreach ($products as $productData) {
                $lastProductId = (int) $productData['entity_id'];
                yield $lastProductId => $productData;
            }
        } while (!empty($products));
    }

    /**
     * Load a bulk of product data.
     *
     * @param int     $storeId    Store id.
     * @param string  $productIds Product ids filter.
     * @param integer $fromId     Load product with id greater than.
     * @param integer $limit      Number of product to get loaded.
     *
     * @return array
     */
    private function getSearchableProducts($storeId, $productIds = null, $fromId = 0, $limit = 100)
    {
        return $this->resourceModel->getSearchableProducts($storeId, $productIds, $fromId, $limit);
    }
}
