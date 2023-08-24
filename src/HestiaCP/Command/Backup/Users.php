<?php

namespace HestiaCP\Command\Backup;

use HestiaCP\Command\ListCommand;

class Users extends ListCommand {

	public function getName(): string {
		return 'v-backup-users';
	}

	public function getRequestParams(): array {
		return [
			self::ARG_1 => self::FORMAT_JSON
		];
	}
}
