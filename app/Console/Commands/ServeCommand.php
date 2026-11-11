<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ServeCommand as BaseServeCommand;

class ServeCommand extends BaseServeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'serve';

    /**
     * Get the port for the web server.
     *
     * @return string
     */
    protected function port()
    {
        $port = $this->input->getOption('port') ?: env('SERVER_PORT', 8080);

        return $port + $this->portOffset;
    }
}
