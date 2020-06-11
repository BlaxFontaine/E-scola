<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200608004407 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE assigments (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, lessons_id INT NOT NULL, INDEX IDX_90CD961CCB944F1A (student_id), INDEX IDX_90CD961CFED07355 (lessons_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE assigments ADD CONSTRAINT FK_90CD961CCB944F1A FOREIGN KEY (student_id) REFERENCES students (id)');
        $this->addSql('ALTER TABLE assigments ADD CONSTRAINT FK_90CD961CFED07355 FOREIGN KEY (lessons_id) REFERENCES lessons (id)');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE lessons CHANGE activity_id activity_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE assigments');
        $this->addSql('ALTER TABLE lessons CHANGE activity_id activity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
