<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RoutesTest extends TestCase
{
    use DatabaseMigrations;

    private $routes = [];

    public function setUp(): void
    {
        parent::setUp();
        // get and returns all returns route collection
        $allRoutes = collect(app('router')->getRoutes());
        $webRoutes = $allRoutes->filter(fn ($collection) => in_array('web', $collection->action['middleware']));
        foreach ($webRoutes as $route) {
            $this->routes[] = $route->uri;
        }
    }

    /**
     * Loop through the list of routes
     * Assert that ok status is returned
     *
     * @return void
     */
    public function testRoutes(): void
    {
        foreach ($this->routes as $route) {
            $response = $this->get($route);
            $response->assertOk();
        }
    }
}
