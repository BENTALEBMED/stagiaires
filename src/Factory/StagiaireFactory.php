<?php

namespace App\Factory;

use App\Entity\Stagiaire;
use App\Repository\StagiaireRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Stagiaire>
 *
 * @method static Stagiaire|Proxy createOne(array $attributes = [])
 * @method static Stagiaire[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Stagiaire[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Stagiaire|Proxy find(object|array|mixed $criteria)
 * @method static Stagiaire|Proxy findOrCreate(array $attributes)
 * @method static Stagiaire|Proxy first(string $sortedField = 'id')
 * @method static Stagiaire|Proxy last(string $sortedField = 'id')
 * @method static Stagiaire|Proxy random(array $attributes = [])
 * @method static Stagiaire|Proxy randomOrCreate(array $attributes = [])
 * @method static Stagiaire[]|Proxy[] all()
 * @method static Stagiaire[]|Proxy[] findBy(array $attributes)
 * @method static Stagiaire[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Stagiaire[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static StagiaireRepository|RepositoryProxy repository()
 * @method Stagiaire|Proxy create(array|callable $attributes = [])
 */
final class StagiaireFactory extends ModelFactory
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
            'cne' => self::faker()->text(30),
            'email' => self::faker()->freeEmail(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Stagiaire $stagiaire): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Stagiaire::class;
    }
}
