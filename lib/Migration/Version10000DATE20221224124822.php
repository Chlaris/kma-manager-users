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

		// if (!$schema->hasTable('deck_boards')) {
		// 	$table = $schema->createTable('deck_boards');
		// 	$table->addColumn('id', 'integer', [
		// 		'autoincrement' => true,
		// 		'notnull' => true,
		// 		'length' => 4,
		// 	]);
		// 	$table->addColumn('title', 'string', [
		// 		'notnull' => true,
		// 		'length' => 100,
		// 	]);
		// 	$table->addColumn('owner', 'string', [
		// 		'notnull' => true,
		// 		'length' => 64,
		// 	]);
		// 	$table->addColumn('color', 'string', [
		// 		'notnull' => false,
		// 		'length' => 6,
		// 	]);
		// 	$table->addColumn('archived', 'boolean', [
		// 		'notnull' => false,
		// 		'default' => false,
		// 	]);
		// 	$table->addColumn('deleted_at', 'bigint', [
		// 		'notnull' => false,
		// 		'length' => 8,
		// 		'default' => 0,
		// 		'unsigned' => true,
		// 	]);
		// 	$table->addColumn('last_modified', 'integer', [
		// 		'notnull' => false,
		// 		'default' => 0,
		// 		'unsigned' => true,
		// 	]);
		// 	$table->setPrimaryKey(['id']);
		// }

		return $schema;
	}
}
