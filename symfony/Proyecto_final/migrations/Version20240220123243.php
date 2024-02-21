<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240220123243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alquiler (id INT AUTO_INCREMENT NOT NULL, id_usuario_id INT NOT NULL, id_pista_id INT NOT NULL, dia VARCHAR(255) NOT NULL, hora INT NOT NULL, INDEX IDX_655BED397EB2C349 (id_usuario_id), INDEX IDX_655BED391CF91E7E (id_pista_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE alquiler ADD CONSTRAINT FK_655BED397EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE alquiler ADD CONSTRAINT FK_655BED391CF91E7E FOREIGN KEY (id_pista_id) REFERENCES pista (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alquiler DROP FOREIGN KEY FK_655BED397EB2C349');
        $this->addSql('ALTER TABLE alquiler DROP FOREIGN KEY FK_655BED391CF91E7E');
        $this->addSql('DROP TABLE alquiler');
    }
}
