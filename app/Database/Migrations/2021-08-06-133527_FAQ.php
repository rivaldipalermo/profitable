<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FAQ extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'auto_increment' 	=> true
			],
			'pertanyaan'       => [
				'type'				=> 'TEXT'
			],
			'jawaban'	=> [
				'type'				=> 'TEXT'
			],
			'tipe'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 20
			],
			'kategori'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 20
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
		// $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
		$this->forge->createTable('faq', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('faq');
	}
}
