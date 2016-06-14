<?php


/**
 * Base class that represents a query for the 'customerreceipts' table.
 *
 * customer payment receipts
 *
 * @method CustomerreceiptsQuery orderByReceiptno($order = Criteria::ASC) Order by the receiptno column
 * @method CustomerreceiptsQuery orderBySalerefno($order = Criteria::ASC) Order by the salerefno column
 * @method CustomerreceiptsQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method CustomerreceiptsQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method CustomerreceiptsQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method CustomerreceiptsQuery orderByReceiptdate($order = Criteria::ASC) Order by the receiptdate column
 * @method CustomerreceiptsQuery orderByOldreceiptno($order = Criteria::ASC) Order by the oldreceiptno column
 * @method CustomerreceiptsQuery orderByBlocknumber($order = Criteria::ASC) Order by the blocknumber column
 * @method CustomerreceiptsQuery orderByPaidfor($order = Criteria::ASC) Order by the paidfor column
 * @method CustomerreceiptsQuery orderByPaymenttype($order = Criteria::ASC) Order by the paymenttype column
 * @method CustomerreceiptsQuery orderByPaidamount($order = Criteria::ASC) Order by the paidamount column
 * @method CustomerreceiptsQuery orderByInstallmentNo($order = Criteria::ASC) Order by the installment_no column
 * @method CustomerreceiptsQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method CustomerreceiptsQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method CustomerreceiptsQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method CustomerreceiptsQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method CustomerreceiptsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method CustomerreceiptsQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method CustomerreceiptsQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method CustomerreceiptsQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method CustomerreceiptsQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method CustomerreceiptsQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method CustomerreceiptsQuery groupByReceiptno() Group by the receiptno column
 * @method CustomerreceiptsQuery groupBySalerefno() Group by the salerefno column
 * @method CustomerreceiptsQuery groupByLocationcode() Group by the locationcode column
 * @method CustomerreceiptsQuery groupByProjectcode() Group by the projectcode column
 * @method CustomerreceiptsQuery groupByCustomercode() Group by the customercode column
 * @method CustomerreceiptsQuery groupByReceiptdate() Group by the receiptdate column
 * @method CustomerreceiptsQuery groupByOldreceiptno() Group by the oldreceiptno column
 * @method CustomerreceiptsQuery groupByBlocknumber() Group by the blocknumber column
 * @method CustomerreceiptsQuery groupByPaidfor() Group by the paidfor column
 * @method CustomerreceiptsQuery groupByPaymenttype() Group by the paymenttype column
 * @method CustomerreceiptsQuery groupByPaidamount() Group by the paidamount column
 * @method CustomerreceiptsQuery groupByInstallmentNo() Group by the installment_no column
 * @method CustomerreceiptsQuery groupByDeleted() Group by the deleted column
 * @method CustomerreceiptsQuery groupByAddedby() Group by the addedby column
 * @method CustomerreceiptsQuery groupByAddeddate() Group by the addeddate column
 * @method CustomerreceiptsQuery groupByAddedtime() Group by the addedtime column
 * @method CustomerreceiptsQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method CustomerreceiptsQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method CustomerreceiptsQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method CustomerreceiptsQuery groupByDeletedby() Group by the deletedby column
 * @method CustomerreceiptsQuery groupByDeleteddate() Group by the deleteddate column
 * @method CustomerreceiptsQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method CustomerreceiptsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CustomerreceiptsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CustomerreceiptsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CustomerreceiptsQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method CustomerreceiptsQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method CustomerreceiptsQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method CustomerreceiptsQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method CustomerreceiptsQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method CustomerreceiptsQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method CustomerreceiptsQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method CustomerreceiptsQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method CustomerreceiptsQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method CustomerreceiptsQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method CustomerreceiptsQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method CustomerreceiptsQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method CustomerreceiptsQuery leftJoinCustomerReceiptmethodofpayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerReceiptmethodofpayment relation
 * @method CustomerreceiptsQuery rightJoinCustomerReceiptmethodofpayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerReceiptmethodofpayment relation
 * @method CustomerreceiptsQuery innerJoinCustomerReceiptmethodofpayment($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerReceiptmethodofpayment relation
 *
 * @method Customerreceipts findOne(PropelPDO $con = null) Return the first Customerreceipts matching the query
 * @method Customerreceipts findOneOrCreate(PropelPDO $con = null) Return the first Customerreceipts matching the query, or a new Customerreceipts object populated from the query conditions when no match is found
 *
 * @method Customerreceipts findOneBySalerefno(int $salerefno) Return the first Customerreceipts filtered by the salerefno column
 * @method Customerreceipts findOneByLocationcode(int $locationcode) Return the first Customerreceipts filtered by the locationcode column
 * @method Customerreceipts findOneByProjectcode(int $projectcode) Return the first Customerreceipts filtered by the projectcode column
 * @method Customerreceipts findOneByCustomercode(int $customercode) Return the first Customerreceipts filtered by the customercode column
 * @method Customerreceipts findOneByReceiptdate(string $receiptdate) Return the first Customerreceipts filtered by the receiptdate column
 * @method Customerreceipts findOneByOldreceiptno(string $oldreceiptno) Return the first Customerreceipts filtered by the oldreceiptno column
 * @method Customerreceipts findOneByBlocknumber(int $blocknumber) Return the first Customerreceipts filtered by the blocknumber column
 * @method Customerreceipts findOneByPaidfor(string $paidfor) Return the first Customerreceipts filtered by the paidfor column
 * @method Customerreceipts findOneByPaymenttype(int $paymenttype) Return the first Customerreceipts filtered by the paymenttype column
 * @method Customerreceipts findOneByPaidamount(double $paidamount) Return the first Customerreceipts filtered by the paidamount column
 * @method Customerreceipts findOneByInstallmentNo(int $installment_no) Return the first Customerreceipts filtered by the installment_no column
 * @method Customerreceipts findOneByDeleted(boolean $deleted) Return the first Customerreceipts filtered by the deleted column
 * @method Customerreceipts findOneByAddedby(int $addedby) Return the first Customerreceipts filtered by the addedby column
 * @method Customerreceipts findOneByAddeddate(string $addeddate) Return the first Customerreceipts filtered by the addeddate column
 * @method Customerreceipts findOneByAddedtime(string $addedtime) Return the first Customerreceipts filtered by the addedtime column
 * @method Customerreceipts findOneByLastmodifiedby(int $lastmodifiedby) Return the first Customerreceipts filtered by the lastmodifiedby column
 * @method Customerreceipts findOneByLastmodifieddate(string $lastmodifieddate) Return the first Customerreceipts filtered by the lastmodifieddate column
 * @method Customerreceipts findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Customerreceipts filtered by the lastmodifiedtime column
 * @method Customerreceipts findOneByDeletedby(int $deletedby) Return the first Customerreceipts filtered by the deletedby column
 * @method Customerreceipts findOneByDeleteddate(string $deleteddate) Return the first Customerreceipts filtered by the deleteddate column
 * @method Customerreceipts findOneByDeletedtime(string $deletedtime) Return the first Customerreceipts filtered by the deletedtime column
 *
 * @method array findByReceiptno(int $receiptno) Return Customerreceipts objects filtered by the receiptno column
 * @method array findBySalerefno(int $salerefno) Return Customerreceipts objects filtered by the salerefno column
 * @method array findByLocationcode(int $locationcode) Return Customerreceipts objects filtered by the locationcode column
 * @method array findByProjectcode(int $projectcode) Return Customerreceipts objects filtered by the projectcode column
 * @method array findByCustomercode(int $customercode) Return Customerreceipts objects filtered by the customercode column
 * @method array findByReceiptdate(string $receiptdate) Return Customerreceipts objects filtered by the receiptdate column
 * @method array findByOldreceiptno(string $oldreceiptno) Return Customerreceipts objects filtered by the oldreceiptno column
 * @method array findByBlocknumber(int $blocknumber) Return Customerreceipts objects filtered by the blocknumber column
 * @method array findByPaidfor(string $paidfor) Return Customerreceipts objects filtered by the paidfor column
 * @method array findByPaymenttype(int $paymenttype) Return Customerreceipts objects filtered by the paymenttype column
 * @method array findByPaidamount(double $paidamount) Return Customerreceipts objects filtered by the paidamount column
 * @method array findByInstallmentNo(int $installment_no) Return Customerreceipts objects filtered by the installment_no column
 * @method array findByDeleted(boolean $deleted) Return Customerreceipts objects filtered by the deleted column
 * @method array findByAddedby(int $addedby) Return Customerreceipts objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Customerreceipts objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Customerreceipts objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Customerreceipts objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Customerreceipts objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Customerreceipts objects filtered by the lastmodifiedtime column
 * @method array findByDeletedby(int $deletedby) Return Customerreceipts objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Customerreceipts objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Customerreceipts objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseCustomerreceiptsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCustomerreceiptsQuery object.
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
            $modelName = 'Customerreceipts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CustomerreceiptsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CustomerreceiptsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CustomerreceiptsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CustomerreceiptsQuery) {
            return $criteria;
        }
        $query = new CustomerreceiptsQuery(null, null, $modelAlias);

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
     * @return   Customerreceipts|Customerreceipts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CustomerreceiptsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CustomerreceiptsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Customerreceipts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByReceiptno($key, $con = null)
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
     * @return                 Customerreceipts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `receiptno`, `salerefno`, `locationcode`, `projectcode`, `customercode`, `receiptdate`, `oldreceiptno`, `blocknumber`, `paidfor`, `paymenttype`, `paidamount`, `installment_no`, `deleted`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime`, `deletedby`, `deleteddate`, `deletedtime` FROM `customerreceipts` WHERE `receiptno` = :p0';
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
            $obj = new Customerreceipts();
            $obj->hydrate($row);
            CustomerreceiptsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Customerreceipts|Customerreceipts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Customerreceipts[]|mixed the list of results, formatted by the current formatter
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the receiptno column
     *
     * Example usage:
     * <code>
     * $query->filterByReceiptno(1234); // WHERE receiptno = 1234
     * $query->filterByReceiptno(array(12, 34)); // WHERE receiptno IN (12, 34)
     * $query->filterByReceiptno(array('min' => 12)); // WHERE receiptno >= 12
     * $query->filterByReceiptno(array('max' => 12)); // WHERE receiptno <= 12
     * </code>
     *
     * @param     mixed $receiptno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByReceiptno($receiptno = null, $comparison = null)
    {
        if (is_array($receiptno)) {
            $useMinMax = false;
            if (isset($receiptno['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $receiptno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($receiptno['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $receiptno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $receiptno, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterBySalerefno($salerefno = null, $comparison = null)
    {
        if (is_array($salerefno)) {
            $useMinMax = false;
            if (isset($salerefno['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::SALEREFNO, $salerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salerefno['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::SALEREFNO, $salerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::SALEREFNO, $salerefno, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByLocationcode($locationcode = null, $comparison = null)
    {
        if (is_array($locationcode)) {
            $useMinMax = false;
            if (isset($locationcode['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationcode['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $locationcode, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByProjectcode($projectcode = null, $comparison = null)
    {
        if (is_array($projectcode)) {
            $useMinMax = false;
            if (isset($projectcode['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectcode['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $projectcode, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByCustomercode($customercode = null, $comparison = null)
    {
        if (is_array($customercode)) {
            $useMinMax = false;
            if (isset($customercode['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customercode['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customercode, $comparison);
    }

    /**
     * Filter the query on the receiptdate column
     *
     * Example usage:
     * <code>
     * $query->filterByReceiptdate('2011-03-14'); // WHERE receiptdate = '2011-03-14'
     * $query->filterByReceiptdate('now'); // WHERE receiptdate = '2011-03-14'
     * $query->filterByReceiptdate(array('max' => 'yesterday')); // WHERE receiptdate < '2011-03-13'
     * </code>
     *
     * @param     mixed $receiptdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByReceiptdate($receiptdate = null, $comparison = null)
    {
        if (is_array($receiptdate)) {
            $useMinMax = false;
            if (isset($receiptdate['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTDATE, $receiptdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($receiptdate['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTDATE, $receiptdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTDATE, $receiptdate, $comparison);
    }

    /**
     * Filter the query on the oldreceiptno column
     *
     * Example usage:
     * <code>
     * $query->filterByOldreceiptno('fooValue');   // WHERE oldreceiptno = 'fooValue'
     * $query->filterByOldreceiptno('%fooValue%'); // WHERE oldreceiptno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oldreceiptno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByOldreceiptno($oldreceiptno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oldreceiptno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oldreceiptno)) {
                $oldreceiptno = str_replace('*', '%', $oldreceiptno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::OLDRECEIPTNO, $oldreceiptno, $comparison);
    }

    /**
     * Filter the query on the blocknumber column
     *
     * Example usage:
     * <code>
     * $query->filterByBlocknumber(1234); // WHERE blocknumber = 1234
     * $query->filterByBlocknumber(array(12, 34)); // WHERE blocknumber IN (12, 34)
     * $query->filterByBlocknumber(array('min' => 12)); // WHERE blocknumber >= 12
     * $query->filterByBlocknumber(array('max' => 12)); // WHERE blocknumber <= 12
     * </code>
     *
     * @param     mixed $blocknumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByBlocknumber($blocknumber = null, $comparison = null)
    {
        if (is_array($blocknumber)) {
            $useMinMax = false;
            if (isset($blocknumber['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::BLOCKNUMBER, $blocknumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blocknumber['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::BLOCKNUMBER, $blocknumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::BLOCKNUMBER, $blocknumber, $comparison);
    }

    /**
     * Filter the query on the paidfor column
     *
     * Example usage:
     * <code>
     * $query->filterByPaidfor('fooValue');   // WHERE paidfor = 'fooValue'
     * $query->filterByPaidfor('%fooValue%'); // WHERE paidfor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paidfor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByPaidfor($paidfor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paidfor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paidfor)) {
                $paidfor = str_replace('*', '%', $paidfor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::PAIDFOR, $paidfor, $comparison);
    }

    /**
     * Filter the query on the paymenttype column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymenttype(1234); // WHERE paymenttype = 1234
     * $query->filterByPaymenttype(array(12, 34)); // WHERE paymenttype IN (12, 34)
     * $query->filterByPaymenttype(array('min' => 12)); // WHERE paymenttype >= 12
     * $query->filterByPaymenttype(array('max' => 12)); // WHERE paymenttype <= 12
     * </code>
     *
     * @param     mixed $paymenttype The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByPaymenttype($paymenttype = null, $comparison = null)
    {
        if (is_array($paymenttype)) {
            $useMinMax = false;
            if (isset($paymenttype['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::PAYMENTTYPE, $paymenttype['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymenttype['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::PAYMENTTYPE, $paymenttype['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::PAYMENTTYPE, $paymenttype, $comparison);
    }

    /**
     * Filter the query on the paidamount column
     *
     * Example usage:
     * <code>
     * $query->filterByPaidamount(1234); // WHERE paidamount = 1234
     * $query->filterByPaidamount(array(12, 34)); // WHERE paidamount IN (12, 34)
     * $query->filterByPaidamount(array('min' => 12)); // WHERE paidamount >= 12
     * $query->filterByPaidamount(array('max' => 12)); // WHERE paidamount <= 12
     * </code>
     *
     * @param     mixed $paidamount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByPaidamount($paidamount = null, $comparison = null)
    {
        if (is_array($paidamount)) {
            $useMinMax = false;
            if (isset($paidamount['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::PAIDAMOUNT, $paidamount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paidamount['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::PAIDAMOUNT, $paidamount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::PAIDAMOUNT, $paidamount, $comparison);
    }

    /**
     * Filter the query on the installment_no column
     *
     * Example usage:
     * <code>
     * $query->filterByInstallmentNo(1234); // WHERE installment_no = 1234
     * $query->filterByInstallmentNo(array(12, 34)); // WHERE installment_no IN (12, 34)
     * $query->filterByInstallmentNo(array('min' => 12)); // WHERE installment_no >= 12
     * $query->filterByInstallmentNo(array('max' => 12)); // WHERE installment_no <= 12
     * </code>
     *
     * @param     mixed $installmentNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByInstallmentNo($installmentNo = null, $comparison = null)
    {
        if (is_array($installmentNo)) {
            $useMinMax = false;
            if (isset($installmentNo['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::INSTALLMENT_NO, $installmentNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($installmentNo['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::INSTALLMENT_NO, $installmentNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::INSTALLMENT_NO, $installmentNo, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::DELETED, $deleted, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::ADDEDBY, $addedby, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::ADDEDDATE, $addeddate, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::ADDEDTIME, $addedtime, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (is_array($lastmodifiedby)) {
            $useMinMax = false;
            if (isset($lastmodifiedby['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedby['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
    {
        if (is_array($lastmodifieddate)) {
            $useMinMax = false;
            if (isset($lastmodifieddate['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifieddate['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
    {
        if (is_array($lastmodifiedtime)) {
            $useMinMax = false;
            if (isset($lastmodifiedtime['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedtime['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByDeletedby($deletedby = null, $comparison = null)
    {
        if (is_array($deletedby)) {
            $useMinMax = false;
            if (isset($deletedby['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedby['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::DELETEDBY, $deletedby, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByDeleteddate($deleteddate = null, $comparison = null)
    {
        if (is_array($deleteddate)) {
            $useMinMax = false;
            if (isset($deleteddate['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deleteddate['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::DELETEDDATE, $deleteddate, $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function filterByDeletedtime($deletedtime = null, $comparison = null)
    {
        if (is_array($deletedtime)) {
            $useMinMax = false;
            if (isset($deletedtime['min'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedtime['max'])) {
                $this->addUsingAlias(CustomerreceiptsPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerreceiptsPeer::DELETEDTIME, $deletedtime, $comparison);
    }

    /**
     * Filter the query by a related Location object
     *
     * @param   Location|PropelObjectCollection $location The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CustomerreceiptsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLocation($location, $comparison = null)
    {
        if ($location instanceof Location) {
            return $this
                ->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
        } elseif ($location instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $location->toKeyValue('PrimaryKey', 'Locationcode'), $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
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
     * @return                 CustomerreceiptsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $project->toKeyValue('PrimaryKey', 'Projectcode'), $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
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
     * @return                 CustomerreceiptsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerdetails($customerdetails, $comparison = null)
    {
        if ($customerdetails instanceof Customerdetails) {
            return $this
                ->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
        } elseif ($customerdetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customerdetails->toKeyValue('PrimaryKey', 'Customercode'), $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
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
     * @return                 CustomerreceiptsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySales($sales, $comparison = null)
    {
        if ($sales instanceof Sales) {
            return $this
                ->addUsingAlias(CustomerreceiptsPeer::SALEREFNO, $sales->getRefno(), $comparison);
        } elseif ($sales instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerreceiptsPeer::SALEREFNO, $sales->toKeyValue('PrimaryKey', 'Refno'), $comparison);
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
     * @return CustomerreceiptsQuery The current query, for fluid interface
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
     * Filter the query by a related CustomerReceiptmethodofpayment object
     *
     * @param   CustomerReceiptmethodofpayment|PropelObjectCollection $customerReceiptmethodofpayment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CustomerreceiptsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerReceiptmethodofpayment($customerReceiptmethodofpayment, $comparison = null)
    {
        if ($customerReceiptmethodofpayment instanceof CustomerReceiptmethodofpayment) {
            return $this
                ->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $customerReceiptmethodofpayment->getReceiptno(), $comparison);
        } elseif ($customerReceiptmethodofpayment instanceof PropelObjectCollection) {
            return $this
                ->useCustomerReceiptmethodofpaymentQuery()
                ->filterByPrimaryKeys($customerReceiptmethodofpayment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerReceiptmethodofpayment() only accepts arguments of type CustomerReceiptmethodofpayment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerReceiptmethodofpayment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function joinCustomerReceiptmethodofpayment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerReceiptmethodofpayment');

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
            $this->addJoinObject($join, 'CustomerReceiptmethodofpayment');
        }

        return $this;
    }

    /**
     * Use the CustomerReceiptmethodofpayment relation CustomerReceiptmethodofpayment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomerReceiptmethodofpaymentQuery A secondary query class using the current class as primary query
     */
    public function useCustomerReceiptmethodofpaymentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerReceiptmethodofpayment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerReceiptmethodofpayment', 'CustomerReceiptmethodofpaymentQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Customerreceipts $customerreceipts Object to remove from the list of results
     *
     * @return CustomerreceiptsQuery The current query, for fluid interface
     */
    public function prune($customerreceipts = null)
    {
        if ($customerreceipts) {
            $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $customerreceipts->getReceiptno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
