<?php

namespace Magento\Config\Test\Constraint;

use Magento\Mtf\Constraint\AbstractConstraint;
use Magento\Config\Test\Page\Adminhtml\AdminAccountSharing;

/**
 * Assert Admin account sharing is available in Stores>Configuration>advanced>admin grid.
 */
class AssertAdminAccountSharing extends AbstractConstraint
{
    /**
     * Assert Admin account sharing is available in Stores>Configuration>advanced>admin grid.
     * @param AdminAccountSharing $adminAccountSharing
     */
    public function processAssert(AdminAccountSharing $adminAccountSharing)
    {
       \PHPUnit_Framework_Assert::assertTrue(
            $adminAccountSharing->getAdminForm()->AdminAccountSharingAvailability(),
            'Admin Account Sharing Option is not available'
        );
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Admin account sharing is available is present in in Stores>Configuration>advanced>admin grid.';
    }
}