<?php

namespace Promote4Me;

require_once(realpath(dirname(__FILE__) . '/../common/Endpoint.class.php'));

class InfoEndpoint extends Endpoint
{
    public function handle_get($req)
    {
        $this->networkUtil->sendContentHeaders();

        http_response_code(200);

        phpinfo();
    }
}
