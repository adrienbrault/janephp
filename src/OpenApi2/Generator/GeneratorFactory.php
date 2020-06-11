<?php

namespace Jane\OpenApi2\Generator;

use InvalidArgumentException;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\OpenApi2\Generator\Parameter\BodyParameterGenerator;
use Jane\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\OpenApi2\Naming\OperationUrlNaming;
use Jane\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\OpenApiCommon\Naming\OperationIdNaming;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GeneratorFactory
{
    public static function build(DenormalizerInterface $serializer, string $endpointGeneratorClass): GeneratorInterface
    {
        $parserFactory = new ParserFactory();
        $parser = $parserFactory->create(ParserFactory::PREFER_PHP7);

        $bodyParameter = new BodyParameterGenerator($parser, $serializer);
        $nonBodyParameter = new NonBodyParameterGenerator($parser);
        $exceptionGenerator = new ExceptionGenerator();
        $operationNaming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);

        if (!class_exists($endpointGeneratorClass)) {
            throw new InvalidArgumentException(sprintf('Unknown generator class %s', $endpointGeneratorClass));
        }

        $psr7EndpointGenerator = new $endpointGeneratorClass($operationNaming, $bodyParameter, $nonBodyParameter, $serializer, $exceptionGenerator);
        $psr7OperationGenerator = new Psr7OperationGenerator($psr7EndpointGenerator);

        return new Psr18ClientGenerator($psr7OperationGenerator, $operationNaming);
    }
}
