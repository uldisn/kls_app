<?php

class m150927_103716_ContainerRoles extends EDbMigration {

    public function up() {

        $sql = " 
            INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES('Containers','2','Containers',NULL,'N;');                            
            INSERT INTO authitemchild (parent, child) 
                VALUES
            ('Containers','Edifactdata.EcntContainer.*'),
            ('Containers','Edifactdata.EcntContainer.Create'),
            ('Containers','Edifactdata.EcntContainer.View'),
            ('Containers','Edifactdata.EcntContainer.Update'),
            ('Containers','Edifactdata.EcntContainer.Delete'),
            ('Containers','Edifactdata.EcntContainer.Menu');
                 ";
        $this->execute($sql);
    }

    public function down() {
        $this->execute("
            DELETE FROM `authitemchild` WHERE `parent`= 'Containers';
            DELETE FROM `AuthItem` WHERE `name`= 'Containers';

        ");
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
