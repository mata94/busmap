<?php

namespace App\Controller;

use App\Application\DirectionStation\Command\CreateDirectionStationCommand;
use App\Application\DirectionStation\Command\CreateDirectionStationHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class DirectionStationController extends BaseController
{
    public function __construct(
        private SerializerInterface $serializer
    )
    {
    }

    #[Route("/directionStation",name:"createDirectionStation",methods: ['POST'])]
    public function createDirectionStation(
        Request $request,
        CreateDirectionStationHandler $handler
    ){
        $command = $this->serializer->deserialize(
            $request->getContent(),
            CreateDirectionStationCommand::class,
            'json'
        );

        $handler->execute($command);

        return $this->json([
            "message" => "Direction Station created successfully."
        ]);
    }
}