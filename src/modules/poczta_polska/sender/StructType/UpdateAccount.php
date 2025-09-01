<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateAccount extends AbstractStructBase
{
    /**
     * The account
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account = null;
    /**
     * Constructor method for updateAccount
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account
     * @uses UpdateAccount::setAccount()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account = null)
    {
        $this
            ->setAccount($account);
    }
    /**
     * Get account value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType|null
     */
    public function getAccount(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account
     * @return \XOzymandias\Yii2Postal\sender\StructType\UpdateAccount
     */
    public function setAccount(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
}
