<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210219211233 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `table` ADD board_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F46E7EC5785 FOREIGN KEY (board_id) REFERENCES board (id)');
        $this->addSql('CREATE INDEX IDX_F6298F46E7EC5785 ON `table` (board_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F46E7EC5785');
        $this->addSql('DROP INDEX IDX_F6298F46E7EC5785 ON `table`');
        $this->addSql('ALTER TABLE `table` DROP board_id');
    }
}