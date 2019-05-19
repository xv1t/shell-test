<?php

namespace ShellTest\Shell;

use Cake\Console\Shell;

class PoleShell extends Shell {
    public function main()
    {
        $this->out('<warning>Fire!!!</warning>');
    }
}
