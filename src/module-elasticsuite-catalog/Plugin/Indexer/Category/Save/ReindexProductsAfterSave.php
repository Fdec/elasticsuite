<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCatalog
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticSuiteCatalog\Plugin\Indexer\Category\Save;

use Smile\ElasticSuiteCatalog\Plugin\Indexer\AbstractIndexerPlugin;

/**
 * Plugin that proceed products reindex after category reindexing
 *
 * @category Smile
 * @package  Smile_ElasticSuiteCatalog
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class ReindexProductsAfterSave extends AbstractIndexerPlugin
{
    /**
     * Reindex category's products after reindexing the category
     *
     * @param \Magento\Catalog\Model\Category $subject The cateogry being reindexed
     * @param callable                        $proceed The parent function we are plugged on
     *                                                 : Magento\Catalog\Model\Category::reindex()
     *
     * @return \Magento\Catalog\Model\Category
     */
    public function aroundReindex(
        \Magento\Catalog\Model\Category $subject,
        callable $proceed
    ) {
        $proceed();

        if (!empty($subject->getAffectedProductIds())) {
            $this->processFullTextIndex($subject->getAffectedProductIds());
        }

        return;
    }
}
