<?php

declare(strict_types=1);

/*
 * This file is part of the itoffers.online project.
 *
 * (c) Norbert Orzechowicz <norbert@orzechowicz.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ITOffers\Notifications\Application\Offer;

use Ramsey\Uuid\UuidInterface;

final class Offer
{
    private UuidInterface $id;

    private string $recruiterEmail;

    private string $recruiterName;

    private string $offerSlug;

    private string $specializationSlug;

    private int $seniorityLevel;

    private string $position;

    private string $companyName;

    private string $companyUrl;

    public function __construct(
        UuidInterface $id,
        string $recruiterEmail,
        string $recruiterName,
        string $offerSlug,
        string $specializationSlug,
        int $seniorityLevel,
        string $position,
        string $companyName,
        string $companyUrl
    ) {
        $this->id = $id;
        $this->recruiterEmail = $recruiterEmail;
        $this->recruiterName = $recruiterName;
        $this->offerSlug = $offerSlug;
        $this->specializationSlug = $specializationSlug;
        $this->seniorityLevel = $seniorityLevel;
        $this->companyName = $companyName;
        $this->companyUrl = $companyUrl;
        $this->position = $position;
    }

    public function id() : UuidInterface
    {
        return $this->id;
    }

    public function recruiterEmail() : string
    {
        return $this->recruiterEmail;
    }

    public function recruiterName() : string
    {
        return $this->recruiterName;
    }

    public function offerSlug() : string
    {
        return $this->offerSlug;
    }

    public function specializationSlug() : string
    {
        return $this->specializationSlug;
    }

    public function seniorityLevel() : int
    {
        return $this->seniorityLevel;
    }

    public function position() : string
    {
        return $this->position;
    }

    public function companyName() : string
    {
        return $this->companyName;
    }

    public function companyUrl() : string
    {
        return $this->companyUrl;
    }
}
