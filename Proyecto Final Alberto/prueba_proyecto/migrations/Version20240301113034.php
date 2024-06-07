<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301113034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495A921E97');
        $this->addSql('ALTER TABLE pista DROP FOREIGN KEY FK_5E8F946E5A921E97');
        $this->addSql('DROP TABLE alquiler');
        $this->addSql('DROP TABLE pista');
        $this->addSql('DROP INDEX IDX_8D93D6495A921E97 ON user');
        $this->addSql('ALTER TABLE user DROP alquiler_id, CHANGE correo email VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alquiler (id INT AUTO_INCREMENT NOT NULL, hora INT NOT NULL, dia VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pista (id INT AUTO_INCREMENT NOT NULL, alquiler_id INT DEFAULT NULL, tipo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_5E8F946E5A921E97 (alquiler_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pista ADD CONSTRAINT FK_5E8F946E5A921E97 FOREIGN KEY (alquiler_id) REFERENCES alquiler (id)');
        $this->addSql('ALTER TABLE user ADD alquiler_id INT DEFAULT NULL, CHANGE email correo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495A921E97 FOREIGN KEY (alquiler_id) REFERENCES alquiler (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6495A921E97 ON user (alquiler_id)');
    }
}
