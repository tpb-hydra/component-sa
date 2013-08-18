<?php
namespace Hydra\Component\StaticAssets;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Symfony\Component\Yaml\Yaml;


class StaticAssets implements ServiceProviderInterface
{
    protected $path;
    public function __construct($path) {
      $this->path = $path;
    }

    public function fetch($file) {
      return file_get_contents($this->path . '/' . $file);
    }

    public function register(Application $app) {
       $app['static'] = $this;
    }

    public function boot(Application $app) {
    }
}
?>
