<?php


/**
 * Base class that represents a query for the 'tranferedbloks' table.
 *
 * Transfered Blocks Log Table
 *
 * @method TranferedbloksQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method TranferedbloksQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method TranferedbloksQuery orderBySalerefno($order = Criteria::ASC) Order by the salerefno column
 * @method TranferedbloksQuery orderByBlockrefnumberPrevious($order = Criteria::ASC) Order by the blockrefnumber_previous column
 * @method TranferedbloksQuery orderByBlockrefnumberCurrent($order = Criteria::ASC) Order by the blockrefnumber_current column
 * @method TranferedbloksQuery orderByCurrentblockPreviouscustomer($order = Criteria::ASC) Order by the currentblock_previouscustomer column
 * @method TranferedbloksQuery orderByOther1($order = Criteria::ASC) Order by the other1 column
 * @method TranferedbloksQuery orderByOther2($order = Criteria::ASC) Order by the other2 column
 * @method TranferedbloksQuery orderByOther3($order = Criteria::ASC) Order by the other3 column
 * @method TranferedbloksQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method TranferedbloksQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method TranferedbloksQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 *
 * @method TranferedbloksQuery groupByRefno() Group by the refno column
 * @method TranferedbloksQuery groupByCustomercode() Group by the customercode column
 * @method TranferedbloksQuery groupBySalerefno() Group by the salerefno column
 * @method TranferedbloksQuery groupByBlockrefnumberPrevious() Group by the blockrefnumber_previous column
 * @method TranferedbloksQuery groupByBlockrefnumberCurrent() Group by the blockrefnumber_current column
 * @method TranferedbloksQuery groupByCurrentblockPreviouscustomer() Group by the currentblock_previouscustomer column
 * @method TranferedbloksQuery groupByOther1() Group by the other1 column
 * @method TranferedbloksQuery groupByOther2() Group by the other2 column
 * @method TranferedbloksQuery groupByOther3() Group by the other3 column
 * @method TranferedbloksQuery groupByAddedby() Group by the addedby column
 * @method TranferedbloksQuery groupByAddeddate() Group by the addeddate column
 * @method TranferedbloksQuery groupByAddedtime() Group by the addedtime column
 *
 * @method TranferedbloksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TranferedbloksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TranferedbloksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TranferedbloksQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method TranferedbloksQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method TranferedbloksQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method TranferedbloksQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method TranferedbloksQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method TranferedbloksQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method Tranferedbloks findOne(PropelPDO $con = null) Return the first Tranferedbloks matching the query
 * @method Tranferedbloks findOneOrCreate(PropelPDO $con = null) Return the first Tranferedbloks matching the query, or a new Tranferedbloks object populated from the query conditions when no match is found
 *
 * @method Tranferedbloks findOneByCustomercode(int $customercode) Return the first Tranferedbloks filtered by the customercode column
 * @method Tranferedbloks findOneBySalerefno(int $salerefno) Return the first Tranferedbloks filtered by the salerefno column
 * @method Tranferedbloks findOneByBlockrefnumberPrevious(int $blockrefnumber_previous) Return the first Tranferedbloks filtered by the blockrefnumber_previous column
 * @method Tranferedbloks findOneByBlockrefnumberCurrent(int $blockrefnumber_current) Return the first Tranferedbloks filtered by the blockrefnumber_current column
 * @method Tranferedbloks findOneByCurrentblockPreviouscustomer(int $currentblock_previouscustomer) Return the first Tranferedbloks filtered by the currentblock_previouscustomer column
 * @method Tranferedbloks findOneByOther1(int $other1) Return the first Tranferedbloks filtered by the other1 column
 * @method Tranferedbloks findOneByOther2(double $other2) Return the first Tranferedbloks filtered by the other2 column
 * @method Tranferedbloks findOneByOther3(string $other3) Return the first Tranferedbloks filtered by the other3 column
 * @method Tranferedbloks findOneByAddedby(int $addedby) Return the first Tranferedbloks filtered by the addedby column
 * @method Tranferedbloks findOneByAddeddate(string $addeddate) Return the first Tranferedbloks filtered by the addeddate column
 * @method Tranferedbloks findOneByAddedtime(string $addedtime) Return the first Tranferedbloks filtered by the addedtime column
 *
 * @method array findByRefno(int $refno) Return Tranferedbloks objects filtered by the refno column
 * @method array findByCustomercode(int $customercode) Return Tranferedbloks objects filtered by the customercode column
 * @method array findBySalerefno(int $salerefno) Return Tranferedbloks objects filtered by the salerefno column
 * @method array findByBlockrefnumberPrevious(int $blockrefnumber_previous) Return Tranferedbloks objects filtered by the blockrefnumber_previous column
 * @method array findByBlockrefnumberCurrent(int $blockrefnumber_current) Return Tranferedbloks objects filtered by the blockrefnumber_current column
 * @method array findByCurrentblockPreviouscustomer(int $currentblock_previouscustomer) Return Tranferedbloks objects filtered by the currentblock_previouscustomer column
 * @method array findByOther1(int $other1) Return Tranferedbloks objects filtered by the other1 column
 * @method array findByOther2(double $other2) Return Tranferedbloks objects filtered by the other2 column
 * @method array findByOther3(string $other3) Return Tranferedbloks objects filtered by the other3 column
 * @method array findByAddedby(int $addedby) Return Tranferedbloks objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Tranferedbloks objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Tranferedbloks objects filtered by the addedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseTranferedbloksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTranferedbloksQuery object.
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
            $modelName = 'Tranferedbloks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TranferedbloksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TranferedbloksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TranferedbloksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TranferedbloksQuery) {
            return $criteria;
        }
        $query = new TranferedbloksQuery(null, null, $modelAlias);

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
     * @return   Tranferedbloks|Tranferedbloks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TranferedbloksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TranferedbloksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tranferedbloks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRefno($key, $con = null)
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
     * @return                 Tranferedbloks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `customercode`, `salerefno`, `blockrefnumber_previous`, `blockrefnumber_current`, `currentblock_previouscustomer`, `other1`, `other2`, `other3`, `addedby`, `addeddate`, `addedtime` FROM `tranferedbloks` WHERE `refno` = :p0';
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
            $obj = new Tranferedbloks();
            $obj->hydrate($row);
            TranferedbloksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tranferedbloks|Tranferedbloks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tranferedbloks[]|mixed the list of results, formatted by the current formatter
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
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TranferedbloksPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TranferedbloksPeer::REFNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the refno column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE refno = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE refno IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE refno >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE refno <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the customercode column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomercode(1234); // WHERE customercode = 1234
     * $query->filterByCustomercode(array(12, 34)); // WHERE customercode IN (12, 34)
     * $query->filterByCustomercode(array('min' => 12)); // WHERE customercode >= 12
     * $query->filterByCustomercode(array('max' => 12)); // WHERE customercode <= 12
     * </code>
     *
     * @see       filterByCustomerdetails()
     *
     * @param     mixed $customercode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByCustomercode($customercode = null, $comparison = null)
    {
        if (is_array($customercode)) {
            $useMinMax = false;
            if (isset($customercode['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customercode['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::CUSTOMERCODE, $customercode, $comparison);
    }

    /**
     * Filter the query on the salerefno column
     *
     * Example usage:
     * <code>
     * $query->filterBySalerefno(1234); // WHERE salerefno = 1234
     * $query->filterBySalerefno(array(12, 34)); // WHERE salerefno IN (12, 34)
     * $query->filterBySalerefno(array('min' => 12)); // WHERE salerefno >= 12
     * $query->filterBySalerefno(array('max' => 12)); // WHERE salerefno <= 12
     * </code>
     *
     * @see       filterBySales()
     *
     * @param     mixed $salerefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterBySalerefno($salerefno = null, $comparison = null)
    {
        if (is_array($salerefno)) {
            $useMinMax = false;
            if (isset($salerefno['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::SALEREFNO, $salerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salerefno['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::SALEREFNO, $salerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::SALEREFNO, $salerefno, $comparison);
    }

    /**
     * Filter the query on the blockrefnumber_previous column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockrefnumberPrevious(1234); // WHERE blockrefnumber_previous = 1234
     * $query->filterByBlockrefnumberPrevious(array(12, 34)); // WHERE blockrefnumber_previous IN (12, 34)
     * $query->filterByBlockrefnumberPrevious(array('min' => 12)); // WHERE blockrefnumber_previous >= 12
     * $query->filterByBlockrefnumberPrevious(array('max' => 12)); // WHERE blockrefnumber_previous <= 12
     * </code>
     *
     * @param     mixed $blockrefnumberPrevious The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByBlockrefnumberPrevious($blockrefnumberPrevious = null, $comparison = null)
    {
        if (is_array($blockrefnumberPrevious)) {
            $useMinMax = false;
            if (isset($blockrefnumberPrevious['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS, $blockrefnumberPrevious['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blockrefnumberPrevious['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS, $blockrefnumberPrevious['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::BLOCKREFNUMBER_PREVIOUS, $blockrefnumberPrevious, $comparison);
    }

    /**
     * Filter the query on the blockrefnumber_current column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockrefnumberCurrent(1234); // WHERE blockrefnumber_current = 1234
     * $query->filterByBlockrefnumberCurrent(array(12, 34)); // WHERE blockrefnumber_current IN (12, 34)
     * $query->filterByBlockrefnumberCurrent(array('min' => 12)); // WHERE blockrefnumber_current >= 12
     * $query->filterByBlockrefnumberCurrent(array('max' => 12)); // WHERE blockrefnumber_current <= 12
     * </code>
     *
     * @param     mixed $blockrefnumberCurrent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByBlockrefnumberCurrent($blockrefnumberCurrent = null, $comparison = null)
    {
        if (is_array($blockrefnumberCurrent)) {
            $useMinMax = false;
            if (isset($blockrefnumberCurrent['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT, $blockrefnumberCurrent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blockrefnumberCurrent['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT, $blockrefnumberCurrent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::BLOCKREFNUMBER_CURRENT, $blockrefnumberCurrent, $comparison);
    }

    /**
     * Filter the query on the currentblock_previouscustomer column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentblockPreviouscustomer(1234); // WHERE currentblock_previouscustomer = 1234
     * $query->filterByCurrentblockPreviouscustomer(array(12, 34)); // WHERE currentblock_previouscustomer IN (12, 34)
     * $query->filterByCurrentblockPreviouscustomer(array('min' => 12)); // WHERE currentblock_previouscustomer >= 12
     * $query->filterByCurrentblockPreviouscustomer(array('max' => 12)); // WHERE currentblock_previouscustomer <= 12
     * </code>
     *
     * @param     mixed $currentblockPreviouscustomer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByCurrentblockPreviouscustomer($currentblockPreviouscustomer = null, $comparison = null)
    {
        if (is_array($currentblockPreviouscustomer)) {
            $useMinMax = false;
            if (isset($currentblockPreviouscustomer['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER, $currentblockPreviouscustomer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($currentblockPreviouscustomer['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER, $currentblockPreviouscustomer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::CURRENTBLOCK_PREVIOUSCUSTOMER, $currentblockPreviouscustomer, $comparison);
    }

    /**
     * Filter the query on the other1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther1(1234); // WHERE other1 = 1234
     * $query->filterByOther1(array(12, 34)); // WHERE other1 IN (12, 34)
     * $query->filterByOther1(array('min' => 12)); // WHERE other1 >= 12
     * $query->filterByOther1(array('max' => 12)); // WHERE other1 <= 12
     * </code>
     *
     * @param     mixed $other1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByOther1($other1 = null, $comparison = null)
    {
        if (is_array($other1)) {
            $useMinMax = false;
            if (isset($other1['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::OTHER1, $other1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($other1['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::OTHER1, $other1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::OTHER1, $other1, $comparison);
    }

    /**
     * Filter the query on the other2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther2(1234); // WHERE other2 = 1234
     * $query->filterByOther2(array(12, 34)); // WHERE other2 IN (12, 34)
     * $query->filterByOther2(array('min' => 12)); // WHERE other2 >= 12
     * $query->filterByOther2(array('max' => 12)); // WHERE other2 <= 12
     * </code>
     *
     * @param     mixed $other2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByOther2($other2 = null, $comparison = null)
    {
        if (is_array($other2)) {
            $useMinMax = false;
            if (isset($other2['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::OTHER2, $other2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($other2['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::OTHER2, $other2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::OTHER2, $other2, $comparison);
    }

    /**
     * Filter the query on the other3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOther3('fooValue');   // WHERE other3 = 'fooValue'
     * $query->filterByOther3('%fooValue%'); // WHERE other3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $other3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByOther3($other3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($other3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $other3)) {
                $other3 = str_replace('*', '%', $other3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::OTHER3, $other3, $comparison);
    }

    /**
     * Filter the query on the addedby column
     *
     * Example usage:
     * <code>
     * $query->filterByAddedby(1234); // WHERE addedby = 1234
     * $query->filterByAddedby(array(12, 34)); // WHERE addedby IN (12, 34)
     * $query->filterByAddedby(array('min' => 12)); // WHERE addedby >= 12
     * $query->filterByAddedby(array('max' => 12)); // WHERE addedby <= 12
     * </code>
     *
     * @param     mixed $addedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::ADDEDBY, $addedby, $comparison);
    }

    /**
     * Filter the query on the addeddate column
     *
     * Example usage:
     * <code>
     * $query->filterByAddeddate('2011-03-14'); // WHERE addeddate = '2011-03-14'
     * $query->filterByAddeddate('now'); // WHERE addeddate = '2011-03-14'
     * $query->filterByAddeddate(array('max' => 'yesterday')); // WHERE addeddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $addeddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::ADDEDDATE, $addeddate, $comparison);
    }

    /**
     * Filter the query on the addedtime column
     *
     * Example usage:
     * <code>
     * $query->filterByAddedtime('2011-03-14'); // WHERE addedtime = '2011-03-14'
     * $query->filterByAddedtime('now'); // WHERE addedtime = '2011-03-14'
     * $query->filterByAddedtime(array('max' => 'yesterday')); // WHERE addedtime < '2011-03-13'
     * </code>
     *
     * @param     mixed $addedtime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(TranferedbloksPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(TranferedbloksPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TranferedbloksPeer::ADDEDTIME, $addedtime, $comparison);
    }

    /**
     * Filter the query by a related Customerdetails object
     *
     * @param   Customerdetails|PropelObjectCollection $customerdetails The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TranferedbloksQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerdetails($customerdetails, $comparison = null)
    {
        if ($customerdetails instanceof Customerdetails) {
            return $this
                ->addUsingAlias(TranferedbloksPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
        } elseif ($customerdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TranferedbloksPeer::CUSTOMERCODE, $customerdetails->toKeyValue('PrimaryKey', 'Customercode'), $comparison);
        } else {
            throw new PropelException('filterByCustomerdetails() only accepts arguments of type Customerdetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customerdetails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function joinCustomerdetails($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customerdetails');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Customerdetails');
        }

        return $this;
    }

    /**
     * Use the Customerdetails relation Customerdetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomerdetailsQuery A secondary query class using the current class as primary query
     */
    public function useCustomerdetailsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerdetails($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customerdetails', 'CustomerdetailsQuery');
    }

    /**
     * Filter the query by a related Sales object
     *
     * @param   Sales|PropelObjectCollection $sales The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TranferedbloksQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySales($sales, $comparison = null)
    {
        if ($sales instanceof Sales) {
            return $this
                ->addUsingAlias(TranferedbloksPeer::SALEREFNO, $sales->getRefno(), $comparison);
        } elseif ($sales instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TranferedbloksPeer::SALEREFNO, $sales->toKeyValue('PrimaryKey', 'Refno'), $comparison);
        } else {
            throw new PropelException('filterBySales() only accepts arguments of type Sales or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sales relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function joinSales($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sales');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Sales');
        }

        return $this;
    }

    /**
     * Use the Sales relation Sales object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SalesQuery A secondary query class using the current class as primary query
     */
    public function useSalesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSales($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sales', 'SalesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Tranferedbloks $tranferedbloks Object to remove from the list of results
     *
     * @return TranferedbloksQuery The current query, for fluid interface
     */
    public function prune($tranferedbloks = null)
    {
        if ($tranferedbloks) {
            $this->addUsingAlias(TranferedbloksPeer::REFNO, $tranferedbloks->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
