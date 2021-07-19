<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 20,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'judul'       => [
					'type'       => 'VARCHAR',
					'constraint' => '255',
			],
			'author' => [
					'type' => 'varchar',
					'constraint' => '255',
			],
			'isi' => [
				'type' => 'TEXT',
				'constraint' => '65000',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->createTable('blog');
	}

	public function down()
	{
			$this->forge->dropTable('blog');
	}
}
