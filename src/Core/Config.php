<?php 

namespace Paw\Core;

class Config 
{
    private array $configs;

    public function __construct()
    {
        $this -> configs["LOG_LEVEL"] = getenv("LOG_LEVEL", "INFO");
        $paths = getenv("LOG_PATH", "/logs/app.log");
        $this -> configs["LOG_PATH"] = $this -> joinPaths('..', $paths);
    }

    public function joinPaths()
    {
        $paths = array();
        foreach (func_get_args() as $arg){
            if($arg != ''){
                $paths[] = $arg;

            }
        }
        return preg_replace('#/+#','/', join('/', $paths));
    }


    public function get ($name)
    {
        return $this -> configs[$name] ?? null; 
    }
}