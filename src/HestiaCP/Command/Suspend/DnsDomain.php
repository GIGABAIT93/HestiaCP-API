<?php

namespace HestiaCP\Command\Suspend;

use HestiaCP\Command\ProcessCommand;

class DnsDomain extends ProcessCommand
{

    /** @var string */
    private $user;

    /** @var string */
    private $domain;

    /** @var bool */
    private $restart;

    public function __construct(string $user, string $domain, bool $restart = false)
    {
        $this->user = $user;
        $this->domain = $domain;
        $this->restart = $restart;
    }

    public function getName(): string
    {
        return 'v-suspend-dns-domain';
    }

    public function getRequestParams(): array
    {
        return [
            self::ARG_1 => $this->user,
            self::ARG_2 => $this->domain,
            self::ARG_3 => $this->convertBool($this->restart)
        ];
    }
}