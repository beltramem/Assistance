<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180325200117 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE utilisateur ADD COLUMN role CLOB NOT NULL');
        $this->addSql('CREATE TEMPORARY TABLE __temp__operateur AS SELECT id, id_operateur, responsable_service FROM operateur');
        $this->addSql('DROP TABLE operateur');
        $this->addSql('CREATE TABLE operateur (id INTEGER NOT NULL, id_operateur INTEGER NOT NULL, responsable_service BLOB NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO operateur (id, id_operateur, responsable_service) SELECT id, id_operateur, responsable_service FROM __temp__operateur');
        $this->addSql('DROP TABLE __temp__operateur');
        $this->addSql('DROP INDEX IDX_97A0ADA3ADE0C2BD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ticket AS SELECT id_ticket, id_urgence, intitule, date_de_creation, description, chemin_doc, date_de_resolution, batiment, salle, poste FROM ticket');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('CREATE TABLE ticket (id_ticket INTEGER NOT NULL, id_urgence INTEGER DEFAULT NULL, intitule CLOB NOT NULL COLLATE BINARY, date_de_creation DATETIME NOT NULL, description CLOB NOT NULL COLLATE BINARY, chemin_doc CLOB DEFAULT NULL COLLATE BINARY, date_de_resolution DATETIME DEFAULT NULL, batiment VARCHAR(1) NOT NULL COLLATE BINARY, salle VARCHAR(3) NOT NULL COLLATE BINARY, poste VARCHAR(2) NOT NULL COLLATE BINARY, PRIMARY KEY(id_ticket), CONSTRAINT FK_97A0ADA3ADE0C2BD FOREIGN KEY (id_urgence) REFERENCES urgence (id_urgence) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO ticket (id_ticket, id_urgence, intitule, date_de_creation, description, chemin_doc, date_de_resolution, batiment, salle, poste) SELECT id_ticket, id_urgence, intitule, date_de_creation, description, chemin_doc, date_de_resolution, batiment, salle, poste FROM __temp__ticket');
        $this->addSql('DROP TABLE __temp__ticket');
        $this->addSql('CREATE INDEX IDX_97A0ADA3ADE0C2BD ON ticket (id_urgence)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__operateur AS SELECT id, id_operateur, responsable_service FROM operateur');
        $this->addSql('DROP TABLE operateur');
        $this->addSql('CREATE TABLE operateur (id INTEGER NOT NULL, id_operateur INTEGER NOT NULL, responsable_service BLOB NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO operateur (id, id_operateur, responsable_service) SELECT id, id_operateur, responsable_service FROM __temp__operateur');
        $this->addSql('DROP TABLE __temp__operateur');
        $this->addSql('DROP INDEX IDX_97A0ADA3ADE0C2BD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ticket AS SELECT id_ticket, id_urgence, intitule, date_de_creation, description, chemin_doc, date_de_resolution, batiment, salle, poste FROM ticket');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('CREATE TABLE ticket (id_ticket INTEGER NOT NULL, id_urgence INTEGER DEFAULT NULL, intitule CLOB NOT NULL, date_de_creation DATETIME NOT NULL, description CLOB NOT NULL, chemin_doc CLOB DEFAULT NULL, date_de_resolution DATETIME DEFAULT NULL, batiment VARCHAR(1) NOT NULL, salle VARCHAR(3) NOT NULL, poste VARCHAR(2) NOT NULL, PRIMARY KEY(id_ticket))');
        $this->addSql('INSERT INTO ticket (id_ticket, id_urgence, intitule, date_de_creation, description, chemin_doc, date_de_resolution, batiment, salle, poste) SELECT id_ticket, id_urgence, intitule, date_de_creation, description, chemin_doc, date_de_resolution, batiment, salle, poste FROM __temp__ticket');
        $this->addSql('DROP TABLE __temp__ticket');
        $this->addSql('CREATE INDEX IDX_97A0ADA3ADE0C2BD ON ticket (id_urgence)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__utilisateur AS SELECT id_user, identifiant, password, nom, prenom FROM utilisateur');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('CREATE TABLE utilisateur (id_user INTEGER NOT NULL, identifiant VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL, nom VARCHAR(100) DEFAULT NULL, prenom VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id_user))');
        $this->addSql('INSERT INTO utilisateur (id_user, identifiant, password, nom, prenom) SELECT id_user, identifiant, password, nom, prenom FROM __temp__utilisateur');
        $this->addSql('DROP TABLE __temp__utilisateur');
    }
}
