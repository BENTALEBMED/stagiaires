<?php

namespace App\Factory;

use App\Entity\Formateur;
use App\Repository\FormateurRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Formateur>
 *
 * @method static Formateur|Proxy createOne(array $attributes = [])
 * @method static Formateur[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Formateur[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Formateur|Proxy find(object|array|mixed $criteria)
 * @method static Formateur|Proxy findOrCreate(array $attributes)
 * @method static Formateur|Proxy first(string $sortedField = 'id')
 * @method static Formateur|Proxy last(string $sortedField = 'id')
 * @method static Formateur|Proxy random(array $attributes = [])
 * @method static Formateur|Proxy randomOrCreate(array $attributes = [])
 * @method static Formateur[]|Proxy[] all()
 * @method static Formateur[]|Proxy[] findBy(array $attributes)
 * @method static Formateur[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Formateur[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static FormateurRepository|RepositoryProxy repository()
 * @method Formateur|Proxy create(array|callable $attributes = [])
 */
final class FormateurFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'nom' => self::faker()->firstname(),
            'prenom' => self::faker()->lastname(),
            'cin' => self::faker()->text(30),
            'email' => self::faker()->freeEmail(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Formateur $formateur): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Formateur::class;
    }
}
