<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211201230609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, user_id INT DEFAULT NULL, type_abonnement VARCHAR(255) NOT NULL, date_abonnement DATE NOT NULL, INDEX IDX_351268BBA76ED395 (user_id), INDEX IDX_351268BB613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom_candidat VARCHAR(255) NOT NULL, prenom_candidat VARCHAR(255) NOT NULL, email_candidat VARCHAR(255) NOT NULL, numero_telephone_candidat VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_rendu (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, candidat_id INT DEFAULT NULL, user_id INT DEFAULT NULL, non_compte_rendu VARCHAR(255) NOT NULL, date_limite DATE NOT NULL, INDEX IDX_D39E69D2613FECDF (session_id), INDEX IDX_D39E69D2A76ED395 (user_id), INDEX IDX_D39E69D28D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_enseignement (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom_demande VARCHAR(255) NOT NULL, description_demande LONGTEXT NOT NULL, decision TINYINT(1) NOT NULL, url_participation VARCHAR(255) NOT NULL, INDEX IDX_5C1A82B6A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur (id INT AUTO_INCREMENT NOT NULL, nom_formateur VARCHAR(255) NOT NULL, prenom_formateur VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, numero_formateur VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participation (id INT AUTO_INCREMENT NOT NULL, formateur_id INT DEFAULT NULL, nom_participation VARCHAR(255) NOT NULL, objet VARCHAR(255) NOT NULL, contenu_participation LONGTEXT NOT NULL, INDEX IDX_AB55E24F155D8F51 (formateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, nom_promotion VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C11D7DD1613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publicity (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, nom_publicity VARCHAR(255) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, description_pub LONGTEXT NOT NULL, INDEX IDX_9381276613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom_reclamation VARCHAR(255) NOT NULL, etat_reclamation VARCHAR(255) NOT NULL, contenu_reclamation LONGTEXT NOT NULL, date_reclamation DATE NOT NULL, INDEX IDX_CE606404A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, session_id INT DEFAULT NULL, nom_ressource VARCHAR(255) NOT NULL, url_ressource VARCHAR(255) NOT NULL, INDEX IDX_939F4544613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session (id INT AUTO_INCREMENT NOT NULL, nom_session VARCHAR(255) NOT NULL, end_date DATE DEFAULT NULL, description_session LONGTEXT DEFAULT NULL, places_disponibles INT DEFAULT NULL, url_image VARCHAR(255) DEFAULT NULL, categorie_session VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_ressource (id INT AUTO_INCREMENT NOT NULL, nom_type_ressource VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, date_ressource DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE compte_rendu ADD CONSTRAINT FK_D39E69D2613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE compte_rendu ADD CONSTRAINT FK_D39E69D28D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('ALTER TABLE compte_rendu ADD CONSTRAINT FK_D39E69D2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE demande_enseignement ADD CONSTRAINT FK_5C1A82B6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE publicity ADD CONSTRAINT FK_9381276613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_rendu DROP FOREIGN KEY FK_D39E69D28D0EB82');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F155D8F51');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB613FECDF');
        $this->addSql('ALTER TABLE compte_rendu DROP FOREIGN KEY FK_D39E69D2613FECDF');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1613FECDF');
        $this->addSql('ALTER TABLE publicity DROP FOREIGN KEY FK_9381276613FECDF');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544613FECDF');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBA76ED395');
        $this->addSql('ALTER TABLE compte_rendu DROP FOREIGN KEY FK_D39E69D2A76ED395');
        $this->addSql('ALTER TABLE demande_enseignement DROP FOREIGN KEY FK_5C1A82B6A76ED395');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE compte_rendu');
        $this->addSql('DROP TABLE demande_enseignement');
        $this->addSql('DROP TABLE formateur');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE publicity');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE session');
        $this->addSql('DROP TABLE type_ressource');
        $this->addSql('DROP TABLE user');
    }
}
