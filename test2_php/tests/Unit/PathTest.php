<?php

namespace Tests\Unit;

use App\Path;
use PHPUnit\Framework\TestCase;

class PathTest extends TestCase
{
    public function testCanChangeDirectoryToXPath() : Void
    {
        $path = new Path("/a/b/c/d");
        $path->cd('../x');

        $this->assertEquals("/a/b/c/x", $path->current_path);
    }

    public function testCanGoUpDirectory() : Void
    {
        $path = new Path("/a/b/c/d");
        $path->cd('..');

        $this->assertEquals("/a/b/c", $path->current_path);
    }

}
