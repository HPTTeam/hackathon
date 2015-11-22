<?php
/**
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 *
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Points
 * @version    1.7.3
 * @copyright  Copyright (c) 2010-2012  ()
 * @license
 */


class AW_Points_Adminhtml_HistoryController extends Mage_Adminhtml_Controller_Action
{
    public function transactionHistoryGridAction()
    {
        $customerId = $this->getRequest()->getParam('id', 0);
        $historyTable = $this->getLayout()
            ->createBlock(
                'points/adminhtml_customer_edit_tabs_rewardPoints_history_grid', '', array('customer_id' => $customerId)
            );
        $this->getResponse()->setBody($historyTable->toHtml());
    }
}