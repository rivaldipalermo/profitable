<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiInvestasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_transaksi_investasi'     => [
			  'type'           => 'INT',
			  'constraint'     => 11,
			  'auto_increment'     => true,
			  'unsigned'	=> true,
			],
			'slot' => [
			  'type' => 'INT',
			  'constraint' => 3,
			  'unsigned' => true,
			],
			'profit' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => true,
			],
			'id_properti'       => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_investasi' => [
				'type' => 'VARCHAR',
				'constraint' => 7,
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
		$this->forge->addKey('id_transaksi_investasi', true);
        $this->forge->addForeignKey('id_properti', 'properti', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_investasi', 'investasi', 'id_investasi', 'CASCADE', 'CASCADE');
		$this->forge->createTable('transaksi_investasi', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('transaksi_investasi');
	}
}
