<?php

declare(strict_types=1);

namespace Doctolib\Model;

class Booking
{
    private Profile $profile;

    /**
     * @var Agenda[]
     */
    private array $agendas;

    /**
     * @var Place[]
     */
    private array $places;

    /**
     * @param Agenda[] $agendas
     */
    public function __construct(Profile $profile, array $agendas, array $places)
    {
        $this->profile = $profile;
        $this->agendas = $agendas;
        $this->places = $places;
    }

    public function getProfile(): Profile
    {
        return $this->profile;
    }

    /**
     * @return Agenda[]
     */
    public function getAgendas(): array
    {
        return $this->agendas;
    }

    /**
     * @return Place[]
     */
    public function getPlaces(): array
    {
        return $this->places;
    }

    /**
     * @return VisitMotive[]
     */
    public function getVisitMotives(): array
    {
        $visitMotives = [];

        foreach ($this->agendas as $agenda) {
            foreach ($agenda->getVisitMotives() as $visitMotive) {
                $visitMotives[] = $visitMotive;
            }
        }

        return $visitMotives;
    }
}
