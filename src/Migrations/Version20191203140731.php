<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191203140731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE doctorale (id INT AUTO_INCREMENT NOT NULL, lien VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE theses ADD doctorale_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE theses ADD CONSTRAINT FK_3FABCA47C9CF0F9 FOREIGN KEY (doctorale_id) REFERENCES doctorale (id)');
        $this->addSql('CREATE INDEX IDX_3FABCA47C9CF0F9 ON theses (doctorale_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE theses DROP FOREIGN KEY FK_3FABCA47C9CF0F9');
        $this->addSql('DROP TABLE doctorale');
        $this->addSql('DROP INDEX IDX_3FABCA47C9CF0F9 ON theses');
        $this->addSql('ALTER TABLE theses DROP doctorale_id');
    }
}
