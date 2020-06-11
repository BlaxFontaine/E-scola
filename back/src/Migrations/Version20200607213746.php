<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607213746 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE teachers (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE students ADD teacher_id INT NOT NULL');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB241807E1D FOREIGN KEY (teacher_id) REFERENCES teachers (id)');
        $this->addSql('CREATE INDEX IDX_A4698DB241807E1D ON students (teacher_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB241807E1D');
        $this->addSql('DROP TABLE teachers');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX IDX_A4698DB241807E1D ON students');
        $this->addSql('ALTER TABLE students DROP teacher_id');
    }
}
