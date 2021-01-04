<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateUser extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'ID' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'Nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '25',
                                'null' => TRUE,
                        ),
                        'Apellido' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '25',
                                'null' => TRUE,
                        ),
                        'Email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '35',
                                'null' => TRUE,
                        ),
                        'Password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE,
                        ),
                        'Estado' => array(
                                'type' => 'TINYINT',
                                'constraint' => '1',
                                'null' => TRUE,
                        ),
                        'FechaNacimiento' => array(
                                'type' => 'DATE',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('ID', TRUE);
                $this->dbforge->create_table('usuario');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuario');
        }
}