<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Mview\View\State;

interface CollectionInterface
{
    /**
     * Retrieve loaded states
     *
     * @return array
     */
    public function getItems();
}
