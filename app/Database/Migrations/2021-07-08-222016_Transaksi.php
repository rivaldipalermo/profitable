<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
			'jenis_pembayaran' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'bukti_pembayaran' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true,
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['success', 'pending', 'rejected'],
				'default' => 'pending',
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
		$this->forge->createTable('Transaksi', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('Transaksi');
	}
}
