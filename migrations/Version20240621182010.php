<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240621182010 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE direction_station (id INT AUTO_INCREMENT NOT NULL, direction_id INT DEFAULT NULL, station_id INT DEFAULT NULL, number INT DEFAULT NULL, INDEX IDX_E6EEF94AF73D997 (direction_id), INDEX IDX_E6EEF9421BDB235 (station_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE direction_station ADD CONSTRAINT FK_E6EEF94AF73D997 FOREIGN KEY (direction_id) REFERENCES direction (id)');
        $this->addSql('ALTER TABLE direction_station ADD CONSTRAINT FK_E6EEF9421BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE direction_station DROP FOREIGN KEY FK_E6EEF94AF73D997');
        $this->addSql('ALTER TABLE direction_station DROP FOREIGN KEY FK_E6EEF9421BDB235');
        $this->addSql('DROP TABLE direction_station');
    }
}
