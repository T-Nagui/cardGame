<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Cards;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class CardFixtures.
 */
class CardFixtures extends Fixture
{
    private const TYPES = [
        'carreaux', 'coeur', 'pique', 'trefle',
    ];

    private const CARDS = [
        'As', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Valet', 'Dame', 'Roi',
    ];

    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach (self::TYPES as $type) {
            echo $type;
            foreach (self::CARDS as $key => $card) {
                $cards = new Cards();
                $cards->setName($card)
                    ->setValue($key + 1)
                    ->setType($type);
                $manager->persist($cards);
            }
        }

        $manager->flush();
    }
}
