<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230226195217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F52028A6E44244');
        $this->addSql('DROP INDEX IDX_96F52028A6E44244 ON sejour');
        $this->addSql('ALTER TABLE sejour CHANGE pays_id pays_nom_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F5202879124BB8 FOREIGN KEY (pays_nom_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_96F5202879124BB8 ON sejour (pays_nom_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F5202879124BB8');
        $this->addSql('DROP INDEX IDX_96F5202879124BB8 ON sejour');
        $this->addSql('ALTER TABLE sejour CHANGE pays_nom_id pays_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F52028A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_96F52028A6E44244 ON sejour (pays_id)');
    }
}
