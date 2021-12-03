<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211203005853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement CHANGE date_abonnement date_abonnement DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE session CHANGE end_date end_date DATE DEFAULT NULL, CHANGE url_image url_image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement CHANGE date_abonnement date_abonnement DATE NOT NULL');
        $this->addSql('ALTER TABLE session CHANGE end_date end_date DATE NOT NULL, CHANGE url_image url_image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
