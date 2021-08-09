<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestimoniInvestor extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_testimoni' => [
				'type'          	=> 'INT',
				'constraint'     	=> 11,
				'auto_increment'    => true,
				'unsigned'			=> true,
			],
			'testimoni' => [
				'type'				=> 'TEXT'
			],
			'id_user' => [
				'type' 				=> 'INT',
				'constraint' 		=> 7,
				'unsigned' 			=> true,
			],
			'id_biodata' => [
				'type' 				=> 'INT',
				'constraint' 		=> 7,
				'unsigned' 			=> true,
			],
			'created_at' => [
				'type' 				=> 'DATETIME',
				'null' 				=> true,
			],
			'updated_at' => [
				'type' 				=> 'DATETIME',
				'null' 				=> true,
			]
		]);
		$this->forge->addKey('id_testimoni', true);
		$this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_biodata', 'biodata', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('testimoni_investor', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('testimoni_investor');
	}
}
