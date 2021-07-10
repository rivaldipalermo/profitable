<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Properti extends Migration
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
			'lokasi_properti'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'provinsi'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'kabupaten'	=> [
				'type'	=> 'VARCHAR',
				'constraint'	=> 100
			],
			'luas_tanah'	=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'luas_bangunan'	=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'deskripsi_properti'	=> [
				'type'			=> 'TEXT'
			],
			'dokumen_kepemilikan'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'harga_properti'	=> [
				'type'			=> 'DOUBLE'
			],
			'foto_properti'	=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 50
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('properti', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('properti');
	}
}