<?php
/**
 * This simple command shows the basics of how to add a new top-level command to Terminus.
 */

namespace Pantheon\TerminusCarbon\Commands;

use Carbon\Carbon;
use Pantheon\Terminus\Commands\TerminusCommand;

/**
 * Use Carbon to do something trivial
 */
class CarbonCommand extends TerminusCommand
{
    /**
     * Print the classic message to the log and tell the user what day it is.
     *
     * @command carbon
     */
    function carbon()
    {
        $this->log()->notice("Hello, World! It is now {now}.", ['now' => Carbon::now()->toDateTimeString()]);
    }
}
