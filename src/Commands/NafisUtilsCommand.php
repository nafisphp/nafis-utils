<?php

namespace Nafisphp\NafisUtils\Commands;

use Illuminate\Console\Command;

class NafisUtilsCommand extends Command
{
    public $signature = 'nafis-utils';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
