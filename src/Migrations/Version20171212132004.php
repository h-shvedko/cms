<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171212132004 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE core_access_rules (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE core_profile (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE core_users (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store_buskets (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store_categories (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store_order_products (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store_orders (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store_products (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_authors (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, created_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, created_by VARCHAR(255) DEFAULT \'0\' NOT NULL, modified_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, modified_by VARCHAR(255) DEFAULT \'0\' NOT NULL, is_deleted VARCHAR(1) DEFAULT \'1\' NOT NULL, INDEX IDX_62FA97D2A76ED395 (user_id), UNIQUE INDEX blog_authors_id_uindex (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, created_by VARCHAR(255) DEFAULT \'0\' NOT NULL, modified_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, modified_by VARCHAR(255) DEFAULT \'0\' NOT NULL, is_deleted VARCHAR(1) DEFAULT \'1\' NOT NULL, UNIQUE INDEX blog_categories_id_uindex (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_comments (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, author_id INT DEFAULT NULL, content LONGTEXT NOT NULL, created_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, created_by VARCHAR(255) DEFAULT \'0\' NOT NULL, modified_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, modified_by VARCHAR(255) DEFAULT \'0\' NOT NULL, is_deleted VARCHAR(1) DEFAULT \'1\' NOT NULL, INDEX IDX_2BC3B20D4B89032C (post_id), INDEX IDX_2BC3B20DF675F31B (author_id), UNIQUE INDEX blog_comments_id_uindex (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_posts (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, author_id INT DEFAULT NULL, header VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, created_by VARCHAR(255) DEFAULT \'0\' NOT NULL, modified_at VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, modified_by VARCHAR(255) DEFAULT \'0\' NOT NULL, is_deleted VARCHAR(1) DEFAULT \'1\' NOT NULL, INDEX IDX_78B2F93212469DE2 (category_id), INDEX IDX_78B2F932F675F31B (author_id), UNIQUE INDEX blog_posts_id_uindex (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages_blocks (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages_contents (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages_files (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages_modules (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages_positions (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages_web_pages (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blog_authors ADD CONSTRAINT FK_62FA97D2A76ED395 FOREIGN KEY (user_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE blog_comments ADD CONSTRAINT FK_2BC3B20D4B89032C FOREIGN KEY (post_id) REFERENCES blog_posts (id)');
        $this->addSql('ALTER TABLE blog_comments ADD CONSTRAINT FK_2BC3B20DF675F31B FOREIGN KEY (author_id) REFERENCES blog_authors (id)');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F93212469DE2 FOREIGN KEY (category_id) REFERENCES blog_categories (id)');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F932F675F31B FOREIGN KEY (author_id) REFERENCES blog_authors (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blog_authors DROP FOREIGN KEY FK_62FA97D2A76ED395');
        $this->addSql('ALTER TABLE blog_comments DROP FOREIGN KEY FK_2BC3B20DF675F31B');
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F932F675F31B');
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F93212469DE2');
        $this->addSql('ALTER TABLE blog_comments DROP FOREIGN KEY FK_2BC3B20D4B89032C');
        $this->addSql('DROP TABLE core_access_rules');
        $this->addSql('DROP TABLE core_profile');
        $this->addSql('DROP TABLE core_users');
        $this->addSql('DROP TABLE store_buskets');
        $this->addSql('DROP TABLE store_categories');
        $this->addSql('DROP TABLE store_order_products');
        $this->addSql('DROP TABLE store_orders');
        $this->addSql('DROP TABLE store_products');
        $this->addSql('DROP TABLE blog_authors');
        $this->addSql('DROP TABLE blog_categories');
        $this->addSql('DROP TABLE blog_comments');
        $this->addSql('DROP TABLE blog_posts');
        $this->addSql('DROP TABLE pages_blocks');
        $this->addSql('DROP TABLE pages_contents');
        $this->addSql('DROP TABLE pages_files');
        $this->addSql('DROP TABLE pages_modules');
        $this->addSql('DROP TABLE pages_positions');
        $this->addSql('DROP TABLE pages_web_pages');
    }
}
