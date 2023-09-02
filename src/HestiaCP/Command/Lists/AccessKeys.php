<?php

namespace HestiaCP\Command\Lists;

use HestiaCP\Command\ListCommand;

class AccessKeys extends ListCommand {

    /** @var string */
    private $user;

    public function __construct(string $user) {
        $this->user = $user;
    }

    public function getName(): string {
        return 'v-list-access-keys';
    }

    public function getRequestParams(): array {
        return [
            self::ARG_1 => $this->user,
            self::ARG_2 => self::FORMAT_JSON
        ];
    }
}