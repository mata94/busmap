<?php

namespace App\Controller;

use App\Application\Line\Command\CreateLineCommand;
use App\Application\Line\Command\CreateLineHandler;
use App\Application\Line\Query\GetAllLinesHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class LineController extends BaseController
{
    public function __construct(
        private SerializerInterface $serializer
    )
    {
    }

    #[Route("/line",name:"createLine",methods: ['POST'])]
    public function createLine(
        Request $request,
        CreateLineHandler $handler
    ){
        $command = $this->serializer->deserialize(
            $request->getContent(),
            CreateLineCommand::class,
            'json'
        );

        $handler->execute($command);

        return $this->json([
            "message" => "Line successfully created."
            ]
        );
    }

    #[Route("/lines",name:"getAllLinesData",methods: ['GET'])]
    public function getAllLines(
        GetAllLinesHandler $handler
    ){
        $lines = $handler->execute();

        return $this->json([
            "lines" => $lines
        ]);
    }
}