<?php 

if (! function_exists('base_url')) {
    function base_url($uri = null, $protocol = null)
    {
        $config = config('App');

        $url = new \CodeIgniter\HTTP\URI($config->baseURL);

        if ($uri) {
            $url = $url->resolveRelativeURI($uri);
        }

        if ($protocol !== null) {
            $url->setScheme($protocol);
        }

        return (string) $url;
    }
}
