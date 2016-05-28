<?php


/**
 * Base class that represents a query for the 'refunds' table.
 *
 * house sales of projects
 *
 * @method RefundsQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method RefundsQuery orderBySalerefno($order = Criteria::ASC) Order by the salerefno column
 * @method RefundsQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method RefundsQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method RefundsQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method RefundsQuery orderByBlockrefnumber($order = Criteria::ASC) Order by the blockrefnumber column
 * @method RefundsQuery orderByPayplanrefno($order = Criteria::ASC) Order by the payplanrefno column
 * @method RefundsQuery orderByRefundamount($order = Criteria::ASC) Order by the refundamount column
 * @method RefundsQuery orderByRefundate($order = Criteria::ASC) Order by the refundate column
 * @method RefundsQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method RefundsQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method RefundsQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method RefundsQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 * @method RefundsQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method RefundsQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method RefundsQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method RefundsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method RefundsQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method RefundsQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 *
 * @method RefundsQuery groupByRefno() Group by the refno column
 * @method RefundsQuery groupBySalerefno() Group by the salerefno column
 * @method RefundsQuery groupByCustomercode() Group by the customercode column
 * @method RefundsQuery groupByLocationcode() Group by the locationcode column
 * @method RefundsQuery groupByProjectcode() Group by the projectcode column
 * @method RefundsQuery groupByBlockrefnumber() Group by the blockrefnumber column
 * @method RefundsQuery groupByPayplanrefno() Group by the payplanrefno column
 * @method RefundsQuery groupByRefundamount() Group by the refundamount column
 * @method RefundsQuery groupByRefundate() Group by the refundate column
 * @method RefundsQuery groupByDeleted() Group by the deleted column
 * @method RefundsQuery groupByDeletedby() Group by the deletedby column
 * @method RefundsQuery groupByDeleteddate() Group by the deleteddate column
 * @method RefundsQuery groupByDeletedtime() Group by the deletedtime column
 * @method RefundsQuery groupByAddedby() Group by the addedby column
 * @method RefundsQuery groupByAddeddate() Group by the addeddate column
 * @method RefundsQuery groupByAddedtime() Group by the addedtime column
 * @method RefundsQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method RefundsQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method RefundsQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 *
 * @method RefundsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RefundsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RefundsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RefundsQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method RefundsQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method RefundsQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method RefundsQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method RefundsQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method RefundsQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method RefundsQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method RefundsQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method RefundsQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method RefundsQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method RefundsQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method RefundsQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method RefundsQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method RefundsQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method RefundsQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method Refunds findOne(PropelPDO $con = null) Return the first Refunds matching the query
 * @method Refunds findOneOrCreate(PropelPDO $con = null) Return the first Refunds matching the query, or a new Refunds object populated from the query conditions when no match is found
 *
 * @method Refunds findOneBySalerefno(int $salerefno) Return the first Refunds filtered by the salerefno column
 * @method Refunds findOneByCustomercode(int $customercode) Return the first Refunds filtered by the customercode column
 * @method Refunds findOneByLocationcode(int $locationcode) Return the first Refunds filtered by the locationcode column
 * @method Refunds findOneByProjectcode(int $projectcode) Return the first Refunds filtered by the projectcode column
 * @method Refunds findOneByBlockrefnumber(int $blockrefnumber) Return the first Refunds filtered by the blockrefnumber column
 * @method Refunds findOneByPayplanrefno(int $payplanrefno) Return the first Refunds filtered by the payplanrefno column
 * @method Refunds findOneByRefundamount(double $refundamount) Return the first Refunds filtered by the refundamount column
 * @method Refunds findOneByRefundate(string $refundate) Return the first Refunds filtered by the refundate column
 * @method Refunds findOneByDeleted(boolean $deleted) Return the first Refunds filtered by the deleted column
 * @method Refunds findOneByDeletedby(int $deletedby) Return the first Refunds filtered by the deletedby column
 * @method Refunds findOneByDeleteddate(string $deleteddate) Return the first Refunds filtered by the deleteddate column
 * @method Refunds findOneByDeletedtime(string $deletedtime) Return the first Refunds filtered by the deletedtime column
 * @method Refunds findOneByAddedby(int $addedby) Return the first Refunds filtered by the addedby column
 * @method Refunds findOneByAddeddate(string $addeddate) Return the first Refunds filtered by the addeddate column
 * @method Refunds findOneByAddedtime(string $addedtime) Return the first Refunds filtered by the addedtime column
 * @method Refunds findOneByLastmodifiedby(int $lastmodifiedby) Return the first Refunds filtered by the lastmodifiedby column
 * @method Refunds findOneByLastmodifieddate(string $lastmodifieddate) Return the first Refunds filtered by the lastmodifieddate column
 * @method Refunds findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Refunds filtered by the lastmodifiedtime column
 *
 * @method array findByRefno(int $refno) Return Refunds objects filtered by the refno column
 * @method array findBySalerefno(int $salerefno) Return Refunds objects filtered by the salerefno column
 * @method array findByCustomercode(int $customercode) Return Refunds objects filtered by the customercode column
 * @method array findByLocationcode(int $locationcode) Return Refunds objects filtered by the locationcode column
 * @method array findByProjectcode(int $projectcode) Return Refunds objects filtered by the projectcode column
 * @method array findByBlockrefnumber(int $blockrefnumber) Return Refunds objects filtered by the blockrefnumber column
 * @method array findByPayplanrefno(int $payplanrefno) Return Refunds objects filtered by the payplanrefno column
 * @method array findByRefundamount(double $refundamount) Return Refunds objects filtered by the refundamount column
 * @method array findByRefundate(string $refundate) Return Refunds objects filtered by the refundate column
 * @method array findByDeleted(boolean $deleted) Return Refunds objects filtered by the deleted column
 * @method array findByDeletedby(int $deletedby) Return Refunds objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Refunds objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Refunds objects filtered by the deletedtime column
 * @method array findByAddedby(int $addedby) Return Refunds objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Refunds objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Refunds objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Refunds objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Refunds objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Refunds objects filtered by the lastmodifiedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseRefundsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRefundsQuery object.
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
            $modelName = 'Refunds';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RefundsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RefundsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RefundsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RefundsQuery) {
            return $criteria;
        }
        $query = new RefundsQuery(null, null, $modelAlias);

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
     * @return   Refunds|Refunds[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RefundsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RefundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Refunds A model object, or null if the key is not found
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
     * @return                 Refunds A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `salerefno`, `customercode`, `locationcode`, `projectcode`, `blockrefnumber`, `payplanrefno`, `refundamount`, `refundate`, `deleted`, `deletedby`, `deleteddate`, `deletedtime`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime` FROM `refunds` WHERE `refno` = :p0';
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
            $obj = new Refunds();
            $obj->hydrate($row);
            RefundsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Refunds|Refunds[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Refunds[]|mixed the list of results, formatted by the current formatter
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RefundsPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RefundsPeer::REFNO, $keys, Criteria::IN);
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(RefundsPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(RefundsPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::REFNO, $refno, $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterBySalerefno($salerefno = null, $comparison = null)
    {
        if (is_array($salerefno)) {
            $useMinMax = false;
            if (isset($salerefno['min'])) {
                $this->addUsingAlias(RefundsPeer::SALEREFNO, $salerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salerefno['max'])) {
                $this->addUsingAlias(RefundsPeer::SALEREFNO, $salerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::SALEREFNO, $salerefno, $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByCustomercode($customercode = null, $comparison = null)
    {
        if (is_array($customercode)) {
            $useMinMax = false;
            if (isset($customercode['min'])) {
                $this->addUsingAlias(RefundsPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customercode['max'])) {
                $this->addUsingAlias(RefundsPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::CUSTOMERCODE, $customercode, $comparison);
    }

    /**
     * Filter the query on the locationcode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationcode(1234); // WHERE locationcode = 1234
     * $query->filterByLocationcode(array(12, 34)); // WHERE locationcode IN (12, 34)
     * $query->filterByLocationcode(array('min' => 12)); // WHERE locationcode >= 12
     * $query->filterByLocationcode(array('max' => 12)); // WHERE locationcode <= 12
     * </code>
     *
     * @see       filterByLocation()
     *
     * @param     mixed $locationcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByLocationcode($locationcode = null, $comparison = null)
    {
        if (is_array($locationcode)) {
            $useMinMax = false;
            if (isset($locationcode['min'])) {
                $this->addUsingAlias(RefundsPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationcode['max'])) {
                $this->addUsingAlias(RefundsPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::LOCATIONCODE, $locationcode, $comparison);
    }

    /**
     * Filter the query on the projectcode column
     *
     * Example usage:
     * <code>
     * $query->filterByProjectcode(1234); // WHERE projectcode = 1234
     * $query->filterByProjectcode(array(12, 34)); // WHERE projectcode IN (12, 34)
     * $query->filterByProjectcode(array('min' => 12)); // WHERE projectcode >= 12
     * $query->filterByProjectcode(array('max' => 12)); // WHERE projectcode <= 12
     * </code>
     *
     * @see       filterByProject()
     *
     * @param     mixed $projectcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByProjectcode($projectcode = null, $comparison = null)
    {
        if (is_array($projectcode)) {
            $useMinMax = false;
            if (isset($projectcode['min'])) {
                $this->addUsingAlias(RefundsPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectcode['max'])) {
                $this->addUsingAlias(RefundsPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::PROJECTCODE, $projectcode, $comparison);
    }

    /**
     * Filter the query on the blockrefnumber column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockrefnumber(1234); // WHERE blockrefnumber = 1234
     * $query->filterByBlockrefnumber(array(12, 34)); // WHERE blockrefnumber IN (12, 34)
     * $query->filterByBlockrefnumber(array('min' => 12)); // WHERE blockrefnumber >= 12
     * $query->filterByBlockrefnumber(array('max' => 12)); // WHERE blockrefnumber <= 12
     * </code>
     *
     * @see       filterByProjectdetails()
     *
     * @param     mixed $blockrefnumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByBlockrefnumber($blockrefnumber = null, $comparison = null)
    {
        if (is_array($blockrefnumber)) {
            $useMinMax = false;
            if (isset($blockrefnumber['min'])) {
                $this->addUsingAlias(RefundsPeer::BLOCKREFNUMBER, $blockrefnumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blockrefnumber['max'])) {
                $this->addUsingAlias(RefundsPeer::BLOCKREFNUMBER, $blockrefnumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::BLOCKREFNUMBER, $blockrefnumber, $comparison);
    }

    /**
     * Filter the query on the payplanrefno column
     *
     * Example usage:
     * <code>
     * $query->filterByPayplanrefno(1234); // WHERE payplanrefno = 1234
     * $query->filterByPayplanrefno(array(12, 34)); // WHERE payplanrefno IN (12, 34)
     * $query->filterByPayplanrefno(array('min' => 12)); // WHERE payplanrefno >= 12
     * $query->filterByPayplanrefno(array('max' => 12)); // WHERE payplanrefno <= 12
     * </code>
     *
     * @param     mixed $payplanrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByPayplanrefno($payplanrefno = null, $comparison = null)
    {
        if (is_array($payplanrefno)) {
            $useMinMax = false;
            if (isset($payplanrefno['min'])) {
                $this->addUsingAlias(RefundsPeer::PAYPLANREFNO, $payplanrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($payplanrefno['max'])) {
                $this->addUsingAlias(RefundsPeer::PAYPLANREFNO, $payplanrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::PAYPLANREFNO, $payplanrefno, $comparison);
    }

    /**
     * Filter the query on the refundamount column
     *
     * Example usage:
     * <code>
     * $query->filterByRefundamount(1234); // WHERE refundamount = 1234
     * $query->filterByRefundamount(array(12, 34)); // WHERE refundamount IN (12, 34)
     * $query->filterByRefundamount(array('min' => 12)); // WHERE refundamount >= 12
     * $query->filterByRefundamount(array('max' => 12)); // WHERE refundamount <= 12
     * </code>
     *
     * @param     mixed $refundamount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByRefundamount($refundamount = null, $comparison = null)
    {
        if (is_array($refundamount)) {
            $useMinMax = false;
            if (isset($refundamount['min'])) {
                $this->addUsingAlias(RefundsPeer::REFUNDAMOUNT, $refundamount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refundamount['max'])) {
                $this->addUsingAlias(RefundsPeer::REFUNDAMOUNT, $refundamount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::REFUNDAMOUNT, $refundamount, $comparison);
    }

    /**
     * Filter the query on the refundate column
     *
     * Example usage:
     * <code>
     * $query->filterByRefundate('2011-03-14'); // WHERE refundate = '2011-03-14'
     * $query->filterByRefundate('now'); // WHERE refundate = '2011-03-14'
     * $query->filterByRefundate(array('max' => 'yesterday')); // WHERE refundate < '2011-03-13'
     * </code>
     *
     * @param     mixed $refundate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByRefundate($refundate = null, $comparison = null)
    {
        if (is_array($refundate)) {
            $useMinMax = false;
            if (isset($refundate['min'])) {
                $this->addUsingAlias(RefundsPeer::REFUNDATE, $refundate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refundate['max'])) {
                $this->addUsingAlias(RefundsPeer::REFUNDATE, $refundate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::REFUNDATE, $refundate, $comparison);
    }

    /**
     * Filter the query on the deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByDeleted(true); // WHERE deleted = true
     * $query->filterByDeleted('yes'); // WHERE deleted = true
     * </code>
     *
     * @param     boolean|string $deleted The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RefundsPeer::DELETED, $deleted, $comparison);
    }

    /**
     * Filter the query on the deletedby column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedby(1234); // WHERE deletedby = 1234
     * $query->filterByDeletedby(array(12, 34)); // WHERE deletedby IN (12, 34)
     * $query->filterByDeletedby(array('min' => 12)); // WHERE deletedby >= 12
     * $query->filterByDeletedby(array('max' => 12)); // WHERE deletedby <= 12
     * </code>
     *
     * @param     mixed $deletedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByDeletedby($deletedby = null, $comparison = null)
    {
        if (is_array($deletedby)) {
            $useMinMax = false;
            if (isset($deletedby['min'])) {
                $this->addUsingAlias(RefundsPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedby['max'])) {
                $this->addUsingAlias(RefundsPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::DELETEDBY, $deletedby, $comparison);
    }

    /**
     * Filter the query on the deleteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByDeleteddate('2011-03-14'); // WHERE deleteddate = '2011-03-14'
     * $query->filterByDeleteddate('now'); // WHERE deleteddate = '2011-03-14'
     * $query->filterByDeleteddate(array('max' => 'yesterday')); // WHERE deleteddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $deleteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByDeleteddate($deleteddate = null, $comparison = null)
    {
        if (is_array($deleteddate)) {
            $useMinMax = false;
            if (isset($deleteddate['min'])) {
                $this->addUsingAlias(RefundsPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deleteddate['max'])) {
                $this->addUsingAlias(RefundsPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::DELETEDDATE, $deleteddate, $comparison);
    }

    /**
     * Filter the query on the deletedtime column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedtime('2011-03-14'); // WHERE deletedtime = '2011-03-14'
     * $query->filterByDeletedtime('now'); // WHERE deletedtime = '2011-03-14'
     * $query->filterByDeletedtime(array('max' => 'yesterday')); // WHERE deletedtime < '2011-03-13'
     * </code>
     *
     * @param     mixed $deletedtime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByDeletedtime($deletedtime = null, $comparison = null)
    {
        if (is_array($deletedtime)) {
            $useMinMax = false;
            if (isset($deletedtime['min'])) {
                $this->addUsingAlias(RefundsPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedtime['max'])) {
                $this->addUsingAlias(RefundsPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::DELETEDTIME, $deletedtime, $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(RefundsPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(RefundsPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::ADDEDBY, $addedby, $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(RefundsPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(RefundsPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::ADDEDDATE, $addeddate, $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(RefundsPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(RefundsPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::ADDEDTIME, $addedtime, $comparison);
    }

    /**
     * Filter the query on the lastmodifiedby column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifiedby(1234); // WHERE lastmodifiedby = 1234
     * $query->filterByLastmodifiedby(array(12, 34)); // WHERE lastmodifiedby IN (12, 34)
     * $query->filterByLastmodifiedby(array('min' => 12)); // WHERE lastmodifiedby >= 12
     * $query->filterByLastmodifiedby(array('max' => 12)); // WHERE lastmodifiedby <= 12
     * </code>
     *
     * @param     mixed $lastmodifiedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (is_array($lastmodifiedby)) {
            $useMinMax = false;
            if (isset($lastmodifiedby['min'])) {
                $this->addUsingAlias(RefundsPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedby['max'])) {
                $this->addUsingAlias(RefundsPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
    }

    /**
     * Filter the query on the lastmodifieddate column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifieddate('2011-03-14'); // WHERE lastmodifieddate = '2011-03-14'
     * $query->filterByLastmodifieddate('now'); // WHERE lastmodifieddate = '2011-03-14'
     * $query->filterByLastmodifieddate(array('max' => 'yesterday')); // WHERE lastmodifieddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastmodifieddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
    {
        if (is_array($lastmodifieddate)) {
            $useMinMax = false;
            if (isset($lastmodifieddate['min'])) {
                $this->addUsingAlias(RefundsPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifieddate['max'])) {
                $this->addUsingAlias(RefundsPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
    }

    /**
     * Filter the query on the lastmodifiedtime column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifiedtime('2011-03-14'); // WHERE lastmodifiedtime = '2011-03-14'
     * $query->filterByLastmodifiedtime('now'); // WHERE lastmodifiedtime = '2011-03-14'
     * $query->filterByLastmodifiedtime(array('max' => 'yesterday')); // WHERE lastmodifiedtime < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastmodifiedtime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
    {
        if (is_array($lastmodifiedtime)) {
            $useMinMax = false;
            if (isset($lastmodifiedtime['min'])) {
                $this->addUsingAlias(RefundsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedtime['max'])) {
                $this->addUsingAlias(RefundsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefundsPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
    }

    /**
     * Filter the query by a related Customerdetails object
     *
     * @param   Customerdetails|PropelObjectCollection $customerdetails The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RefundsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerdetails($customerdetails, $comparison = null)
    {
        if ($customerdetails instanceof Customerdetails) {
            return $this
                ->addUsingAlias(RefundsPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
        } elseif ($customerdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RefundsPeer::CUSTOMERCODE, $customerdetails->toKeyValue('PrimaryKey', 'Customercode'), $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
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
     * Filter the query by a related Projectdetails object
     *
     * @param   Projectdetails|PropelObjectCollection $projectdetails The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RefundsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProjectdetails($projectdetails, $comparison = null)
    {
        if ($projectdetails instanceof Projectdetails) {
            return $this
                ->addUsingAlias(RefundsPeer::BLOCKREFNUMBER, $projectdetails->getRefno(), $comparison);
        } elseif ($projectdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RefundsPeer::BLOCKREFNUMBER, $projectdetails->toKeyValue('PrimaryKey', 'Refno'), $comparison);
        } else {
            throw new PropelException('filterByProjectdetails() only accepts arguments of type Projectdetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Projectdetails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function joinProjectdetails($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Projectdetails');

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
            $this->addJoinObject($join, 'Projectdetails');
        }

        return $this;
    }

    /**
     * Use the Projectdetails relation Projectdetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectdetailsQuery A secondary query class using the current class as primary query
     */
    public function useProjectdetailsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProjectdetails($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Projectdetails', 'ProjectdetailsQuery');
    }

    /**
     * Filter the query by a related Project object
     *
     * @param   Project|PropelObjectCollection $project The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RefundsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(RefundsPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RefundsPeer::PROJECTCODE, $project->toKeyValue('PrimaryKey', 'Projectcode'), $comparison);
        } else {
            throw new PropelException('filterByProject() only accepts arguments of type Project or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Project relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function joinProject($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Project');

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
            $this->addJoinObject($join, 'Project');
        }

        return $this;
    }

    /**
     * Use the Project relation Project object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectQuery A secondary query class using the current class as primary query
     */
    public function useProjectQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProject($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Project', 'ProjectQuery');
    }

    /**
     * Filter the query by a related Location object
     *
     * @param   Location|PropelObjectCollection $location The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RefundsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLocation($location, $comparison = null)
    {
        if ($location instanceof Location) {
            return $this
                ->addUsingAlias(RefundsPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
        } elseif ($location instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RefundsPeer::LOCATIONCODE, $location->toKeyValue('PrimaryKey', 'Locationcode'), $comparison);
        } else {
            throw new PropelException('filterByLocation() only accepts arguments of type Location or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Location relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function joinLocation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Location');

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
            $this->addJoinObject($join, 'Location');
        }

        return $this;
    }

    /**
     * Use the Location relation Location object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LocationQuery A secondary query class using the current class as primary query
     */
    public function useLocationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Location', 'LocationQuery');
    }

    /**
     * Filter the query by a related Sales object
     *
     * @param   Sales|PropelObjectCollection $sales The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RefundsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySales($sales, $comparison = null)
    {
        if ($sales instanceof Sales) {
            return $this
                ->addUsingAlias(RefundsPeer::SALEREFNO, $sales->getRefno(), $comparison);
        } elseif ($sales instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RefundsPeer::SALEREFNO, $sales->toKeyValue('PrimaryKey', 'Refno'), $comparison);
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
     * @return RefundsQuery The current query, for fluid interface
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
     * @param   Refunds $refunds Object to remove from the list of results
     *
     * @return RefundsQuery The current query, for fluid interface
     */
    public function prune($refunds = null)
    {
        if ($refunds) {
            $this->addUsingAlias(RefundsPeer::REFNO, $refunds->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
