<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Saldo extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
			  'type'           => 'INT',
			  'constraint'     => 5,
			  'unsigned'       => true,
			  'auto_increment' => true,
			],
			'user_id'       => [
			  'type'       => 'INT',
			  'constraint' => 11,
			  'unsigned' => true,
			],
			'saldo' => [
			  'type' => 'INT',
			  'constraint' => 18,
			  'null' => true,
			],
			'is_verified' => [
				'type' => 'TINYINT',
				'constraint' => 1,
				'null' => false,
				'default' => 0,
			],  
			'created_at' => [
			  'type' => 'DATETIME',
			  'null' => true,
			],
			'updated_at' => [
			  'type' => 'DATETIME',
			  'null' => true,
			]
		]);
		$this->forge->addKey('id', true);
        // $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('Saldo', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('Saldo');
	}
}
