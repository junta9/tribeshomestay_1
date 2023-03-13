<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313115520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE photos_sejours (id INT AUTO_INCREMENT NOT NULL, sejour_id_id INT DEFAULT NULL, files VARCHAR(255) NOT NULL, INDEX IDX_AD9C1D919764F843 (sejour_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE photos_sejours ADD CONSTRAINT FK_AD9C1D919764F843 FOREIGN KEY (sejour_id_id) REFERENCES sejour (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photos_sejours DROP FOREIGN KEY FK_AD9C1D919764F843');
        $this->addSql('DROP TABLE photos_sejours');
    }
}
