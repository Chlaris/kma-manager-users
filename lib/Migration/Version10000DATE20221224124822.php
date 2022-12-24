<?php

declare(strict_types=1);

namespace OCA\Deck\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\Migration\IOutput;
use OCP\Migration\SimpleMigrationStep;

class Version10000DATE20221224124822 extends SimpleMigrationStep {
	public function changeSchema(IOutput $output, Closure $schemaClosure, array $options): ?ISchemaWrapper {
		/** @var ISchemaWrapper $schema */
		$schema = $schemaClosure();

		if (!$schema->hasTable('canbo')){
			$table = $schema->createTable('canbo');
			$table->addColumn('id', 'integer', [
				'autoincreement' => true,
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ma_cb', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('ho_ten', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('date', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('gioi_tinh', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('sdt', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('dia_chi', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('cmnd_cccd', 'string', [
				'notnull' => true,
				'length' => 12
			]);
			$table->addColumn('email', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('chuc_vu', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('luong_co_so', 'float8', [
				'notnull' => false
			]);
			$table->addColumn('he_so_luong', 'float8', [
				'notnull' => false
			]);
			$table->addColumn('bac_thue', 'integer', [
				'notnull' => false
			]);
			$table->addColumn('luong', 'float8', [
				'notnull' => false
			]);
			$table->addColumn('quan_he_gd', 'string', [
				'notnull' => false,
				'length' => 255
			]);
			$table->setPrimaryKey(['id']);
		}

		if (!$schema->hasTable('nguoithan')) {
			$table = $schema->createTable('nguoithan');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'length' => 4,
			]);
			$table->addColumn('ma_nt', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('cb_id', 'integer', [
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ho_ten', 'string', [
				'notnull' => true,
				'length' => 64,
			]);
			$table->addColumn('ngay_sinh', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('gioi_tinh', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('sdt', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('dia_chi', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('nghe_nghiep', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('hinh_thuc_qh', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->setPrimaryKey(['id']);
		}

		if (!$schema->hasTable('hopdong')) {
			$table = $schema->createTable('hopdong');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'length' => 4,
			]);
			$table->addColumn('ma_hd', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('cb_id', 'integer', [
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ten_hd', 'string', [
				'notnull' => true,
				'length' => 64,
			]);
			$table->addColumn('ngay_ky', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('ngay_het_han', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('mo_ta', 'string', [
				'notnull' => true
			]);
			$table->addColumn('trang_thai', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->setPrimaryKey(['id']);
		}

		if (!$schema->hasTable('nghiphep')) {
			$table = $schema->createTable('nghiphep');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'length' => 4,
			]);
			$table->addColumn('ma_np', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('cb_id', 'integer', [
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ngay_bat_dau', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('ngay_ket_thuc', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('so_ngay_nghi', 'integer', [
				'notnull' => false
			]);
			$table->addColumn('ly_do', 'string', [
				'notnull' => true
			]);
			$table->addColumn('trang_thai', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->setPrimaryKey(['id']);
		}

		if (!$schema->hasTable('cong')) {
			$table = $schema->createTable('cong');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'length' => 4,
			]);
			$table->addColumn('cb_id', 'integer', [
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ngay', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('trang_thai', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->setPrimaryKey(['id']);
		}

		if (!$schema->hasTable('quatrinhdaotao')) {
			$table = $schema->createTable('quatrinhdaotao');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'length' => 4,
			]);
			$table->addColumn('ma_qt_dt', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('cb_id', 'integer', [
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ngay_bat_dau', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('ngay_tot_nghiep', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('dia_diem', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('chuyen_nganh', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('hinh_thuc_dt', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('van_bang', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('ket_qua', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('trang_thai', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->setPrimaryKey(['id']);
		}

		if (!$schema->hasTable('quatricongtac')) {
			$table = $schema->createTable('quatricongtac');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'length' => 4,
			]);
			$table->addColumn('ma_qt_ct', 'string', [
				'notnull' => true,
				'length' => 64
			]);
			$table->addColumn('cb_id', 'integer', [
				'notnull' => true,
				'length' => 4
			]);
			$table->addColumn('ngay_bat_dau', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('ngay_ket_thuc', 'bigint', [
				'notnull' => false,
				'length' => 8,
				'unsigned' => true,
			]);
			$table->addColumn('co_quan', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('don_vi', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('phong_ban', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('chuc_vu', 'string', [
				'notnull' => true,
				'length' => 255
			]);
			$table->addColumn('trang_thai', 'boolean', [
				'notnull' => true,
				'length' => 64
			]);
			$table->setPrimaryKey(['id']);
		}

		return $schema;
	}
}
