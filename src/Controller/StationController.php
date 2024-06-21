<?php

namespace App\Controller;

use App\Application\Station\Command\CreateStationCommand;
use App\Application\Station\Command\CreateStationHandler;
use App\Application\Zone\Command\CreateZoneCommand;
use App\Application\Zone\Command\CreateZoneHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class StationController extends BaseController
{
    public function __construct(
        private SerializerInterface $serializer
    )
    {
    }

    #[Route("/station",name:"createStation",methods: ['POST'])]
    public function createStation(
        Request $request,
        CreateStationHandler $handler
    ){
        $command = $this->serializer->deserialize(
            $request->getContent(),
            CreateStationCommand::class,
            'json'
        );

        $handler->execute($command);

        return $this->json([
            "message" => "Station created successfully."
        ]);
    }

    #[Route("/zone",name:"createZone",methods: ['POST'])]
    public function createZone(
        Request $request,
        CreateZoneHandler $handler
    ){
        /** @var CreateZoneCommand $command */
        $command = $this->serializer->deserialize(
            $request->getContent(),
            CreateZoneCommand::class,
            'json'
        );

        $handler->execute($command);

        return $this->json([
         "message" => "Zone created successfully."
        ]);
    }
}
