<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220520124250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE pointage_employe');
        $this->addSql('ALTER TABLE pointage ADD employe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pointage ADD CONSTRAINT FK_7591B201B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7591B201B65292 ON pointage (employe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pointage_employe (pointage_id INT NOT NULL, employe_id INT NOT NULL, INDEX IDX_89421D891B65292 (employe_id), INDEX IDX_89421D89E58DA11D (pointage_id), PRIMARY KEY(pointage_id, employe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pointage_employe ADD CONSTRAINT FK_89421D891B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pointage_employe ADD CONSTRAINT FK_89421D89E58DA11D FOREIGN KEY (pointage_id) REFERENCES pointage (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pointage DROP FOREIGN KEY FK_7591B201B65292');
        $this->addSql('DROP INDEX UNIQ_7591B201B65292 ON pointage');
        $this->addSql('ALTER TABLE pointage DROP employe_id');
    }
}
