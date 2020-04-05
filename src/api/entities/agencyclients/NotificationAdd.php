<?php

namespace perf2k2\direct\api\entities\agencyclients;

use perf2k2\direct\api\entities\clients\EmailSubscriptionItem;
use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\LangEnum;

class NotificationAdd extends Entity
{
    protected $Lang;
    protected $Email;
    protected $EmailSubscriptions;

    /**
     * @param LangEnum $Lang
     * @param string $Email
     * @param EmailSubscriptionItem[] $EmailSubscriptions
     */
    public function __construct(LangEnum $Lang, string $Email, array $EmailSubscriptions)
    {
        $this->Lang = $Lang;
        $this->Email = $Email;
        $this->EmailSubscriptions = $EmailSubscriptions;
    }
}