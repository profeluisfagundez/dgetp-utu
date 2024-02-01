<?php

class RouterHandler
{
    protected $method;
    protected $data;

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function route($controller, $id)
    {
        $resources = new $controller();
        switch ($this->method) {
            case "GET": {
                    if ($id && $id == "create") {
                        $resources->create();
                    } else if ($id && $id == "delete") {
                        $resources->delete();
                    } else if ( $id && $id == "edit") {
                        $resources->edit();
                    } else if ($id) {
                        $resources->show($id);
                    } else {
                        $resources->index();
                    }
                    break;
                }
            case "POST": {
                    $resources->store($this->data);
                    break;
                }
            case "DELETE": {
                    $resources->destroy($this->data);
                    break;
                }
            case "PUT": {
                    $resources->update($this->data);
                    break;
                }
        }
    }
}
