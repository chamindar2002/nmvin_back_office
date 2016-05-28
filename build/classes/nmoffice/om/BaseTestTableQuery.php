<?php


/**
 * Base class that represents a query for the 'test_table' table.
 *
 * this is a test table
 *
 * @method TestTableQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TestTableQuery orderByLabel1($order = Criteria::ASC) Order by the label_1 column
 * @method TestTableQuery orderByLabel2($order = Criteria::ASC) Order by the label_2 column
 * @method TestTableQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method TestTableQuery groupById() Group by the id column
 * @method TestTableQuery groupByLabel1() Group by the label_1 column
 * @method TestTableQuery groupByLabel2() Group by the label_2 column
 * @method TestTableQuery groupByStatus() Group by the status column
 *
 * @method TestTableQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TestTableQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TestTableQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TestTable findOne(PropelPDO $con = null) Return the first TestTable matching the query
 * @method TestTable findOneOrCreate(PropelPDO $con = null) Return the first TestTable matching the query, or a new TestTable object populated from the query conditions when no match is found
 *
 * @method TestTable findOneByLabel1(string $label_1) Return the first TestTable filtered by the label_1 column
 * @method TestTable findOneByLabel2(string $label_2) Return the first TestTable filtered by the label_2 column
 * @method TestTable findOneByStatus(boolean $status) Return the first TestTable filtered by the status column
 *
 * @method array findById(int $id) Return TestTable objects filtered by the id column
 * @method array findByLabel1(string $label_1) Return TestTable objects filtered by the label_1 column
 * @method array findByLabel2(string $label_2) Return TestTable objects filtered by the label_2 column
 * @method array findByStatus(boolean $status) Return TestTable objects filtered by the status column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseTestTableQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTestTableQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'nmwndb';
        }
        if (null === $modelName) {
            $modelName = 'TestTable';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TestTableQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TestTableQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TestTableQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TestTableQuery) {
            return $criteria;
        }
        $query = new TestTableQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   TestTable|TestTable[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TestTablePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TestTablePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 TestTable A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 TestTable A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `label_1`, `label_2`, `status` FROM `test_table` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new TestTable();
            $obj->hydrate($row);
            TestTablePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return TestTable|TestTable[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|TestTable[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TestTablePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TestTablePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TestTablePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TestTablePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TestTablePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the label_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabel1('fooValue');   // WHERE label_1 = 'fooValue'
     * $query->filterByLabel1('%fooValue%'); // WHERE label_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $label1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function filterByLabel1($label1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($label1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $label1)) {
                $label1 = str_replace('*', '%', $label1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TestTablePeer::LABEL_1, $label1, $comparison);
    }

    /**
     * Filter the query on the label_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabel2('fooValue');   // WHERE label_2 = 'fooValue'
     * $query->filterByLabel2('%fooValue%'); // WHERE label_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $label2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function filterByLabel2($label2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($label2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $label2)) {
                $label2 = str_replace('*', '%', $label2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TestTablePeer::LABEL_2, $label2, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(true); // WHERE status = true
     * $query->filterByStatus('yes'); // WHERE status = true
     * </code>
     *
     * @param     boolean|string $status The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TestTablePeer::STATUS, $status, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TestTable $testTable Object to remove from the list of results
     *
     * @return TestTableQuery The current query, for fluid interface
     */
    public function prune($testTable = null)
    {
        if ($testTable) {
            $this->addUsingAlias(TestTablePeer::ID, $testTable->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
