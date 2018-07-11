<?php
declare(strict_types=1);

namespace direct\transport;

class Connection
{
    public function send(Request $request): Response
    {
        return new Response(1, '1/2/3');
    }
}