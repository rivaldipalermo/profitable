<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buktitopup extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'bukti' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
				'null' => false,
			],
			'id'       => [
			  'type'       => 'INT',
			  'constraint' => 11,
			  'null' => false,
			  'auto_increment' => true,
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
		$this->forge->createTable('buktitopup', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('buktitopup');
	}
}
