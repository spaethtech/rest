<?php
declare(strict_types=1);

namespace SpaethTech\REST\Annotations;

use SpaethTech\Annotations\Annotation;
use SpaethTech\Annotations\AnnotationReader;
use SpaethTech\Common\Arrays;
use SpaethTech\Common\Patterns;

final class CachedAnnotation extends Annotation
{

    /** @const int Denotes supported annotation targets, defaults to ANY when not explicitly provided! */
    public const SUPPORTED_TARGETS = Annotation::TARGET_CLASS;

    /** @const bool Denotes supporting multiple declarations of this annotation per block, defaults to TRUE! */
    public const SUPPORTED_DUPLICATES = false;

    /**
     * @param array $existing Any existing annotations that were previously parsed from the same declaration.
     * @return array Returns an array of keyword => value(s) parsed by this Annotation implementation.
     */
    public function parse(array $existing = []): array
    {
        $existing["Cached"] = true;
        return $existing;
    }
}
