<?php

declare(strict_types=1);

namespace Doctolib\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Place
{
    private string $id;

    /**
     * @var int[]
     * @SerializedName("practice_ids")
     */
    private array $practiceIds;

    public function __construct(string $id, array $practiceIds)
    {
        $this->id = $id;
        $this->practiceIds = $practiceIds;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPracticeIds(): array
    {
        return $this->practiceIds;
    }
}
