<?php

declare(strict_types=1);

namespace MarketMedia\Plates\Tests\Template;

use MarketMedia\Plates\Template\FileExtension;
use PHPUnit\Framework\TestCase;

class FileExtensionTest extends TestCase
{
    private $fileExtension;

    protected function setUp(): void
    {
        $this->fileExtension = new FileExtension();
    }

    public function testCanCreateInstance()
    {
        $this->assertInstanceOf('MarketMedia\Plates\Template\FileExtension', $this->fileExtension);
    }

    public function testSetFileExtension()
    {
        $this->assertInstanceOf('MarketMedia\Plates\Template\FileExtension', $this->fileExtension->set('tpl'));
        $this->assertSame('tpl', $this->fileExtension->get());
    }

    public function testSetNullFileExtension()
    {
        $this->assertInstanceOf('MarketMedia\Plates\Template\FileExtension', $this->fileExtension->set(null));
        $this->assertNull($this->fileExtension->get());
    }

    public function testGetFileExtension()
    {
        $this->assertSame('php', $this->fileExtension->get());
    }
}
