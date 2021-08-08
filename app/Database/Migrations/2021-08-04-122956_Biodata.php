<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nama' => [
			  'type'           => 'VARCHAR',
			  'constraint'     => 100,
			  'null'       => false,
			],
			'panggilan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'       => false,
			],
			'tl' => [
				'type'           => 'DATETIME',
				'null'       => false,
			],
			'phone' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'       => false,
			],
			'provinsi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'       => false,
			],
			'kota' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'       => false,
			],
			'alamat' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'       => false,
			],
			'pekerjaan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'       => false,
			],
			'sumber' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
				'null'       => false,
			],
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'null'       => false,
				'auto_increment' => true,
			],
			'user_id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'null'       => false,
			],
			'nbank' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'       => false,
			],
			'cabang' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'       => false,
			],
			'anama' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'       => false,
			],
			'norek' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'       => false,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			  ],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'image' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'null'       => false,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('biodata', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('biodata');
	}
}
