<?php
// src/AppBundle/DataFixtures/ORM/LoadTaskReferential.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\TaskReferential;

class LoadTaskReferential implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $names = array(
      'Analyse',
      'Conception',
      'Developpement',
      'Test',
      'validation',
      'Intégration',
      'maintenance'
    );

    foreach ($names as $name) {
      $taskRef = new TaskReferential();
      $taskRef->setLabel($name);

      $manager->persist($taskRef);
    }

    $manager->flush();
  }
}
