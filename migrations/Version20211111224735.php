<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211111224735 extends AbstractMigration
	{
	public function getDescription(): string
		{
		return '';
		}

	public function up(Schema $schema): void
		{
		// this up() migration is auto-generated, please modify it to your needs
		$this->addSql('ALTER TABLE product ADD COLUMN slug VARCHAR(255) DEFAULT NULL');
		}

	public function down(Schema $schema): void
		{
		// this down() migration is auto-generated, please modify it to your needs
		$this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, title, description FROM product');
		$this->addSql('DROP TABLE product');
		$this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL)');
		$this->addSql('INSERT INTO product (id, title, description) SELECT id, title, description FROM __temp__product');
		$this->addSql('DROP TABLE __temp__product');
		}
	}
