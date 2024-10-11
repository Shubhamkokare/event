<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'mobile' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'otp' => [
                'type' => 'INT',
                'constraint' => 6,
            ],
            'otp_expires_at' => [
                'type' => 'DATETIME', // Adjust the type based on your needs
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
