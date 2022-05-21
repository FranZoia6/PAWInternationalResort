<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PrimerasTablasMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $tableRoom = $this->table('room');
        $tableRoom->addColumn('description', 'string', ['limit'=>300])
            ->addColumn('name','string', ['limit'=>30])
            ->addColumn('price', 'float')
            ->addColumn('visible', 'boolean',['default'=> true])
            ->create();
        
        $tableReservation = $this->table('reservation');
        $tableReservation->addColumn('admissionDate', 'timestamp')
            ->addColumn('departureDate', 'timestamp')
            ->addColumn('totalPrice', 'float')
            ->addColumn('name','string', ['limit'=>60])
            ->addColumn('email', 'string', ['limit'=>60])
            ->addColumn('dni', 'integer')
            ->crEate();
        
        $tableClient = $this->table('hr');
        $tableClient->addColumn('room','integer')
            ->addColumn('reservation', 'integer')
            ->addColumn('subtotal', 'float')
            ->addForeignKey('room','room','id')
            ->addForeignKey('reservation','reservation','id')
            ->create();    
    }
}
