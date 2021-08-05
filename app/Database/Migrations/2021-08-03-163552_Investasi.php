<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Investasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_investasi'     => [
			  'type'           => 'VARCHAR',
			  'constraint'     => 7,
			],
			'durasi_proyek' => [
			  'type' => 'INT',
			  'constraint' => 3,
			  'unsigned' => true,
			],
			'imbal_hasil' => [
				'type' => 'INT',
				'constraint' => 100,
				'unsigned' => true,
			],
			'slot' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
			],
			'target' => [
				'type' => 'INT',
				'constraint' => 100,
				'unsigned' => true,
			],
			'id_properti'       => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned' => true,
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
		$this->forge->addKey('id_investasi', true);
        $this->forge->addForeignKey('id_properti', 'properti', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('investasi', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('investasi');
	}
}
