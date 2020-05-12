<?php
namespace Tests;

use Scrawler\Scrawler;
use Symfony\Component\HttpFoundation\Request;
use Scrawler\Service\Database;
use Scrawler\Service\Module;
use Scrawler\Service\Template;
use Scrawler\Service\Cache;
use Scrawler\Service\Session;
use Scrawler\Service\Mailer;
use Scrawler\Router\RouteCollection;
use Scrawler\Router\RouterEngine;

class ScrawlerTest extends TestCase
{
  function  testInstanceOf(){
      $scrawler  = new Scrawler();
      $this->assertInstanceOf(Cache::class, $scrawler->cache());

  }
}