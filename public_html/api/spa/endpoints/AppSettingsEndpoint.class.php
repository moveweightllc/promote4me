<?php

namespace Promote4Me;

require_once(realpath(dirname(__FILE__) . '/../common/Endpoint.class.php'));
require_once(realpath(dirname(__FILE__) . '/../common/Util.class.php'));

class AppSettingsEndpoint extends Endpoint
{
    public function handle_get($req)
    {
        $this->networkUtil->sendApiHeaders();

        $getAppSettings = $this->db->get_app_settings();

        http_response_code(200);

        echo Util::safe_json_encode($getAppSettings);
    }
}
