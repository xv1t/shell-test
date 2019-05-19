<?php

namespace ShellTest\Shell;

use Cake\Console\Shell;

class ShellTest extends Shell {
    public function main()
    {
        $this->out('<warning>Fire!!!</warning>');
    }
}
