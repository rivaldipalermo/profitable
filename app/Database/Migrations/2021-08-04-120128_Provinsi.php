<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'provinsi_id' => [
			  'type'           => 'INT',
			  'constraint'     => 11,
			  'null'       => false,
			  'auto_increment' => true,
			],
			'provinsi_name' => [
			  'type' => 'VARCHAR',
			  'constraint' => 255,
			  'default' => NULL,
			]
		]);
		$this->forge->addKey('provinsi_id', true);
		$this->forge->createTable('provinsi', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('provinsi');
	}
}
