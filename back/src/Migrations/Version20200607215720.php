<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607215720 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE classes (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teachers (id INT AUTO_INCREMENT NOT NULL, classe_id INT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_ED071FF68F5EA509 (classe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE teachers ADD CONSTRAINT FK_ED071FF68F5EA509 FOREIGN KEY (classe_id) REFERENCES classes (id)');
        $this->addSql('ALTER TABLE activities ADD classe_id INT NOT NULL');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE58F5EA509 FOREIGN KEY (classe_id) REFERENCES classes (id)');
        $this->addSql('CREATE INDEX IDX_B5F1AFE58F5EA509 ON activities (classe_id)');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE students ADD classe_id INT NOT NULL');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB28F5EA509 FOREIGN KEY (classe_id) REFERENCES classes (id)');
        $this->addSql('CREATE INDEX IDX_A4698DB28F5EA509 ON students (classe_id)');
        $this->addSql('ALTER TABLE lessons CHANGE activity_id activity_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE58F5EA509');
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB28F5EA509');
        $this->addSql('ALTER TABLE teachers DROP FOREIGN KEY FK_ED071FF68F5EA509');
        $this->addSql('DROP TABLE classes');
        $this->addSql('DROP TABLE teachers');
        $this->addSql('DROP INDEX IDX_B5F1AFE58F5EA509 ON activities');
        $this->addSql('ALTER TABLE activities DROP classe_id');
        $this->addSql('ALTER TABLE lessons CHANGE activity_id activity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX IDX_A4698DB28F5EA509 ON students');
        $this->addSql('ALTER TABLE students DROP classe_id');
    }
}
