<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kota extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kota_id' => [
			  'type'           => 'INT',
			  'constraint'     => 11,
			  'null'       => false,
			  'auto_increment' => true,
			],
			'provinsi_id' => [
			  'type'       => 'INT',
			  'constraint' => 11,
			  'default' => NULL,
			],
			'kota_name' => [
			  'type' => 'VARCHAR',
			  'constraint' => 255,
			  'default' => NULL,
			]
		]);
		$this->forge->addKey('kota_id', true);
		$this->forge->createTable('kota', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('kota');
	}
}
