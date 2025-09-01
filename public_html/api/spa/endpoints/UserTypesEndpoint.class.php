<?php

namespace Promote4Me;

require_once(realpath(dirname(__FILE__) . '/../common/Endpoint.class.php'));
require_once(realpath(dirname(__FILE__) . '/../common/Util.class.php'));

class UserTypesEndpoint extends Endpoint
{
    public function handle_get($req)
    {
        $this->networkUtil->sendApiHeaders();

        $getUserTypes = $this->db->get_user_types_all();

        http_response_code(200);

        echo Util::safe_json_encode($getUserTypes);
    }
}
