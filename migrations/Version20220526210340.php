<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220526210340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dates_conges (id INT AUTO_INCREMENT NOT NULL, employe_id INT NOT NULL, start DATE NOT NULL, end DATE NOT NULL, UNIQUE INDEX UNIQ_D2A495D1B65292 (employe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dates_conges ADD CONSTRAINT FK_D2A495D1B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE fiche_paie CHANGE avances avances VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dates_conges');
        $this->addSql('ALTER TABLE fiche_paie CHANGE avances avances VARCHAR(255) DEFAULT \'0.000\'');
    }
}
