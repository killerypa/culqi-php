<?php
namespace Culqi;

class Devoluciones extends Resource {

    const URL_REFUND = "/cargos/devoluciones/";

    public function create($options = NULL)
    {
        return $this->request("POST", self::URL_REFUND, $api_key = $this->culqi->api_key, $options);
    }

    public function getList($options = NULL)
    {
        return $this->request("GET", self::URL_REFUND, $api_key = $this->culqi->api_key, $options);
    }

    public function get($id)
    {
        return $this->request("GET", self::URL_REFUND . $id . "/", $api_key = $this->culqi->api_key);
    }

}
