<?php


/**
 * Base class that represents a query for the 'sales' table.
 *
 * house sales of projects
 *
 * @method SalesQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method SalesQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method SalesQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method SalesQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method SalesQuery orderByBlockrefnumber($order = Criteria::ASC) Order by the blockrefnumber column
 * @method SalesQuery orderByPayplanrefno($order = Criteria::ASC) Order by the payplanrefno column
 * @method SalesQuery orderByNofinstallments($order = Criteria::ASC) Order by the nofinstallments column
 * @method SalesQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method SalesQuery orderByInstallamount($order = Criteria::ASC) Order by the installamount column
 * @method SalesQuery orderByTotalpayable($order = Criteria::ASC) Order by the totalpayable column
 * @method SalesQuery orderByPaymentduedate($order = Criteria::ASC) Order by the paymentduedate column
 * @method SalesQuery orderByAgrementstartdate($order = Criteria::ASC) Order by the agrementstartdate column
 * @method SalesQuery orderByAgrementfinishdate($order = Criteria::ASC) Order by the agrementfinishdate column
 * @method SalesQuery orderBySaletype($order = Criteria::ASC) Order by the saletype column
 * @method SalesQuery orderBySalerightoffAmt($order = Criteria::ASC) Order by the salerightoff_amt column
 * @method SalesQuery orderBySalerightoffStatus($order = Criteria::ASC) Order by the salerightoff_status column
 * @method SalesQuery orderBySalerightoffComment($order = Criteria::ASC) Order by the salerightoff_comment column
 * @method SalesQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method SalesQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method SalesQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method SalesQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method SalesQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method SalesQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method SalesQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method SalesQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method SalesQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method SalesQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method SalesQuery groupByRefno() Group by the refno column
 * @method SalesQuery groupByCustomercode() Group by the customercode column
 * @method SalesQuery groupByLocationcode() Group by the locationcode column
 * @method SalesQuery groupByProjectcode() Group by the projectcode column
 * @method SalesQuery groupByBlockrefnumber() Group by the blockrefnumber column
 * @method SalesQuery groupByPayplanrefno() Group by the payplanrefno column
 * @method SalesQuery groupByNofinstallments() Group by the nofinstallments column
 * @method SalesQuery groupByDescription() Group by the description column
 * @method SalesQuery groupByInstallamount() Group by the installamount column
 * @method SalesQuery groupByTotalpayable() Group by the totalpayable column
 * @method SalesQuery groupByPaymentduedate() Group by the paymentduedate column
 * @method SalesQuery groupByAgrementstartdate() Group by the agrementstartdate column
 * @method SalesQuery groupByAgrementfinishdate() Group by the agrementfinishdate column
 * @method SalesQuery groupBySaletype() Group by the saletype column
 * @method SalesQuery groupBySalerightoffAmt() Group by the salerightoff_amt column
 * @method SalesQuery groupBySalerightoffStatus() Group by the salerightoff_status column
 * @method SalesQuery groupBySalerightoffComment() Group by the salerightoff_comment column
 * @method SalesQuery groupByDeleted() Group by the deleted column
 * @method SalesQuery groupByAddedby() Group by the addedby column
 * @method SalesQuery groupByAddeddate() Group by the addeddate column
 * @method SalesQuery groupByAddedtime() Group by the addedtime column
 * @method SalesQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method SalesQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method SalesQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method SalesQuery groupByDeletedby() Group by the deletedby column
 * @method SalesQuery groupByDeleteddate() Group by the deleteddate column
 * @method SalesQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method SalesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SalesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SalesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SalesQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method SalesQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method SalesQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method SalesQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method SalesQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method SalesQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method SalesQuery leftJoinPaymentplan($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paymentplan relation
 * @method SalesQuery rightJoinPaymentplan($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paymentplan relation
 * @method SalesQuery innerJoinPaymentplan($relationAlias = null) Adds a INNER JOIN clause to the query using the Paymentplan relation
 *
 * @method SalesQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method SalesQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method SalesQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method SalesQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method SalesQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method SalesQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method SalesQuery leftJoinCustomerreceipts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerreceipts relation
 * @method SalesQuery rightJoinCustomerreceipts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerreceipts relation
 * @method SalesQuery innerJoinCustomerreceipts($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerreceipts relation
 *
 * @method SalesQuery leftJoinRefunds($relationAlias = null) Adds a LEFT JOIN clause to the query using the Refunds relation
 * @method SalesQuery rightJoinRefunds($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Refunds relation
 * @method SalesQuery innerJoinRefunds($relationAlias = null) Adds a INNER JOIN clause to the query using the Refunds relation
 *
 * @method SalesQuery leftJoinTranferedbloks($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tranferedbloks relation
 * @method SalesQuery rightJoinTranferedbloks($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tranferedbloks relation
 * @method SalesQuery innerJoinTranferedbloks($relationAlias = null) Adds a INNER JOIN clause to the query using the Tranferedbloks relation
 *
 * @method Sales findOne(PropelPDO $con = null) Return the first Sales matching the query
 * @method Sales findOneOrCreate(PropelPDO $con = null) Return the first Sales matching the query, or a new Sales object populated from the query conditions when no match is found
 *
 * @method Sales findOneByCustomercode(int $customercode) Return the first Sales filtered by the customercode column
 * @method Sales findOneByLocationcode(int $locationcode) Return the first Sales filtered by the locationcode column
 * @method Sales findOneByProjectcode(int $projectcode) Return the first Sales filtered by the projectcode column
 * @method Sales findOneByBlockrefnumber(int $blockrefnumber) Return the first Sales filtered by the blockrefnumber column
 * @method Sales findOneByPayplanrefno(int $payplanrefno) Return the first Sales filtered by the payplanrefno column
 * @method Sales findOneByNofinstallments(int $nofinstallments) Return the first Sales filtered by the nofinstallments column
 * @method Sales findOneByDescription(string $description) Return the first Sales filtered by the description column
 * @method Sales findOneByInstallamount(double $installamount) Return the first Sales filtered by the installamount column
 * @method Sales findOneByTotalpayable(double $totalpayable) Return the first Sales filtered by the totalpayable column
 * @method Sales findOneByPaymentduedate(int $paymentduedate) Return the first Sales filtered by the paymentduedate column
 * @method Sales findOneByAgrementstartdate(string $agrementstartdate) Return the first Sales filtered by the agrementstartdate column
 * @method Sales findOneByAgrementfinishdate(string $agrementfinishdate) Return the first Sales filtered by the agrementfinishdate column
 * @method Sales findOneBySaletype(boolean $saletype) Return the first Sales filtered by the saletype column
 * @method Sales findOneBySalerightoffAmt(double $salerightoff_amt) Return the first Sales filtered by the salerightoff_amt column
 * @method Sales findOneBySalerightoffStatus(boolean $salerightoff_status) Return the first Sales filtered by the salerightoff_status column
 * @method Sales findOneBySalerightoffComment(string $salerightoff_comment) Return the first Sales filtered by the salerightoff_comment column
 * @method Sales findOneByDeleted(boolean $deleted) Return the first Sales filtered by the deleted column
 * @method Sales findOneByAddedby(int $addedby) Return the first Sales filtered by the addedby column
 * @method Sales findOneByAddeddate(string $addeddate) Return the first Sales filtered by the addeddate column
 * @method Sales findOneByAddedtime(string $addedtime) Return the first Sales filtered by the addedtime column
 * @method Sales findOneByLastmodifiedby(int $lastmodifiedby) Return the first Sales filtered by the lastmodifiedby column
 * @method Sales findOneByLastmodifieddate(string $lastmodifieddate) Return the first Sales filtered by the lastmodifieddate column
 * @method Sales findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Sales filtered by the lastmodifiedtime column
 * @method Sales findOneByDeletedby(int $deletedby) Return the first Sales filtered by the deletedby column
 * @method Sales findOneByDeleteddate(string $deleteddate) Return the first Sales filtered by the deleteddate column
 * @method Sales findOneByDeletedtime(string $deletedtime) Return the first Sales filtered by the deletedtime column
 *
 * @method array findByRefno(int $refno) Return Sales objects filtered by the refno column
 * @method array findByCustomercode(int $customercode) Return Sales objects filtered by the customercode column
 * @method array findByLocationcode(int $locationcode) Return Sales objects filtered by the locationcode column
 * @method array findByProjectcode(int $projectcode) Return Sales objects filtered by the projectcode column
 * @method array findByBlockrefnumber(int $blockrefnumber) Return Sales objects filtered by the blockrefnumber column
 * @method array findByPayplanrefno(int $payplanrefno) Return Sales objects filtered by the payplanrefno column
 * @method array findByNofinstallments(int $nofinstallments) Return Sales objects filtered by the nofinstallments column
 * @method array findByDescription(string $description) Return Sales objects filtered by the description column
 * @method array findByInstallamount(double $installamount) Return Sales objects filtered by the installamount column
 * @method array findByTotalpayable(double $totalpayable) Return Sales objects filtered by the totalpayable column
 * @method array findByPaymentduedate(int $paymentduedate) Return Sales objects filtered by the paymentduedate column
 * @method array findByAgrementstartdate(string $agrementstartdate) Return Sales objects filtered by the agrementstartdate column
 * @method array findByAgrementfinishdate(string $agrementfinishdate) Return Sales objects filtered by the agrementfinishdate column
 * @method array findBySaletype(boolean $saletype) Return Sales objects filtered by the saletype column
 * @method array findBySalerightoffAmt(double $salerightoff_amt) Return Sales objects filtered by the salerightoff_amt column
 * @method array findBySalerightoffStatus(boolean $salerightoff_status) Return Sales objects filtered by the salerightoff_status column
 * @method array findBySalerightoffComment(string $salerightoff_comment) Return Sales objects filtered by the salerightoff_comment column
 * @method array findByDeleted(boolean $deleted) Return Sales objects filtered by the deleted column
 * @method array findByAddedby(int $addedby) Return Sales objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Sales objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Sales objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Sales objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Sales objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Sales objects filtered by the lastmodifiedtime column
 * @method array findByDeletedby(int $deletedby) Return Sales objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Sales objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Sales objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseSalesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSalesQuery object.
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
            $modelName = 'Sales';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SalesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SalesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SalesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SalesQuery) {
            return $criteria;
        }
        $query = new SalesQuery(null, null, $modelAlias);

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
     * @return   Sales|Sales[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SalesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SalesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sales A model object, or null if the key is not found
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
     * @return                 Sales A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `customercode`, `locationcode`, `projectcode`, `blockrefnumber`, `payplanrefno`, `nofinstallments`, `description`, `installamount`, `totalpayable`, `paymentduedate`, `agrementstartdate`, `agrementfinishdate`, `saletype`, `salerightoff_amt`, `salerightoff_status`, `salerightoff_comment`, `deleted`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime`, `deletedby`, `deleteddate`, `deletedtime` FROM `sales` WHERE `refno` = :p0';
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
            $obj = new Sales();
            $obj->hydrate($row);
            SalesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sales|Sales[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sales[]|mixed the list of results, formatted by the current formatter
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesPeer::REFNO, $keys, Criteria::IN);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(SalesPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(SalesPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::REFNO, $refno, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByCustomercode($customercode = null, $comparison = null)
    {
        if (is_array($customercode)) {
            $useMinMax = false;
            if (isset($customercode['min'])) {
                $this->addUsingAlias(SalesPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customercode['max'])) {
                $this->addUsingAlias(SalesPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::CUSTOMERCODE, $customercode, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByLocationcode($locationcode = null, $comparison = null)
    {
        if (is_array($locationcode)) {
            $useMinMax = false;
            if (isset($locationcode['min'])) {
                $this->addUsingAlias(SalesPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationcode['max'])) {
                $this->addUsingAlias(SalesPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::LOCATIONCODE, $locationcode, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByProjectcode($projectcode = null, $comparison = null)
    {
        if (is_array($projectcode)) {
            $useMinMax = false;
            if (isset($projectcode['min'])) {
                $this->addUsingAlias(SalesPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectcode['max'])) {
                $this->addUsingAlias(SalesPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::PROJECTCODE, $projectcode, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByBlockrefnumber($blockrefnumber = null, $comparison = null)
    {
        if (is_array($blockrefnumber)) {
            $useMinMax = false;
            if (isset($blockrefnumber['min'])) {
                $this->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $blockrefnumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blockrefnumber['max'])) {
                $this->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $blockrefnumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $blockrefnumber, $comparison);
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
     * @see       filterByPaymentplan()
     *
     * @param     mixed $payplanrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByPayplanrefno($payplanrefno = null, $comparison = null)
    {
        if (is_array($payplanrefno)) {
            $useMinMax = false;
            if (isset($payplanrefno['min'])) {
                $this->addUsingAlias(SalesPeer::PAYPLANREFNO, $payplanrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($payplanrefno['max'])) {
                $this->addUsingAlias(SalesPeer::PAYPLANREFNO, $payplanrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::PAYPLANREFNO, $payplanrefno, $comparison);
    }

    /**
     * Filter the query on the nofinstallments column
     *
     * Example usage:
     * <code>
     * $query->filterByNofinstallments(1234); // WHERE nofinstallments = 1234
     * $query->filterByNofinstallments(array(12, 34)); // WHERE nofinstallments IN (12, 34)
     * $query->filterByNofinstallments(array('min' => 12)); // WHERE nofinstallments >= 12
     * $query->filterByNofinstallments(array('max' => 12)); // WHERE nofinstallments <= 12
     * </code>
     *
     * @param     mixed $nofinstallments The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByNofinstallments($nofinstallments = null, $comparison = null)
    {
        if (is_array($nofinstallments)) {
            $useMinMax = false;
            if (isset($nofinstallments['min'])) {
                $this->addUsingAlias(SalesPeer::NOFINSTALLMENTS, $nofinstallments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nofinstallments['max'])) {
                $this->addUsingAlias(SalesPeer::NOFINSTALLMENTS, $nofinstallments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::NOFINSTALLMENTS, $nofinstallments, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the installamount column
     *
     * Example usage:
     * <code>
     * $query->filterByInstallamount(1234); // WHERE installamount = 1234
     * $query->filterByInstallamount(array(12, 34)); // WHERE installamount IN (12, 34)
     * $query->filterByInstallamount(array('min' => 12)); // WHERE installamount >= 12
     * $query->filterByInstallamount(array('max' => 12)); // WHERE installamount <= 12
     * </code>
     *
     * @param     mixed $installamount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByInstallamount($installamount = null, $comparison = null)
    {
        if (is_array($installamount)) {
            $useMinMax = false;
            if (isset($installamount['min'])) {
                $this->addUsingAlias(SalesPeer::INSTALLAMOUNT, $installamount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($installamount['max'])) {
                $this->addUsingAlias(SalesPeer::INSTALLAMOUNT, $installamount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::INSTALLAMOUNT, $installamount, $comparison);
    }

    /**
     * Filter the query on the totalpayable column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalpayable(1234); // WHERE totalpayable = 1234
     * $query->filterByTotalpayable(array(12, 34)); // WHERE totalpayable IN (12, 34)
     * $query->filterByTotalpayable(array('min' => 12)); // WHERE totalpayable >= 12
     * $query->filterByTotalpayable(array('max' => 12)); // WHERE totalpayable <= 12
     * </code>
     *
     * @param     mixed $totalpayable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByTotalpayable($totalpayable = null, $comparison = null)
    {
        if (is_array($totalpayable)) {
            $useMinMax = false;
            if (isset($totalpayable['min'])) {
                $this->addUsingAlias(SalesPeer::TOTALPAYABLE, $totalpayable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalpayable['max'])) {
                $this->addUsingAlias(SalesPeer::TOTALPAYABLE, $totalpayable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::TOTALPAYABLE, $totalpayable, $comparison);
    }

    /**
     * Filter the query on the paymentduedate column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentduedate(1234); // WHERE paymentduedate = 1234
     * $query->filterByPaymentduedate(array(12, 34)); // WHERE paymentduedate IN (12, 34)
     * $query->filterByPaymentduedate(array('min' => 12)); // WHERE paymentduedate >= 12
     * $query->filterByPaymentduedate(array('max' => 12)); // WHERE paymentduedate <= 12
     * </code>
     *
     * @param     mixed $paymentduedate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByPaymentduedate($paymentduedate = null, $comparison = null)
    {
        if (is_array($paymentduedate)) {
            $useMinMax = false;
            if (isset($paymentduedate['min'])) {
                $this->addUsingAlias(SalesPeer::PAYMENTDUEDATE, $paymentduedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentduedate['max'])) {
                $this->addUsingAlias(SalesPeer::PAYMENTDUEDATE, $paymentduedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::PAYMENTDUEDATE, $paymentduedate, $comparison);
    }

    /**
     * Filter the query on the agrementstartdate column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrementstartdate('2011-03-14'); // WHERE agrementstartdate = '2011-03-14'
     * $query->filterByAgrementstartdate('now'); // WHERE agrementstartdate = '2011-03-14'
     * $query->filterByAgrementstartdate(array('max' => 'yesterday')); // WHERE agrementstartdate < '2011-03-13'
     * </code>
     *
     * @param     mixed $agrementstartdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByAgrementstartdate($agrementstartdate = null, $comparison = null)
    {
        if (is_array($agrementstartdate)) {
            $useMinMax = false;
            if (isset($agrementstartdate['min'])) {
                $this->addUsingAlias(SalesPeer::AGREMENTSTARTDATE, $agrementstartdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agrementstartdate['max'])) {
                $this->addUsingAlias(SalesPeer::AGREMENTSTARTDATE, $agrementstartdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::AGREMENTSTARTDATE, $agrementstartdate, $comparison);
    }

    /**
     * Filter the query on the agrementfinishdate column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrementfinishdate('2011-03-14'); // WHERE agrementfinishdate = '2011-03-14'
     * $query->filterByAgrementfinishdate('now'); // WHERE agrementfinishdate = '2011-03-14'
     * $query->filterByAgrementfinishdate(array('max' => 'yesterday')); // WHERE agrementfinishdate < '2011-03-13'
     * </code>
     *
     * @param     mixed $agrementfinishdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByAgrementfinishdate($agrementfinishdate = null, $comparison = null)
    {
        if (is_array($agrementfinishdate)) {
            $useMinMax = false;
            if (isset($agrementfinishdate['min'])) {
                $this->addUsingAlias(SalesPeer::AGREMENTFINISHDATE, $agrementfinishdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agrementfinishdate['max'])) {
                $this->addUsingAlias(SalesPeer::AGREMENTFINISHDATE, $agrementfinishdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::AGREMENTFINISHDATE, $agrementfinishdate, $comparison);
    }

    /**
     * Filter the query on the saletype column
     *
     * Example usage:
     * <code>
     * $query->filterBySaletype(true); // WHERE saletype = true
     * $query->filterBySaletype('yes'); // WHERE saletype = true
     * </code>
     *
     * @param     boolean|string $saletype The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterBySaletype($saletype = null, $comparison = null)
    {
        if (is_string($saletype)) {
            $saletype = in_array(strtolower($saletype), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SalesPeer::SALETYPE, $saletype, $comparison);
    }

    /**
     * Filter the query on the salerightoff_amt column
     *
     * Example usage:
     * <code>
     * $query->filterBySalerightoffAmt(1234); // WHERE salerightoff_amt = 1234
     * $query->filterBySalerightoffAmt(array(12, 34)); // WHERE salerightoff_amt IN (12, 34)
     * $query->filterBySalerightoffAmt(array('min' => 12)); // WHERE salerightoff_amt >= 12
     * $query->filterBySalerightoffAmt(array('max' => 12)); // WHERE salerightoff_amt <= 12
     * </code>
     *
     * @param     mixed $salerightoffAmt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterBySalerightoffAmt($salerightoffAmt = null, $comparison = null)
    {
        if (is_array($salerightoffAmt)) {
            $useMinMax = false;
            if (isset($salerightoffAmt['min'])) {
                $this->addUsingAlias(SalesPeer::SALERIGHTOFF_AMT, $salerightoffAmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salerightoffAmt['max'])) {
                $this->addUsingAlias(SalesPeer::SALERIGHTOFF_AMT, $salerightoffAmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::SALERIGHTOFF_AMT, $salerightoffAmt, $comparison);
    }

    /**
     * Filter the query on the salerightoff_status column
     *
     * Example usage:
     * <code>
     * $query->filterBySalerightoffStatus(true); // WHERE salerightoff_status = true
     * $query->filterBySalerightoffStatus('yes'); // WHERE salerightoff_status = true
     * </code>
     *
     * @param     boolean|string $salerightoffStatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterBySalerightoffStatus($salerightoffStatus = null, $comparison = null)
    {
        if (is_string($salerightoffStatus)) {
            $salerightoffStatus = in_array(strtolower($salerightoffStatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SalesPeer::SALERIGHTOFF_STATUS, $salerightoffStatus, $comparison);
    }

    /**
     * Filter the query on the salerightoff_comment column
     *
     * Example usage:
     * <code>
     * $query->filterBySalerightoffComment('fooValue');   // WHERE salerightoff_comment = 'fooValue'
     * $query->filterBySalerightoffComment('%fooValue%'); // WHERE salerightoff_comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salerightoffComment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterBySalerightoffComment($salerightoffComment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salerightoffComment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salerightoffComment)) {
                $salerightoffComment = str_replace('*', '%', $salerightoffComment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesPeer::SALERIGHTOFF_COMMENT, $salerightoffComment, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SalesPeer::DELETED, $deleted, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(SalesPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(SalesPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::ADDEDBY, $addedby, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(SalesPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(SalesPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::ADDEDDATE, $addeddate, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(SalesPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(SalesPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::ADDEDTIME, $addedtime, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (is_array($lastmodifiedby)) {
            $useMinMax = false;
            if (isset($lastmodifiedby['min'])) {
                $this->addUsingAlias(SalesPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedby['max'])) {
                $this->addUsingAlias(SalesPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
    {
        if (is_array($lastmodifieddate)) {
            $useMinMax = false;
            if (isset($lastmodifieddate['min'])) {
                $this->addUsingAlias(SalesPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifieddate['max'])) {
                $this->addUsingAlias(SalesPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
    {
        if (is_array($lastmodifiedtime)) {
            $useMinMax = false;
            if (isset($lastmodifiedtime['min'])) {
                $this->addUsingAlias(SalesPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedtime['max'])) {
                $this->addUsingAlias(SalesPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByDeletedby($deletedby = null, $comparison = null)
    {
        if (is_array($deletedby)) {
            $useMinMax = false;
            if (isset($deletedby['min'])) {
                $this->addUsingAlias(SalesPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedby['max'])) {
                $this->addUsingAlias(SalesPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::DELETEDBY, $deletedby, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByDeleteddate($deleteddate = null, $comparison = null)
    {
        if (is_array($deleteddate)) {
            $useMinMax = false;
            if (isset($deleteddate['min'])) {
                $this->addUsingAlias(SalesPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deleteddate['max'])) {
                $this->addUsingAlias(SalesPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::DELETEDDATE, $deleteddate, $comparison);
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
     * @return SalesQuery The current query, for fluid interface
     */
    public function filterByDeletedtime($deletedtime = null, $comparison = null)
    {
        if (is_array($deletedtime)) {
            $useMinMax = false;
            if (isset($deletedtime['min'])) {
                $this->addUsingAlias(SalesPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedtime['max'])) {
                $this->addUsingAlias(SalesPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesPeer::DELETEDTIME, $deletedtime, $comparison);
    }

    /**
     * Filter the query by a related Customerdetails object
     *
     * @param   Customerdetails|PropelObjectCollection $customerdetails The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerdetails($customerdetails, $comparison = null)
    {
        if ($customerdetails instanceof Customerdetails) {
            return $this
                ->addUsingAlias(SalesPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
        } elseif ($customerdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesPeer::CUSTOMERCODE, $customerdetails->toKeyValue('PrimaryKey', 'Customercode'), $comparison);
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
     * @return SalesQuery The current query, for fluid interface
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
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProjectdetails($projectdetails, $comparison = null)
    {
        if ($projectdetails instanceof Projectdetails) {
            return $this
                ->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $projectdetails->getRefno(), $comparison);
        } elseif ($projectdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $projectdetails->toKeyValue('PrimaryKey', 'Refno'), $comparison);
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
     * @return SalesQuery The current query, for fluid interface
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
     * Filter the query by a related Paymentplan object
     *
     * @param   Paymentplan|PropelObjectCollection $paymentplan The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaymentplan($paymentplan, $comparison = null)
    {
        if ($paymentplan instanceof Paymentplan) {
            return $this
                ->addUsingAlias(SalesPeer::PAYPLANREFNO, $paymentplan->getRefno(), $comparison);
        } elseif ($paymentplan instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesPeer::PAYPLANREFNO, $paymentplan->toKeyValue('PrimaryKey', 'Refno'), $comparison);
        } else {
            throw new PropelException('filterByPaymentplan() only accepts arguments of type Paymentplan or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paymentplan relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function joinPaymentplan($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paymentplan');

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
            $this->addJoinObject($join, 'Paymentplan');
        }

        return $this;
    }

    /**
     * Use the Paymentplan relation Paymentplan object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PaymentplanQuery A secondary query class using the current class as primary query
     */
    public function usePaymentplanQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaymentplan($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paymentplan', 'PaymentplanQuery');
    }

    /**
     * Filter the query by a related Project object
     *
     * @param   Project|PropelObjectCollection $project The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(SalesPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesPeer::PROJECTCODE, $project->toKeyValue('PrimaryKey', 'Projectcode'), $comparison);
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
     * @return SalesQuery The current query, for fluid interface
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
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLocation($location, $comparison = null)
    {
        if ($location instanceof Location) {
            return $this
                ->addUsingAlias(SalesPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
        } elseif ($location instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesPeer::LOCATIONCODE, $location->toKeyValue('PrimaryKey', 'Locationcode'), $comparison);
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
     * @return SalesQuery The current query, for fluid interface
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
     * Filter the query by a related Customerreceipts object
     *
     * @param   Customerreceipts|PropelObjectCollection $customerreceipts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerreceipts($customerreceipts, $comparison = null)
    {
        if ($customerreceipts instanceof Customerreceipts) {
            return $this
                ->addUsingAlias(SalesPeer::REFNO, $customerreceipts->getSalerefno(), $comparison);
        } elseif ($customerreceipts instanceof PropelObjectCollection) {
            return $this
                ->useCustomerreceiptsQuery()
                ->filterByPrimaryKeys($customerreceipts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerreceipts() only accepts arguments of type Customerreceipts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customerreceipts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function joinCustomerreceipts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customerreceipts');

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
            $this->addJoinObject($join, 'Customerreceipts');
        }

        return $this;
    }

    /**
     * Use the Customerreceipts relation Customerreceipts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomerreceiptsQuery A secondary query class using the current class as primary query
     */
    public function useCustomerreceiptsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerreceipts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customerreceipts', 'CustomerreceiptsQuery');
    }

    /**
     * Filter the query by a related Refunds object
     *
     * @param   Refunds|PropelObjectCollection $refunds  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRefunds($refunds, $comparison = null)
    {
        if ($refunds instanceof Refunds) {
            return $this
                ->addUsingAlias(SalesPeer::REFNO, $refunds->getSalerefno(), $comparison);
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
     * @return SalesQuery The current query, for fluid interface
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
     * Filter the query by a related Tranferedbloks object
     *
     * @param   Tranferedbloks|PropelObjectCollection $tranferedbloks  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTranferedbloks($tranferedbloks, $comparison = null)
    {
        if ($tranferedbloks instanceof Tranferedbloks) {
            return $this
                ->addUsingAlias(SalesPeer::REFNO, $tranferedbloks->getSalerefno(), $comparison);
        } elseif ($tranferedbloks instanceof PropelObjectCollection) {
            return $this
                ->useTranferedbloksQuery()
                ->filterByPrimaryKeys($tranferedbloks->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTranferedbloks() only accepts arguments of type Tranferedbloks or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tranferedbloks relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function joinTranferedbloks($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tranferedbloks');

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
            $this->addJoinObject($join, 'Tranferedbloks');
        }

        return $this;
    }

    /**
     * Use the Tranferedbloks relation Tranferedbloks object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TranferedbloksQuery A secondary query class using the current class as primary query
     */
    public function useTranferedbloksQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTranferedbloks($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tranferedbloks', 'TranferedbloksQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Sales $sales Object to remove from the list of results
     *
     * @return SalesQuery The current query, for fluid interface
     */
    public function prune($sales = null)
    {
        if ($sales) {
            $this->addUsingAlias(SalesPeer::REFNO, $sales->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
