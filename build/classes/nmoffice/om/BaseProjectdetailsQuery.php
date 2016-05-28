<?php


/**
 * Base class that represents a query for the 'projectdetails' table.
 *
 * project details
 *
 * @method ProjectdetailsQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method ProjectdetailsQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method ProjectdetailsQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method ProjectdetailsQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method ProjectdetailsQuery orderByHousecatcode($order = Criteria::ASC) Order by the housecatcode column
 * @method ProjectdetailsQuery orderByBlocknumber($order = Criteria::ASC) Order by the blocknumber column
 * @method ProjectdetailsQuery orderByBlocksize($order = Criteria::ASC) Order by the blocksize column
 * @method ProjectdetailsQuery orderByBlockprice($order = Criteria::ASC) Order by the blockprice column
 * @method ProjectdetailsQuery orderByReservedate($order = Criteria::ASC) Order by the reservedate column
 * @method ProjectdetailsQuery orderByReservestatus($order = Criteria::ASC) Order by the reservestatus column
 * @method ProjectdetailsQuery orderByPaymentmethod($order = Criteria::ASC) Order by the paymentmethod column
 * @method ProjectdetailsQuery orderByDuedate($order = Criteria::ASC) Order by the duedate column
 * @method ProjectdetailsQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method ProjectdetailsQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method ProjectdetailsQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method ProjectdetailsQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method ProjectdetailsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method ProjectdetailsQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method ProjectdetailsQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method ProjectdetailsQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method ProjectdetailsQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method ProjectdetailsQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method ProjectdetailsQuery groupByRefno() Group by the refno column
 * @method ProjectdetailsQuery groupByLocationcode() Group by the locationcode column
 * @method ProjectdetailsQuery groupByProjectcode() Group by the projectcode column
 * @method ProjectdetailsQuery groupByCustomercode() Group by the customercode column
 * @method ProjectdetailsQuery groupByHousecatcode() Group by the housecatcode column
 * @method ProjectdetailsQuery groupByBlocknumber() Group by the blocknumber column
 * @method ProjectdetailsQuery groupByBlocksize() Group by the blocksize column
 * @method ProjectdetailsQuery groupByBlockprice() Group by the blockprice column
 * @method ProjectdetailsQuery groupByReservedate() Group by the reservedate column
 * @method ProjectdetailsQuery groupByReservestatus() Group by the reservestatus column
 * @method ProjectdetailsQuery groupByPaymentmethod() Group by the paymentmethod column
 * @method ProjectdetailsQuery groupByDuedate() Group by the duedate column
 * @method ProjectdetailsQuery groupByDeleted() Group by the deleted column
 * @method ProjectdetailsQuery groupByAddedby() Group by the addedby column
 * @method ProjectdetailsQuery groupByAddeddate() Group by the addeddate column
 * @method ProjectdetailsQuery groupByAddedtime() Group by the addedtime column
 * @method ProjectdetailsQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method ProjectdetailsQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method ProjectdetailsQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method ProjectdetailsQuery groupByDeletedby() Group by the deletedby column
 * @method ProjectdetailsQuery groupByDeleteddate() Group by the deleteddate column
 * @method ProjectdetailsQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method ProjectdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectdetailsQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method ProjectdetailsQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method ProjectdetailsQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method ProjectdetailsQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method ProjectdetailsQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method ProjectdetailsQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method ProjectdetailsQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method ProjectdetailsQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method ProjectdetailsQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method ProjectdetailsQuery leftJoinHousecategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Housecategory relation
 * @method ProjectdetailsQuery rightJoinHousecategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Housecategory relation
 * @method ProjectdetailsQuery innerJoinHousecategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Housecategory relation
 *
 * @method ProjectdetailsQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method ProjectdetailsQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method ProjectdetailsQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method ProjectdetailsQuery leftJoinRefunds($relationAlias = null) Adds a LEFT JOIN clause to the query using the Refunds relation
 * @method ProjectdetailsQuery rightJoinRefunds($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Refunds relation
 * @method ProjectdetailsQuery innerJoinRefunds($relationAlias = null) Adds a INNER JOIN clause to the query using the Refunds relation
 *
 * @method Projectdetails findOne(PropelPDO $con = null) Return the first Projectdetails matching the query
 * @method Projectdetails findOneOrCreate(PropelPDO $con = null) Return the first Projectdetails matching the query, or a new Projectdetails object populated from the query conditions when no match is found
 *
 * @method Projectdetails findOneByLocationcode(int $locationcode) Return the first Projectdetails filtered by the locationcode column
 * @method Projectdetails findOneByProjectcode(int $projectcode) Return the first Projectdetails filtered by the projectcode column
 * @method Projectdetails findOneByCustomercode(int $customercode) Return the first Projectdetails filtered by the customercode column
 * @method Projectdetails findOneByHousecatcode(int $housecatcode) Return the first Projectdetails filtered by the housecatcode column
 * @method Projectdetails findOneByBlocknumber(string $blocknumber) Return the first Projectdetails filtered by the blocknumber column
 * @method Projectdetails findOneByBlocksize(double $blocksize) Return the first Projectdetails filtered by the blocksize column
 * @method Projectdetails findOneByBlockprice(double $blockprice) Return the first Projectdetails filtered by the blockprice column
 * @method Projectdetails findOneByReservedate(string $reservedate) Return the first Projectdetails filtered by the reservedate column
 * @method Projectdetails findOneByReservestatus(int $reservestatus) Return the first Projectdetails filtered by the reservestatus column
 * @method Projectdetails findOneByPaymentmethod(int $paymentmethod) Return the first Projectdetails filtered by the paymentmethod column
 * @method Projectdetails findOneByDuedate(string $duedate) Return the first Projectdetails filtered by the duedate column
 * @method Projectdetails findOneByDeleted(boolean $deleted) Return the first Projectdetails filtered by the deleted column
 * @method Projectdetails findOneByAddedby(int $addedby) Return the first Projectdetails filtered by the addedby column
 * @method Projectdetails findOneByAddeddate(string $addeddate) Return the first Projectdetails filtered by the addeddate column
 * @method Projectdetails findOneByAddedtime(string $addedtime) Return the first Projectdetails filtered by the addedtime column
 * @method Projectdetails findOneByLastmodifiedby(int $lastmodifiedby) Return the first Projectdetails filtered by the lastmodifiedby column
 * @method Projectdetails findOneByLastmodifieddate(string $lastmodifieddate) Return the first Projectdetails filtered by the lastmodifieddate column
 * @method Projectdetails findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Projectdetails filtered by the lastmodifiedtime column
 * @method Projectdetails findOneByDeletedby(int $deletedby) Return the first Projectdetails filtered by the deletedby column
 * @method Projectdetails findOneByDeleteddate(string $deleteddate) Return the first Projectdetails filtered by the deleteddate column
 * @method Projectdetails findOneByDeletedtime(string $deletedtime) Return the first Projectdetails filtered by the deletedtime column
 *
 * @method array findByRefno(int $refno) Return Projectdetails objects filtered by the refno column
 * @method array findByLocationcode(int $locationcode) Return Projectdetails objects filtered by the locationcode column
 * @method array findByProjectcode(int $projectcode) Return Projectdetails objects filtered by the projectcode column
 * @method array findByCustomercode(int $customercode) Return Projectdetails objects filtered by the customercode column
 * @method array findByHousecatcode(int $housecatcode) Return Projectdetails objects filtered by the housecatcode column
 * @method array findByBlocknumber(string $blocknumber) Return Projectdetails objects filtered by the blocknumber column
 * @method array findByBlocksize(double $blocksize) Return Projectdetails objects filtered by the blocksize column
 * @method array findByBlockprice(double $blockprice) Return Projectdetails objects filtered by the blockprice column
 * @method array findByReservedate(string $reservedate) Return Projectdetails objects filtered by the reservedate column
 * @method array findByReservestatus(int $reservestatus) Return Projectdetails objects filtered by the reservestatus column
 * @method array findByPaymentmethod(int $paymentmethod) Return Projectdetails objects filtered by the paymentmethod column
 * @method array findByDuedate(string $duedate) Return Projectdetails objects filtered by the duedate column
 * @method array findByDeleted(boolean $deleted) Return Projectdetails objects filtered by the deleted column
 * @method array findByAddedby(int $addedby) Return Projectdetails objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Projectdetails objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Projectdetails objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Projectdetails objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Projectdetails objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Projectdetails objects filtered by the lastmodifiedtime column
 * @method array findByDeletedby(int $deletedby) Return Projectdetails objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Projectdetails objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Projectdetails objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseProjectdetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProjectdetailsQuery object.
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
            $modelName = 'Projectdetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectdetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectdetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectdetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectdetailsQuery) {
            return $criteria;
        }
        $query = new ProjectdetailsQuery(null, null, $modelAlias);

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
     * @return   Projectdetails|Projectdetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectdetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Projectdetails A model object, or null if the key is not found
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
     * @return                 Projectdetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `locationcode`, `projectcode`, `customercode`, `housecatcode`, `blocknumber`, `blocksize`, `blockprice`, `reservedate`, `reservestatus`, `paymentmethod`, `duedate`, `deleted`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime`, `deletedby`, `deleteddate`, `deletedtime` FROM `projectdetails` WHERE `refno` = :p0';
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
            $obj = new Projectdetails();
            $obj->hydrate($row);
            ProjectdetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Projectdetails|Projectdetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Projectdetails[]|mixed the list of results, formatted by the current formatter
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectdetailsPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectdetailsPeer::REFNO, $keys, Criteria::IN);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::REFNO, $refno, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByLocationcode($locationcode = null, $comparison = null)
    {
        if (is_array($locationcode)) {
            $useMinMax = false;
            if (isset($locationcode['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationcode['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $locationcode, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByProjectcode($projectcode = null, $comparison = null)
    {
        if (is_array($projectcode)) {
            $useMinMax = false;
            if (isset($projectcode['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectcode['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $projectcode, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByCustomercode($customercode = null, $comparison = null)
    {
        if (is_array($customercode)) {
            $useMinMax = false;
            if (isset($customercode['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customercode['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customercode, $comparison);
    }

    /**
     * Filter the query on the housecatcode column
     *
     * Example usage:
     * <code>
     * $query->filterByHousecatcode(1234); // WHERE housecatcode = 1234
     * $query->filterByHousecatcode(array(12, 34)); // WHERE housecatcode IN (12, 34)
     * $query->filterByHousecatcode(array('min' => 12)); // WHERE housecatcode >= 12
     * $query->filterByHousecatcode(array('max' => 12)); // WHERE housecatcode <= 12
     * </code>
     *
     * @see       filterByHousecategory()
     *
     * @param     mixed $housecatcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByHousecatcode($housecatcode = null, $comparison = null)
    {
        if (is_array($housecatcode)) {
            $useMinMax = false;
            if (isset($housecatcode['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecatcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($housecatcode['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecatcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecatcode, $comparison);
    }

    /**
     * Filter the query on the blocknumber column
     *
     * Example usage:
     * <code>
     * $query->filterByBlocknumber('fooValue');   // WHERE blocknumber = 'fooValue'
     * $query->filterByBlocknumber('%fooValue%'); // WHERE blocknumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $blocknumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByBlocknumber($blocknumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($blocknumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $blocknumber)) {
                $blocknumber = str_replace('*', '%', $blocknumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::BLOCKNUMBER, $blocknumber, $comparison);
    }

    /**
     * Filter the query on the blocksize column
     *
     * Example usage:
     * <code>
     * $query->filterByBlocksize(1234); // WHERE blocksize = 1234
     * $query->filterByBlocksize(array(12, 34)); // WHERE blocksize IN (12, 34)
     * $query->filterByBlocksize(array('min' => 12)); // WHERE blocksize >= 12
     * $query->filterByBlocksize(array('max' => 12)); // WHERE blocksize <= 12
     * </code>
     *
     * @param     mixed $blocksize The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByBlocksize($blocksize = null, $comparison = null)
    {
        if (is_array($blocksize)) {
            $useMinMax = false;
            if (isset($blocksize['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::BLOCKSIZE, $blocksize['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blocksize['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::BLOCKSIZE, $blocksize['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::BLOCKSIZE, $blocksize, $comparison);
    }

    /**
     * Filter the query on the blockprice column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockprice(1234); // WHERE blockprice = 1234
     * $query->filterByBlockprice(array(12, 34)); // WHERE blockprice IN (12, 34)
     * $query->filterByBlockprice(array('min' => 12)); // WHERE blockprice >= 12
     * $query->filterByBlockprice(array('max' => 12)); // WHERE blockprice <= 12
     * </code>
     *
     * @param     mixed $blockprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByBlockprice($blockprice = null, $comparison = null)
    {
        if (is_array($blockprice)) {
            $useMinMax = false;
            if (isset($blockprice['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::BLOCKPRICE, $blockprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blockprice['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::BLOCKPRICE, $blockprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::BLOCKPRICE, $blockprice, $comparison);
    }

    /**
     * Filter the query on the reservedate column
     *
     * Example usage:
     * <code>
     * $query->filterByReservedate('2011-03-14'); // WHERE reservedate = '2011-03-14'
     * $query->filterByReservedate('now'); // WHERE reservedate = '2011-03-14'
     * $query->filterByReservedate(array('max' => 'yesterday')); // WHERE reservedate < '2011-03-13'
     * </code>
     *
     * @param     mixed $reservedate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByReservedate($reservedate = null, $comparison = null)
    {
        if (is_array($reservedate)) {
            $useMinMax = false;
            if (isset($reservedate['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::RESERVEDATE, $reservedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reservedate['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::RESERVEDATE, $reservedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::RESERVEDATE, $reservedate, $comparison);
    }

    /**
     * Filter the query on the reservestatus column
     *
     * Example usage:
     * <code>
     * $query->filterByReservestatus(1234); // WHERE reservestatus = 1234
     * $query->filterByReservestatus(array(12, 34)); // WHERE reservestatus IN (12, 34)
     * $query->filterByReservestatus(array('min' => 12)); // WHERE reservestatus >= 12
     * $query->filterByReservestatus(array('max' => 12)); // WHERE reservestatus <= 12
     * </code>
     *
     * @param     mixed $reservestatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByReservestatus($reservestatus = null, $comparison = null)
    {
        if (is_array($reservestatus)) {
            $useMinMax = false;
            if (isset($reservestatus['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::RESERVESTATUS, $reservestatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reservestatus['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::RESERVESTATUS, $reservestatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::RESERVESTATUS, $reservestatus, $comparison);
    }

    /**
     * Filter the query on the paymentmethod column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentmethod(1234); // WHERE paymentmethod = 1234
     * $query->filterByPaymentmethod(array(12, 34)); // WHERE paymentmethod IN (12, 34)
     * $query->filterByPaymentmethod(array('min' => 12)); // WHERE paymentmethod >= 12
     * $query->filterByPaymentmethod(array('max' => 12)); // WHERE paymentmethod <= 12
     * </code>
     *
     * @param     mixed $paymentmethod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByPaymentmethod($paymentmethod = null, $comparison = null)
    {
        if (is_array($paymentmethod)) {
            $useMinMax = false;
            if (isset($paymentmethod['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::PAYMENTMETHOD, $paymentmethod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentmethod['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::PAYMENTMETHOD, $paymentmethod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::PAYMENTMETHOD, $paymentmethod, $comparison);
    }

    /**
     * Filter the query on the duedate column
     *
     * Example usage:
     * <code>
     * $query->filterByDuedate('2011-03-14'); // WHERE duedate = '2011-03-14'
     * $query->filterByDuedate('now'); // WHERE duedate = '2011-03-14'
     * $query->filterByDuedate(array('max' => 'yesterday')); // WHERE duedate < '2011-03-13'
     * </code>
     *
     * @param     mixed $duedate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByDuedate($duedate = null, $comparison = null)
    {
        if (is_array($duedate)) {
            $useMinMax = false;
            if (isset($duedate['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DUEDATE, $duedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duedate['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DUEDATE, $duedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::DUEDATE, $duedate, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProjectdetailsPeer::DELETED, $deleted, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::ADDEDBY, $addedby, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::ADDEDDATE, $addeddate, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::ADDEDTIME, $addedtime, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (is_array($lastmodifiedby)) {
            $useMinMax = false;
            if (isset($lastmodifiedby['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedby['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
    {
        if (is_array($lastmodifieddate)) {
            $useMinMax = false;
            if (isset($lastmodifieddate['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifieddate['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
    {
        if (is_array($lastmodifiedtime)) {
            $useMinMax = false;
            if (isset($lastmodifiedtime['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedtime['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByDeletedby($deletedby = null, $comparison = null)
    {
        if (is_array($deletedby)) {
            $useMinMax = false;
            if (isset($deletedby['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedby['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::DELETEDBY, $deletedby, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByDeleteddate($deleteddate = null, $comparison = null)
    {
        if (is_array($deleteddate)) {
            $useMinMax = false;
            if (isset($deleteddate['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deleteddate['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::DELETEDDATE, $deleteddate, $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function filterByDeletedtime($deletedtime = null, $comparison = null)
    {
        if (is_array($deletedtime)) {
            $useMinMax = false;
            if (isset($deletedtime['min'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedtime['max'])) {
                $this->addUsingAlias(ProjectdetailsPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectdetailsPeer::DELETEDTIME, $deletedtime, $comparison);
    }

    /**
     * Filter the query by a related Location object
     *
     * @param   Location|PropelObjectCollection $location The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLocation($location, $comparison = null)
    {
        if ($location instanceof Location) {
            return $this
                ->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
        } elseif ($location instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $location->toKeyValue('PrimaryKey', 'Locationcode'), $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
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
     * Filter the query by a related Project object
     *
     * @param   Project|PropelObjectCollection $project The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $project->toKeyValue('PrimaryKey', 'Projectcode'), $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
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
     * Filter the query by a related Customerdetails object
     *
     * @param   Customerdetails|PropelObjectCollection $customerdetails The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerdetails($customerdetails, $comparison = null)
    {
        if ($customerdetails instanceof Customerdetails) {
            return $this
                ->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
        } elseif ($customerdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customerdetails->toKeyValue('PrimaryKey', 'Customercode'), $comparison);
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
     * @return ProjectdetailsQuery The current query, for fluid interface
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
     * Filter the query by a related Housecategory object
     *
     * @param   Housecategory|PropelObjectCollection $housecategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHousecategory($housecategory, $comparison = null)
    {
        if ($housecategory instanceof Housecategory) {
            return $this
                ->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecategory->getHousecatcode(), $comparison);
        } elseif ($housecategory instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecategory->toKeyValue('PrimaryKey', 'Housecatcode'), $comparison);
        } else {
            throw new PropelException('filterByHousecategory() only accepts arguments of type Housecategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Housecategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function joinHousecategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Housecategory');

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
            $this->addJoinObject($join, 'Housecategory');
        }

        return $this;
    }

    /**
     * Use the Housecategory relation Housecategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   HousecategoryQuery A secondary query class using the current class as primary query
     */
    public function useHousecategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinHousecategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Housecategory', 'HousecategoryQuery');
    }

    /**
     * Filter the query by a related Sales object
     *
     * @param   Sales|PropelObjectCollection $sales  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySales($sales, $comparison = null)
    {
        if ($sales instanceof Sales) {
            return $this
                ->addUsingAlias(ProjectdetailsPeer::REFNO, $sales->getBlockrefnumber(), $comparison);
        } elseif ($sales instanceof PropelObjectCollection) {
            return $this
                ->useSalesQuery()
                ->filterByPrimaryKeys($sales->getPrimaryKeys())
                ->endUse();
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
     * @return ProjectdetailsQuery The current query, for fluid interface
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
     * Filter the query by a related Refunds object
     *
     * @param   Refunds|PropelObjectCollection $refunds  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRefunds($refunds, $comparison = null)
    {
        if ($refunds instanceof Refunds) {
            return $this
                ->addUsingAlias(ProjectdetailsPeer::REFNO, $refunds->getBlockrefnumber(), $comparison);
        } elseif ($refunds instanceof PropelObjectCollection) {
            return $this
                ->useRefundsQuery()
                ->filterByPrimaryKeys($refunds->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRefunds() only accepts arguments of type Refunds or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Refunds relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function joinRefunds($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Refunds');

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
            $this->addJoinObject($join, 'Refunds');
        }

        return $this;
    }

    /**
     * Use the Refunds relation Refunds object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RefundsQuery A secondary query class using the current class as primary query
     */
    public function useRefundsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRefunds($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Refunds', 'RefundsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Projectdetails $projectdetails Object to remove from the list of results
     *
     * @return ProjectdetailsQuery The current query, for fluid interface
     */
    public function prune($projectdetails = null)
    {
        if ($projectdetails) {
            $this->addUsingAlias(ProjectdetailsPeer::REFNO, $projectdetails->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
