<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180323132106 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE type_probleme (id INTEGER NOT NULL, id_type INTEGER NOT NULL, libelle_type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE commentaire (id_commentaire INTEGER NOT NULL, contenu_com VARCHAR(255) NOT NULL, PRIMARY KEY(id_commentaire))');
        $this->addSql('CREATE TABLE intervention (id_intervention INTEGER NOT NULL, info_intervention VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_intervention))');
        $this->addSql('CREATE TABLE probleme (id INTEGER NOT NULL, id_prob INTEGER NOT NULL, libelle_prob VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE urgence (id_urgence INTEGER NOT NULL, libelle_urgence VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_urgence))');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ticket AS SELECT intitule, date_de_creation, description, chemin_doc, date_de_resolution, nb_redirection FROM ticket');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('CREATE TABLE ticket (intitule INTEGER NOT NULL, date_de_creation DATETIME NOT NULL, description CLOB NOT NULL COLLATE BINARY, chemin_doc CLOB NOT NULL COLLATE BINARY, date_de_resolution DATETIME NOT NULL, commentaire CLOB NOT NULL, PRIMARY KEY(intitule))');
        $this->addSql('INSERT INTO ticket (intitule, date_de_creation, description, chemin_doc, date_de_resolution, commentaire) SELECT intitule, date_de_creation, description, chemin_doc, date_de_resolution, nb_redirection FROM __temp__ticket');
        $this->addSql('DROP TABLE __temp__ticket');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE type_probleme');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE intervention');
        $this->addSql('DROP TABLE probleme');
        $this->addSql('DROP TABLE urgence');
        $this->addSql('CREATE TEMPORARY TABLE __temp__ticket AS SELECT intitule, date_de_creation, description, chemin_doc, date_de_resolution, commentaire FROM ticket');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('CREATE TABLE ticket (id INTEGER NOT NULL, date_de_creation DATETIME NOT NULL, description CLOB NOT NULL, chemin_doc CLOB NOT NULL, date_de_resolution DATETIME NOT NULL, nb_redirection CLOB NOT NULL COLLATE BINARY, intitule CLOB NOT NULL COLLATE BINARY, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO ticket (intitule, date_de_creation, description, chemin_doc, date_de_resolution, nb_redirection) SELECT intitule, date_de_creation, description, chemin_doc, date_de_resolution, commentaire FROM __temp__ticket');
        $this->addSql('DROP TABLE __temp__ticket');
    }
}
