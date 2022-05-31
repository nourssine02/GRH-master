<?php
declare(strict_types=1);
namespace DoctrineMigrations;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220531165107 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employe_pointage (employe_id INT NOT NULL, pointage_id INT NOT NULL, INDEX IDX_4842E61E1B65292 (employe_id), INDEX IDX_4842E61EE58DA11D (pointage_id), PRIMARY KEY(employe_id, pointage_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pointage (id INT AUTO_INCREMENT NOT NULL, employe_id INT DEFAULT NULL, date_pointage DATETIME NOT NULL, total INT DEFAULT NULL, liste_jours LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', mois VARCHAR(255) NOT NULL, INDEX IDX_7591B201B65292 (employe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employe_pointage ADD CONSTRAINT FK_4842E61E1B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employe_pointage ADD CONSTRAINT FK_4842E61EE58DA11D FOREIGN KEY (pointage_id) REFERENCES pointage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pointage ADD CONSTRAINT FK_7591B201B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
    }
    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe_pointage DROP FOREIGN KEY FK_4842E61EE58DA11D');
        $this->addSql('DROP TABLE employe_pointage');
        $this->addSql('DROP TABLE pointage');
    }
}
