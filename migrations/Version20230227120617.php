<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227120617 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sejour ADD pays_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F5202874FAEB6C FOREIGN KEY (pays_id_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_96F5202874FAEB6C ON sejour (pays_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F5202874FAEB6C');
        $this->addSql('DROP INDEX IDX_96F5202874FAEB6C ON sejour');
        $this->addSql('ALTER TABLE sejour DROP pays_id_id');
    }
}
