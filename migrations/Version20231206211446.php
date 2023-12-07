<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231206211446 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, description LONGTEXT DEFAULT NULL, niveau DOUBLE PRECISION NOT NULL, date DATE NOT NULL, INDEX IDX_8F91ABF019EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_de_contact (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, description LONGTEXT NOT NULL, objet VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_86B6DA1A19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestations (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestations_options (prestations_id INT NOT NULL, options_id INT NOT NULL, INDEX IDX_49A8D75E8BE96D0D (prestations_id), INDEX IDX_49A8D75E3ADB05F1 (options_id), PRIMARY KEY(prestations_id, options_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postale VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF019EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE demande_de_contact ADD CONSTRAINT FK_86B6DA1A19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE prestations_options ADD CONSTRAINT FK_49A8D75E8BE96D0D FOREIGN KEY (prestations_id) REFERENCES prestations (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestations_options ADD CONSTRAINT FK_49A8D75E3ADB05F1 FOREIGN KEY (options_id) REFERENCES options (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF019EB6921');
        $this->addSql('ALTER TABLE demande_de_contact DROP FOREIGN KEY FK_86B6DA1A19EB6921');
        $this->addSql('ALTER TABLE prestations_options DROP FOREIGN KEY FK_49A8D75E8BE96D0D');
        $this->addSql('ALTER TABLE prestations_options DROP FOREIGN KEY FK_49A8D75E3ADB05F1');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE demande_de_contact');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE prestations');
        $this->addSql('DROP TABLE prestations_options');
        $this->addSql('DROP TABLE user');
    }
}
