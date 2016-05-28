<?php


/**
 * Base class that represents a query for the 'customer_receiptmethodofpayment' table.
 *
 * Receipt -Method of payment
 *
 * @method CustomerReceiptmethodofpaymentQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method CustomerReceiptmethodofpaymentQuery orderByReceiptno($order = Criteria::ASC) Order by the receiptno column
 * @method CustomerReceiptmethodofpaymentQuery orderByReceiptstatus($order = Criteria::ASC) Order by the receiptstatus column
 * @method CustomerReceiptmethodofpaymentQuery orderByBank($order = Criteria::ASC) Order by the bank column
 * @method CustomerReceiptmethodofpaymentQuery orderByChequnumber($order = Criteria::ASC) Order by the chequnumber column
 * @method CustomerReceiptmethodofpaymentQuery orderByChequedate($order = Criteria::ASC) Order by the chequedate column
 * @method CustomerReceiptmethodofpaymentQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method CustomerReceiptmethodofpaymentQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 *
 * @method CustomerReceiptmethodofpaymentQuery groupByRefno() Group by the refno column
 * @method CustomerReceiptmethodofpaymentQuery groupByReceiptno() Group by the receiptno column
 * @method CustomerReceiptmethodofpaymentQuery groupByReceiptstatus() Group by the receiptstatus column
 * @method CustomerReceiptmethodofpaymentQuery groupByBank() Group by the bank column
 * @method CustomerReceiptmethodofpaymentQuery groupByChequnumber() Group by the chequnumber column
 * @method CustomerReceiptmethodofpaymentQuery groupByChequedate() Group by the chequedate column
 * @method CustomerReceiptmethodofpaymentQuery groupByAmount() Group by the amount column
 * @method CustomerReceiptmethodofpaymentQuery groupByDeleted() Group by the deleted column
 *
 * @method CustomerReceiptmethodofpaymentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CustomerReceiptmethodofpaymentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CustomerReceiptmethodofpaymentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CustomerReceiptmethodofpaymentQuery leftJoinCustomerreceipts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerreceipts relation
 * @method CustomerReceiptmethodofpaymentQuery rightJoinCustomerreceipts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerreceipts relation
 * @method CustomerReceiptmethodofpaymentQuery innerJoinCustomerreceipts($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerreceipts relation
 *
 * @method CustomerReceiptmethodofpayment findOne(PropelPDO $con = null) Return the first CustomerReceiptmethodofpayment matching the query
 * @method CustomerReceiptmethodofpayment findOneOrCreate(PropelPDO $con = null) Return the first CustomerReceiptmethodofpayment matching the query, or a new CustomerReceiptmethodofpayment object populated from the query conditions when no match is found
 *
 * @method CustomerReceiptmethodofpayment findOneByReceiptno(int $receiptno) Return the first CustomerReceiptmethodofpayment filtered by the receiptno column
 * @method CustomerReceiptmethodofpayment findOneByReceiptstatus(string $receiptstatus) Return the first CustomerReceiptmethodofpayment filtered by the receiptstatus column
 * @method CustomerReceiptmethodofpayment findOneByBank(string $bank) Return the first CustomerReceiptmethodofpayment filtered by the bank column
 * @method CustomerReceiptmethodofpayment findOneByChequnumber(string $chequnumber) Return the first CustomerReceiptmethodofpayment filtered by the chequnumber column
 * @method CustomerReceiptmethodofpayment findOneByChequedate(string $chequedate) Return the first CustomerReceiptmethodofpayment filtered by the chequedate column
 * @method CustomerReceiptmethodofpayment findOneByAmount(double $amount) Return the first CustomerReceiptmethodofpayment filtered by the amount column
 * @method CustomerReceiptmethodofpayment findOneByDeleted(boolean $deleted) Return the first CustomerReceiptmethodofpayment filtered by the deleted column
 *
 * @method array findByRefno(int $refno) Return CustomerReceiptmethodofpayment objects filtered by the refno column
 * @method array findByReceiptno(int $receiptno) Return CustomerReceiptmethodofpayment objects filtered by the receiptno column
 * @method array findByReceiptstatus(string $receiptstatus) Return CustomerReceiptmethodofpayment objects filtered by the receiptstatus column
 * @method array findByBank(string $bank) Return CustomerReceiptmethodofpayment objects filtered by the bank column
 * @method array findByChequnumber(string $chequnumber) Return CustomerReceiptmethodofpayment objects filtered by the chequnumber column
 * @method array findByChequedate(string $chequedate) Return CustomerReceiptmethodofpayment objects filtered by the chequedate column
 * @method array findByAmount(double $amount) Return CustomerReceiptmethodofpayment objects filtered by the amount column
 * @method array findByDeleted(boolean $deleted) Return CustomerReceiptmethodofpayment objects filtered by the deleted column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseCustomerReceiptmethodofpaymentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCustomerReceiptmethodofpaymentQuery object.
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
            $modelName = 'CustomerReceiptmethodofpayment';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CustomerReceiptmethodofpaymentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CustomerReceiptmethodofpaymentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CustomerReceiptmethodofpaymentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CustomerReceiptmethodofpaymentQuery) {
            return $criteria;
        }
        $query = new CustomerReceiptmethodofpaymentQuery(null, null, $modelAlias);

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
     * @return   CustomerReceiptmethodofpayment|CustomerReceiptmethodofpayment[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CustomerReceiptmethodofpaymentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CustomerReceiptmethodofpaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CustomerReceiptmethodofpayment A model object, or null if the key is not found
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
     * @return                 CustomerReceiptmethodofpayment A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `receiptno`, `receiptstatus`, `bank`, `chequnumber`, `chequedate`, `amount`, `deleted` FROM `customer_receiptmethodofpayment` WHERE `refno` = :p0';
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
            $obj = new CustomerReceiptmethodofpayment();
            $obj->hydrate($row);
            CustomerReceiptmethodofpaymentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CustomerReceiptmethodofpayment|CustomerReceiptmethodofpayment[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CustomerReceiptmethodofpayment[]|mixed the list of results, formatted by the current formatter
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
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::REFNO, $keys, Criteria::IN);
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
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::REFNO, $refno, $comparison);
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
     * @see       filterByCustomerreceipts()
     *
     * @param     mixed $receiptno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByReceiptno($receiptno = null, $comparison = null)
    {
        if (is_array($receiptno)) {
            $useMinMax = false;
            if (isset($receiptno['min'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, $receiptno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($receiptno['max'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, $receiptno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, $receiptno, $comparison);
    }

    /**
     * Filter the query on the receiptstatus column
     *
     * Example usage:
     * <code>
     * $query->filterByReceiptstatus('fooValue');   // WHERE receiptstatus = 'fooValue'
     * $query->filterByReceiptstatus('%fooValue%'); // WHERE receiptstatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $receiptstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByReceiptstatus($receiptstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($receiptstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $receiptstatus)) {
                $receiptstatus = str_replace('*', '%', $receiptstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::RECEIPTSTATUS, $receiptstatus, $comparison);
    }

    /**
     * Filter the query on the bank column
     *
     * Example usage:
     * <code>
     * $query->filterByBank('fooValue');   // WHERE bank = 'fooValue'
     * $query->filterByBank('%fooValue%'); // WHERE bank LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bank The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByBank($bank = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bank)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bank)) {
                $bank = str_replace('*', '%', $bank);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::BANK, $bank, $comparison);
    }

    /**
     * Filter the query on the chequnumber column
     *
     * Example usage:
     * <code>
     * $query->filterByChequnumber('fooValue');   // WHERE chequnumber = 'fooValue'
     * $query->filterByChequnumber('%fooValue%'); // WHERE chequnumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chequnumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByChequnumber($chequnumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chequnumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chequnumber)) {
                $chequnumber = str_replace('*', '%', $chequnumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::CHEQUNUMBER, $chequnumber, $comparison);
    }

    /**
     * Filter the query on the chequedate column
     *
     * Example usage:
     * <code>
     * $query->filterByChequedate('2011-03-14'); // WHERE chequedate = '2011-03-14'
     * $query->filterByChequedate('now'); // WHERE chequedate = '2011-03-14'
     * $query->filterByChequedate(array('max' => 'yesterday')); // WHERE chequedate < '2011-03-13'
     * </code>
     *
     * @param     mixed $chequedate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByChequedate($chequedate = null, $comparison = null)
    {
        if (is_array($chequedate)) {
            $useMinMax = false;
            if (isset($chequedate['min'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::CHEQUEDATE, $chequedate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($chequedate['max'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::CHEQUEDATE, $chequedate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::CHEQUEDATE, $chequedate, $comparison);
    }

    /**
     * Filter the query on the amount column
     *
     * Example usage:
     * <code>
     * $query->filterByAmount(1234); // WHERE amount = 1234
     * $query->filterByAmount(array(12, 34)); // WHERE amount IN (12, 34)
     * $query->filterByAmount(array('min' => 12)); // WHERE amount >= 12
     * $query->filterByAmount(array('max' => 12)); // WHERE amount <= 12
     * </code>
     *
     * @param     mixed $amount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByAmount($amount = null, $comparison = null)
    {
        if (is_array($amount)) {
            $useMinMax = false;
            if (isset($amount['min'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amount['max'])) {
                $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::AMOUNT, $amount, $comparison);
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
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::DELETED, $deleted, $comparison);
    }

    /**
     * Filter the query by a related Customerreceipts object
     *
     * @param   Customerreceipts|PropelObjectCollection $customerreceipts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerreceipts($customerreceipts, $comparison = null)
    {
        if ($customerreceipts instanceof Customerreceipts) {
            return $this
                ->addUsingAlias(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, $customerreceipts->getReceiptno(), $comparison);
        } elseif ($customerreceipts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerReceiptmethodofpaymentPeer::RECEIPTNO, $customerreceipts->toKeyValue('PrimaryKey', 'Receiptno'), $comparison);
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
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   CustomerReceiptmethodofpayment $customerReceiptmethodofpayment Object to remove from the list of results
     *
     * @return CustomerReceiptmethodofpaymentQuery The current query, for fluid interface
     */
    public function prune($customerReceiptmethodofpayment = null)
    {
        if ($customerReceiptmethodofpayment) {
            $this->addUsingAlias(CustomerReceiptmethodofpaymentPeer::REFNO, $customerReceiptmethodofpayment->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
