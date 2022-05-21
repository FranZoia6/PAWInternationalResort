<? 

namespace Paw\Core\Database;

use PDO;
use Paw\Core\Traits\Loggable;

class QueryBuilder
{
    use Loggable;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    public function select()
    {

    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}