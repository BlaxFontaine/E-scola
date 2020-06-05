<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200605210113 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9D2EECC3F');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9E338AE4E');
        $this->addSql('DROP TABLE classes');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE visitor CHANGE home home VARCHAR(255) DEFAULT NULL, CHANGE pupils pupils VARCHAR(255) DEFAULT NULL, CHANGE teacher teacher VARCHAR(255) DEFAULT NULL, CHANGE caregiver caregiver VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_1483A5E9D2EECC3F ON users');
        $this->addSql('DROP INDEX IDX_1483A5E9E338AE4E ON users');
        $this->addSql('ALTER TABLE users DROP school_name_id, DROP school_year_id, CHANGE email email VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE classes (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE mascot CHANGE img img VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users ADD school_name_id INT NOT NULL, ADD school_year_id INT NOT NULL, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9D2EECC3F FOREIGN KEY (school_year_id) REFERENCES classes (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9E338AE4E FOREIGN KEY (school_name_id) REFERENCES classes (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9D2EECC3F ON users (school_year_id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9E338AE4E ON users (school_name_id)');
        $this->addSql('ALTER TABLE visitor CHANGE home home VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE pupils pupils VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE teacher teacher VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE caregiver caregiver VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
