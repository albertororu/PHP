<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301112000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alquiler (id INT AUTO_INCREMENT NOT NULL, hora INT NOT NULL, dia VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pista ADD alquiler_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pista ADD CONSTRAINT FK_5E8F946E5A921E97 FOREIGN KEY (alquiler_id) REFERENCES alquiler (id)');
        $this->addSql('CREATE INDEX IDX_5E8F946E5A921E97 ON pista (alquiler_id)');
        $this->addSql('ALTER TABLE user ADD alquiler_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495A921E97 FOREIGN KEY (alquiler_id) REFERENCES alquiler (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6495A921E97 ON user (alquiler_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pista DROP FOREIGN KEY FK_5E8F946E5A921E97');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495A921E97');
        $this->addSql('DROP TABLE alquiler');
        $this->addSql('DROP INDEX IDX_5E8F946E5A921E97 ON pista');
        $this->addSql('ALTER TABLE pista DROP alquiler_id');
        $this->addSql('DROP INDEX IDX_8D93D6495A921E97 ON user');
        $this->addSql('ALTER TABLE user DROP alquiler_id');
    }
}
