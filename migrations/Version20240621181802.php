<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240621181802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE direction (id INT AUTO_INCREMENT NOT NULL, line_id INT DEFAULT NULL, type_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, INDEX IDX_3E4AD1B34D7B7542 (line_id), INDEX IDX_3E4AD1B3C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE direction ADD CONSTRAINT FK_3E4AD1B34D7B7542 FOREIGN KEY (line_id) REFERENCES line (id)');
        $this->addSql('ALTER TABLE direction ADD CONSTRAINT FK_3E4AD1B3C54C8C93 FOREIGN KEY (type_id) REFERENCES direction_type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE direction DROP FOREIGN KEY FK_3E4AD1B34D7B7542');
        $this->addSql('ALTER TABLE direction DROP FOREIGN KEY FK_3E4AD1B3C54C8C93');
        $this->addSql('DROP TABLE direction');
    }
}
