<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200220143230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE proprety ADD surface INT NOT NULL, ADD rooms INT NOT NULL, ADD bedrooms INT NOT NULL, ADD floor INT NOT NULL, ADD price INT NOT NULL, ADD heat INT DEFAULT NULL, ADD city VARCHAR(255) NOT NULL, ADD adesse VARCHAR(255) NOT NULL, ADD code_postale VARCHAR(255) NOT NULL, ADD sold TINYINT(1) NOT NULL, ADD created_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE proprety DROP surface, DROP rooms, DROP bedrooms, DROP floor, DROP price, DROP heat, DROP city, DROP adesse, DROP code_postale, DROP sold, DROP created_at');
    }
}
