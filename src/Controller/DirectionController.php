<?php

namespace App\Controller;

use App\Application\Direction\CreateDirectionCommand;
use App\Application\Direction\CreateDirectionHandler;
use App\Application\DirectionType\Command\CreateDirectionTypeCommand;
use App\Application\DirectionType\Command\CreateDirectionTypeHandler;
use App\Repository\BaseRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class DirectionController extends BaseController
{
    public function __construct(
        private SerializerInterface $serializer
    )
    {}

    #[Route("/directionType",name:"createDirectionType",methods:['POST'])]
    public function createDirectionType(
        Request $request,
        CreateDirectionTypeHandler $handler
    ){
        $command = $this->serializer->deserialize(
            $request->getContent(),
            CreateDirectionTypeCommand::class,
            'json'
        );

        $handler->execute($command);

        return $this->json([
            "message" => "Direction type created successfully."
        ]);
    }

    #[Route("/direction",name:"createDirection",methods:['POST'])]
    public function createDirection(
        Request $request,
        CreateDirectionHandler $handler
    ){
        $command = $this->serializer->deserialize(
            $request->getContent(),
            CreateDirectionCommand::class,
            'json'
        );

        $handler->execute($command);

        return $this->json([
            "message" => "Direction created successfully."
        ]);
    }
}