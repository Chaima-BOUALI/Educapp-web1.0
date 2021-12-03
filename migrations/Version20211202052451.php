<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202052451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_enseignement ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE promotion ADD pourcentage VARCHAR(255) DEFAULT NULL, ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE publicity ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP image');
        $this->addSql('ALTER TABLE demande_enseignement DROP image');
        $this->addSql('ALTER TABLE promotion DROP pourcentage, DROP image');
        $this->addSql('ALTER TABLE publicity DROP image');
        $this->addSql('ALTER TABLE reclamation DROP image');
    }
}
