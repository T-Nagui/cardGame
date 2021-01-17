<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\HandService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BaseController.
 */
class HandController
{
    /**
     * @Route("/hand", name="hand")
     * @param HandService $handService
     * @return JsonResponse
     */
    public function getHand(HandService $handService): JsonResponse
    {
        $handService->generateHand();
        return new JsonResponse([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BaseController.php',
        ]);
    }
}
