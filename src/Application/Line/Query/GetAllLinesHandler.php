<?php

namespace App\Application\Line\Query;

use App\Presentation\Builder\LinesTotalBuilder;
use App\Repository\LineRepository;
use App\Service\LineService;

class GetAllLinesHandler
{
    public function __construct(
        private LineRepository $lineRepository,
        private LineService $lineService,
        private LinesTotalBuilder $linesTotalBuilder
    ){}

    public function execute(){
        $lines = $this->lineRepository->findAll();
        $linesData = $this->lineService->findAllLinesData($lines);

        return $this->linesTotalBuilder->makeCollection($linesData);
    }
}