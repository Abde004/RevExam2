<?php

namespace Tests\Unit;

use App\Services\CalculateurPrix;
use PHPUnit\Framework\TestCase;

class CalculateurPrixTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_calcul_prix_avec_taxe_standard(): void
    {
        // Arrange
        $calculateur = new CalculateurPrix;

        // Act
        $resultat = $calculateur->calculerAvecTaxe(100.00, 0.15);

        // Assert
        $this->assertEquals(115.00, $resultat);
    }
}
