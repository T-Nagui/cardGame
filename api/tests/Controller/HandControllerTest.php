<?php
declare(strict_types=1);

namespace App\Tests\Controller;

use App\Controller\HandController;
use App\Service\HandService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class BaseControllerTest.
 */
class HandControllerTest extends TestCase
{
    /**
     * @var HandService|MockObject
     */
    private $handService;

    public function setUp(): void
    {
        $this->handService = $this->createMock(HandService::class);

    }

    public function testShouldRetournCards()
    {
        $cards = new HandController();
        $result = $cards->getHand($this->handService);
        $this->assertInstanceOf(JsonResponse::class, $result);
    }
}
