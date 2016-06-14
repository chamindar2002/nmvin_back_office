<?php


/**
 * Base class that represents a query for the 'paymentplan' table.
 *
 * payment plans for houses in a project
 *
 * @method PaymentplanQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method PaymentplanQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method PaymentplanQuery orderByNofinstallments($order = Criteria::ASC) Order by the nofinstallments column
 * @method PaymentplanQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method PaymentplanQuery orderByInstallamount($order = Criteria::ASC) Order by the installamount column
 * @method PaymentplanQuery orderByRsvfee($order = Criteria::ASC) Order by the rsvfee column
 * @method PaymentplanQuery orderByDownpayment($order = Criteria::ASC) Order by the downpayment column
 * @method PaymentplanQuery orderByBankloan($order = Criteria::ASC) Order by the bankloan column
 * @method PaymentplanQuery orderByAdtnlland($order = Criteria::ASC) Order by the adtnlland column
 * @method PaymentplanQuery orderByTotalpayable($order = Criteria::ASC) Order by the totalpayable column
 * @method PaymentplanQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method PaymentplanQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method PaymentplanQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method PaymentplanQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method PaymentplanQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method PaymentplanQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method PaymentplanQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method PaymentplanQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method PaymentplanQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method PaymentplanQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 * @method PaymentplanQuery orderByDevechargers1($order = Criteria::ASC) Order by the devechargers1 column
 * @method PaymentplanQuery orderByDevechargers2($order = Criteria::ASC) Order by the devechargers2 column
 * @method PaymentplanQuery orderByInfrastructure($order = Criteria::ASC) Order by the infrastructure column
 * @method PaymentplanQuery orderByOccupation($order = Criteria::ASC) Order by the occupation column
 *
 * @method PaymentplanQuery groupByRefno() Group by the refno column
 * @method PaymentplanQuery groupByProjectcode() Group by the projectcode column
 * @method PaymentplanQuery groupByNofinstallments() Group by the nofinstallments column
 * @method PaymentplanQuery groupByDescription() Group by the description column
 * @method PaymentplanQuery groupByInstallamount() Group by the installamount column
 * @method PaymentplanQuery groupByRsvfee() Group by the rsvfee column
 * @method PaymentplanQuery groupByDownpayment() Group by the downpayment column
 * @method PaymentplanQuery groupByBankloan() Group by the bankloan column
 * @method PaymentplanQuery groupByAdtnlland() Group by the adtnlland column
 * @method PaymentplanQuery groupByTotalpayable() Group by the totalpayable column
 * @method PaymentplanQuery groupByDeleted() Group by the deleted column
 * @method PaymentplanQuery groupByAddedby() Group by the addedby column
 * @method PaymentplanQuery groupByAddeddate() Group by the addeddate column
 * @method PaymentplanQuery groupByAddedtime() Group by the addedtime column
 * @method PaymentplanQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method PaymentplanQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method PaymentplanQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method PaymentplanQuery groupByDeletedby() Group by the deletedby column
 * @method PaymentplanQuery groupByDeleteddate() Group by the deleteddate column
 * @method PaymentplanQuery groupByDeletedtime() Group by the deletedtime column
 * @method PaymentplanQuery groupByDevechargers1() Group by the devechargers1 column
 * @method PaymentplanQuery groupByDevechargers2() Group by the devechargers2 column
 * @method PaymentplanQuery groupByInfrastructure() Group by the infrastructure column
 * @method PaymentplanQuery groupByOccupation() Group by the occupation column
 *
 * @method PaymentplanQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PaymentplanQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PaymentplanQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PaymentplanQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method PaymentplanQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method PaymentplanQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method PaymentplanQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method PaymentplanQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method PaymentplanQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method Paymentplan findOne(PropelPDO $con = null) Return the first Paymentplan matching the query
 * @method Paymentplan findOneOrCreate(PropelPDO $con = null) Return the first Paymentplan matching the query, or a new Paymentplan object populated from the query conditions when no match is found
 *
 * @method Paymentplan findOneByProjectcode(int $projectcode) Return the first Paymentplan filtered by the projectcode column
 * @method Paymentplan findOneByNofinstallments(int $nofinstallments) Return the first Paymentplan filtered by the nofinstallments column
 * @method Paymentplan findOneByDescription(string $description) Return the first Paymentplan filtered by the description column
 * @method Paymentplan findOneByInstallamount(double $installamount) Return the first Paymentplan filtered by the installamount column
 * @method Paymentplan findOneByRsvfee(double $rsvfee) Return the first Paymentplan filtered by the rsvfee column
 * @method Paymentplan findOneByDownpayment(double $downpayment) Return the first Paymentplan filtered by the downpayment column
 * @method Paymentplan findOneByBankloan(double $bankloan) Return the first Paymentplan filtered by the bankloan column
 * @method Paymentplan findOneByAdtnlland(double $adtnlland) Return the first Paymentplan filtered by the adtnlland column
 * @method Paymentplan findOneByTotalpayable(double $totalpayable) Return the first Paymentplan filtered by the totalpayable column
 * @method Paymentplan findOneByDeleted(boolean $deleted) Return the first Paymentplan filtered by the deleted column
 * @method Paymentplan findOneByAddedby(int $addedby) Return the first Paymentplan filtered by the addedby column
 * @method Paymentplan findOneByAddeddate(string $addeddate) Return the first Paymentplan filtered by the addeddate column
 * @method Paymentplan findOneByAddedtime(string $addedtime) Return the first Paymentplan filtered by the addedtime column
 * @method Paymentplan findOneByLastmodifiedby(int $lastmodifiedby) Return the first Paymentplan filtered by the lastmodifiedby column
 * @method Paymentplan findOneByLastmodifieddate(string $lastmodifieddate) Return the first Paymentplan filtered by the lastmodifieddate column
 * @method Paymentplan findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Paymentplan filtered by the lastmodifiedtime column
 * @method Paymentplan findOneByDeletedby(int $deletedby) Return the first Paymentplan filtered by the deletedby column
 * @method Paymentplan findOneByDeleteddate(string $deleteddate) Return the first Paymentplan filtered by the deleteddate column
 * @method Paymentplan findOneByDeletedtime(string $deletedtime) Return the first Paymentplan filtered by the deletedtime column
 * @method Paymentplan findOneByDevechargers1(double $devechargers1) Return the first Paymentplan filtered by the devechargers1 column
 * @method Paymentplan findOneByDevechargers2(double $devechargers2) Return the first Paymentplan filtered by the devechargers2 column
 * @method Paymentplan findOneByInfrastructure(double $infrastructure) Return the first Paymentplan filtered by the infrastructure column
 * @method Paymentplan findOneByOccupation(double $occupation) Return the first Paymentplan filtered by the occupation column
 *
 * @method array findByRefno(int $refno) Return Paymentplan objects filtered by the refno column
 * @method array findByProjectcode(int $projectcode) Return Paymentplan objects filtered by the projectcode column
 * @method array findByNofinstallments(int $nofinstallments) Return Paymentplan objects filtered by the nofinstallments column
 * @method array findByDescription(string $description) Return Paymentplan objects filtered by the description column
 * @method array findByInstallamount(double $installamount) Return Paymentplan objects filtered by the installamount column
 * @method array findByRsvfee(double $rsvfee) Return Paymentplan objects filtered by the rsvfee column
 * @method array findByDownpayment(double $downpayment) Return Paymentplan objects filtered by the downpayment column
 * @method array findByBankloan(double $bankloan) Return Paymentplan objects filtered by the bankloan column
 * @method array findByAdtnlland(double $adtnlland) Return Paymentplan objects filtered by the adtnlland column
 * @method array findByTotalpayable(double $totalpayable) Return Paymentplan objects filtered by the totalpayable column
 * @method array findByDeleted(boolean $deleted) Return Paymentplan objects filtered by the deleted column
 * @method array findByAddedby(int $addedby) Return Paymentplan objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Paymentplan objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Paymentplan objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Paymentplan objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Paymentplan objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Paymentplan objects filtered by the lastmodifiedtime column
 * @method array findByDeletedby(int $deletedby) Return Paymentplan objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Paymentplan objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Paymentplan objects filtered by the deletedtime column
 * @method array findByDevechargers1(double $devechargers1) Return Paymentplan objects filtered by the devechargers1 column
 * @method array findByDevechargers2(double $devechargers2) Return Paymentplan objects filtered by the devechargers2 column
 * @method array findByInfrastructure(double $infrastructure) Return Paymentplan objects filtered by the infrastructure column
 * @method array findByOccupation(double $occupation) Return Paymentplan objects filtered by the occupation column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BasePaymentplanQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePaymentplanQuery object.
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
            $modelName = 'Paymentplan';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PaymentplanQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PaymentplanQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PaymentplanQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PaymentplanQuery) {
            return $criteria;
        }
        $query = new PaymentplanQuery(null, null, $modelAlias);

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
     * @return   Paymentplan|Paymentplan[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PaymentplanPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PaymentplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Paymentplan A model object, or null if the key is not found
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
     * @return                 Paymentplan A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `projectcode`, `nofinstallments`, `description`, `installamount`, `rsvfee`, `downpayment`, `bankloan`, `adtnlland`, `totalpayable`, `deleted`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime`, `deletedby`, `deleteddate`, `deletedtime`, `devechargers1`, `devechargers2`, `infrastructure`, `occupation` FROM `paymentplan` WHERE `refno` = :p0';
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
            $obj = new Paymentplan();
            $obj->hydrate($row);
            PaymentplanPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Paymentplan|Paymentplan[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Paymentplan[]|mixed the list of results, formatted by the current formatter
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PaymentplanPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PaymentplanPeer::REFNO, $keys, Criteria::IN);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(PaymentplanPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(PaymentplanPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::REFNO, $refno, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByProjectcode($projectcode = null, $comparison = null)
    {
        if (is_array($projectcode)) {
            $useMinMax = false;
            if (isset($projectcode['min'])) {
                $this->addUsingAlias(PaymentplanPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectcode['max'])) {
                $this->addUsingAlias(PaymentplanPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::PROJECTCODE, $projectcode, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByNofinstallments($nofinstallments = null, $comparison = null)
    {
        if (is_array($nofinstallments)) {
            $useMinMax = false;
            if (isset($nofinstallments['min'])) {
                $this->addUsingAlias(PaymentplanPeer::NOFINSTALLMENTS, $nofinstallments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nofinstallments['max'])) {
                $this->addUsingAlias(PaymentplanPeer::NOFINSTALLMENTS, $nofinstallments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::NOFINSTALLMENTS, $nofinstallments, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PaymentplanPeer::DESCRIPTION, $description, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByInstallamount($installamount = null, $comparison = null)
    {
        if (is_array($installamount)) {
            $useMinMax = false;
            if (isset($installamount['min'])) {
                $this->addUsingAlias(PaymentplanPeer::INSTALLAMOUNT, $installamount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($installamount['max'])) {
                $this->addUsingAlias(PaymentplanPeer::INSTALLAMOUNT, $installamount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::INSTALLAMOUNT, $installamount, $comparison);
    }

    /**
     * Filter the query on the rsvfee column
     *
     * Example usage:
     * <code>
     * $query->filterByRsvfee(1234); // WHERE rsvfee = 1234
     * $query->filterByRsvfee(array(12, 34)); // WHERE rsvfee IN (12, 34)
     * $query->filterByRsvfee(array('min' => 12)); // WHERE rsvfee >= 12
     * $query->filterByRsvfee(array('max' => 12)); // WHERE rsvfee <= 12
     * </code>
     *
     * @param     mixed $rsvfee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByRsvfee($rsvfee = null, $comparison = null)
    {
        if (is_array($rsvfee)) {
            $useMinMax = false;
            if (isset($rsvfee['min'])) {
                $this->addUsingAlias(PaymentplanPeer::RSVFEE, $rsvfee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rsvfee['max'])) {
                $this->addUsingAlias(PaymentplanPeer::RSVFEE, $rsvfee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::RSVFEE, $rsvfee, $comparison);
    }

    /**
     * Filter the query on the downpayment column
     *
     * Example usage:
     * <code>
     * $query->filterByDownpayment(1234); // WHERE downpayment = 1234
     * $query->filterByDownpayment(array(12, 34)); // WHERE downpayment IN (12, 34)
     * $query->filterByDownpayment(array('min' => 12)); // WHERE downpayment >= 12
     * $query->filterByDownpayment(array('max' => 12)); // WHERE downpayment <= 12
     * </code>
     *
     * @param     mixed $downpayment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDownpayment($downpayment = null, $comparison = null)
    {
        if (is_array($downpayment)) {
            $useMinMax = false;
            if (isset($downpayment['min'])) {
                $this->addUsingAlias(PaymentplanPeer::DOWNPAYMENT, $downpayment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($downpayment['max'])) {
                $this->addUsingAlias(PaymentplanPeer::DOWNPAYMENT, $downpayment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::DOWNPAYMENT, $downpayment, $comparison);
    }

    /**
     * Filter the query on the bankloan column
     *
     * Example usage:
     * <code>
     * $query->filterByBankloan(1234); // WHERE bankloan = 1234
     * $query->filterByBankloan(array(12, 34)); // WHERE bankloan IN (12, 34)
     * $query->filterByBankloan(array('min' => 12)); // WHERE bankloan >= 12
     * $query->filterByBankloan(array('max' => 12)); // WHERE bankloan <= 12
     * </code>
     *
     * @param     mixed $bankloan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByBankloan($bankloan = null, $comparison = null)
    {
        if (is_array($bankloan)) {
            $useMinMax = false;
            if (isset($bankloan['min'])) {
                $this->addUsingAlias(PaymentplanPeer::BANKLOAN, $bankloan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bankloan['max'])) {
                $this->addUsingAlias(PaymentplanPeer::BANKLOAN, $bankloan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::BANKLOAN, $bankloan, $comparison);
    }

    /**
     * Filter the query on the adtnlland column
     *
     * Example usage:
     * <code>
     * $query->filterByAdtnlland(1234); // WHERE adtnlland = 1234
     * $query->filterByAdtnlland(array(12, 34)); // WHERE adtnlland IN (12, 34)
     * $query->filterByAdtnlland(array('min' => 12)); // WHERE adtnlland >= 12
     * $query->filterByAdtnlland(array('max' => 12)); // WHERE adtnlland <= 12
     * </code>
     *
     * @param     mixed $adtnlland The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByAdtnlland($adtnlland = null, $comparison = null)
    {
        if (is_array($adtnlland)) {
            $useMinMax = false;
            if (isset($adtnlland['min'])) {
                $this->addUsingAlias(PaymentplanPeer::ADTNLLAND, $adtnlland['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adtnlland['max'])) {
                $this->addUsingAlias(PaymentplanPeer::ADTNLLAND, $adtnlland['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::ADTNLLAND, $adtnlland, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByTotalpayable($totalpayable = null, $comparison = null)
    {
        if (is_array($totalpayable)) {
            $useMinMax = false;
            if (isset($totalpayable['min'])) {
                $this->addUsingAlias(PaymentplanPeer::TOTALPAYABLE, $totalpayable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalpayable['max'])) {
                $this->addUsingAlias(PaymentplanPeer::TOTALPAYABLE, $totalpayable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::TOTALPAYABLE, $totalpayable, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PaymentplanPeer::DELETED, $deleted, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(PaymentplanPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(PaymentplanPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::ADDEDBY, $addedby, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(PaymentplanPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(PaymentplanPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::ADDEDDATE, $addeddate, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(PaymentplanPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(PaymentplanPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::ADDEDTIME, $addedtime, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (is_array($lastmodifiedby)) {
            $useMinMax = false;
            if (isset($lastmodifiedby['min'])) {
                $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedby['max'])) {
                $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
    {
        if (is_array($lastmodifieddate)) {
            $useMinMax = false;
            if (isset($lastmodifieddate['min'])) {
                $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifieddate['max'])) {
                $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
    {
        if (is_array($lastmodifiedtime)) {
            $useMinMax = false;
            if (isset($lastmodifiedtime['min'])) {
                $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedtime['max'])) {
                $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDeletedby($deletedby = null, $comparison = null)
    {
        if (is_array($deletedby)) {
            $useMinMax = false;
            if (isset($deletedby['min'])) {
                $this->addUsingAlias(PaymentplanPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedby['max'])) {
                $this->addUsingAlias(PaymentplanPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::DELETEDBY, $deletedby, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDeleteddate($deleteddate = null, $comparison = null)
    {
        if (is_array($deleteddate)) {
            $useMinMax = false;
            if (isset($deleteddate['min'])) {
                $this->addUsingAlias(PaymentplanPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deleteddate['max'])) {
                $this->addUsingAlias(PaymentplanPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::DELETEDDATE, $deleteddate, $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDeletedtime($deletedtime = null, $comparison = null)
    {
        if (is_array($deletedtime)) {
            $useMinMax = false;
            if (isset($deletedtime['min'])) {
                $this->addUsingAlias(PaymentplanPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedtime['max'])) {
                $this->addUsingAlias(PaymentplanPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::DELETEDTIME, $deletedtime, $comparison);
    }

    /**
     * Filter the query on the devechargers1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDevechargers1(1234); // WHERE devechargers1 = 1234
     * $query->filterByDevechargers1(array(12, 34)); // WHERE devechargers1 IN (12, 34)
     * $query->filterByDevechargers1(array('min' => 12)); // WHERE devechargers1 >= 12
     * $query->filterByDevechargers1(array('max' => 12)); // WHERE devechargers1 <= 12
     * </code>
     *
     * @param     mixed $devechargers1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDevechargers1($devechargers1 = null, $comparison = null)
    {
        if (is_array($devechargers1)) {
            $useMinMax = false;
            if (isset($devechargers1['min'])) {
                $this->addUsingAlias(PaymentplanPeer::DEVECHARGERS1, $devechargers1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devechargers1['max'])) {
                $this->addUsingAlias(PaymentplanPeer::DEVECHARGERS1, $devechargers1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::DEVECHARGERS1, $devechargers1, $comparison);
    }

    /**
     * Filter the query on the devechargers2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDevechargers2(1234); // WHERE devechargers2 = 1234
     * $query->filterByDevechargers2(array(12, 34)); // WHERE devechargers2 IN (12, 34)
     * $query->filterByDevechargers2(array('min' => 12)); // WHERE devechargers2 >= 12
     * $query->filterByDevechargers2(array('max' => 12)); // WHERE devechargers2 <= 12
     * </code>
     *
     * @param     mixed $devechargers2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByDevechargers2($devechargers2 = null, $comparison = null)
    {
        if (is_array($devechargers2)) {
            $useMinMax = false;
            if (isset($devechargers2['min'])) {
                $this->addUsingAlias(PaymentplanPeer::DEVECHARGERS2, $devechargers2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devechargers2['max'])) {
                $this->addUsingAlias(PaymentplanPeer::DEVECHARGERS2, $devechargers2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::DEVECHARGERS2, $devechargers2, $comparison);
    }

    /**
     * Filter the query on the infrastructure column
     *
     * Example usage:
     * <code>
     * $query->filterByInfrastructure(1234); // WHERE infrastructure = 1234
     * $query->filterByInfrastructure(array(12, 34)); // WHERE infrastructure IN (12, 34)
     * $query->filterByInfrastructure(array('min' => 12)); // WHERE infrastructure >= 12
     * $query->filterByInfrastructure(array('max' => 12)); // WHERE infrastructure <= 12
     * </code>
     *
     * @param     mixed $infrastructure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByInfrastructure($infrastructure = null, $comparison = null)
    {
        if (is_array($infrastructure)) {
            $useMinMax = false;
            if (isset($infrastructure['min'])) {
                $this->addUsingAlias(PaymentplanPeer::INFRASTRUCTURE, $infrastructure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infrastructure['max'])) {
                $this->addUsingAlias(PaymentplanPeer::INFRASTRUCTURE, $infrastructure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::INFRASTRUCTURE, $infrastructure, $comparison);
    }

    /**
     * Filter the query on the occupation column
     *
     * Example usage:
     * <code>
     * $query->filterByOccupation(1234); // WHERE occupation = 1234
     * $query->filterByOccupation(array(12, 34)); // WHERE occupation IN (12, 34)
     * $query->filterByOccupation(array('min' => 12)); // WHERE occupation >= 12
     * $query->filterByOccupation(array('max' => 12)); // WHERE occupation <= 12
     * </code>
     *
     * @param     mixed $occupation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function filterByOccupation($occupation = null, $comparison = null)
    {
        if (is_array($occupation)) {
            $useMinMax = false;
            if (isset($occupation['min'])) {
                $this->addUsingAlias(PaymentplanPeer::OCCUPATION, $occupation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occupation['max'])) {
                $this->addUsingAlias(PaymentplanPeer::OCCUPATION, $occupation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaymentplanPeer::OCCUPATION, $occupation, $comparison);
    }

    /**
     * Filter the query by a related Project object
     *
     * @param   Project|PropelObjectCollection $project The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PaymentplanQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProject($project, $comparison = null)
    {
        if ($project instanceof Project) {
            return $this
                ->addUsingAlias(PaymentplanPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
        } elseif ($project instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PaymentplanPeer::PROJECTCODE, $project->toKeyValue('PrimaryKey', 'Projectcode'), $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
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
     * Filter the query by a related Sales object
     *
     * @param   Sales|PropelObjectCollection $sales  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PaymentplanQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySales($sales, $comparison = null)
    {
        if ($sales instanceof Sales) {
            return $this
                ->addUsingAlias(PaymentplanPeer::REFNO, $sales->getPayplanrefno(), $comparison);
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
     * @return PaymentplanQuery The current query, for fluid interface
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
     * @param   Paymentplan $paymentplan Object to remove from the list of results
     *
     * @return PaymentplanQuery The current query, for fluid interface
     */
    public function prune($paymentplan = null)
    {
        if ($paymentplan) {
            $this->addUsingAlias(PaymentplanPeer::REFNO, $paymentplan->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
