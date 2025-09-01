<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createAccount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAccount extends AbstractStructBase
{
    /**
     * The account
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account = null;
    /**
     * Constructor method for createAccount
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account
     * @uses CreateAccount::setAccount()
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\CreateAccount
     */
    public function setAccount(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AccountType $account = null): self
    {
        $this->account = $account;
        
        return $this;
    }
}
