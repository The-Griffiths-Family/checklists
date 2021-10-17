<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20211017214704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adds checklist & checklist_item tables';
    }


    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE checklist (id UUID NOT NULL, name VARCHAR(120) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN checklist.id IS \'(DC2Type:ulid)\'');
        $this->addSql('CREATE TABLE checklist_item (id UUID NOT NULL, name VARCHAR(120) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN checklist_item.id IS \'(DC2Type:ulid)\'');
    }


    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE checklist');
        $this->addSql('DROP TABLE checklist_item');
    }
}
