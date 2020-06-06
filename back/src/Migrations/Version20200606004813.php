<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200606004813 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE childcode childcode VARCHAR(255) DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE role role VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE caregivers DROP FOREIGN KEY FK_F02750EA71179CD6');
        $this->addSql('DROP INDEX UNIQ_F02750EA71179CD6 ON caregivers');
        $this->addSql('ALTER TABLE caregivers CHANGE name_id details_id INT NOT NULL');
        $this->addSql('ALTER TABLE caregivers ADD CONSTRAINT FK_F02750EABB1A0722 FOREIGN KEY (details_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F02750EABB1A0722 ON caregivers (details_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE caregivers DROP FOREIGN KEY FK_F02750EABB1A0722');
        $this->addSql('DROP INDEX UNIQ_F02750EABB1A0722 ON caregivers');
        $this->addSql('ALTER TABLE caregivers CHANGE details_id name_id INT NOT NULL');
        $this->addSql('ALTER TABLE caregivers ADD CONSTRAINT FK_F02750EA71179CD6 FOREIGN KEY (name_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F02750EA71179CD6 ON caregivers (name_id)');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE childcode childcode VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
