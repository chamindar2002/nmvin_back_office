<?php


/**
 * Base class that represents a query for the 'blockedips' table.
 *
 * Blockec Online Clients IP Addresses
 *
 * @method BlockedipsQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method BlockedipsQuery orderByBlockedIp($order = Criteria::ASC) Order by the blocked_ip column
 * @method BlockedipsQuery orderByBlockedEmail($order = Criteria::ASC) Order by the blocked_email column
 * @method BlockedipsQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method BlockedipsQuery groupByRefno() Group by the refno column
 * @method BlockedipsQuery groupByBlockedIp() Group by the blocked_ip column
 * @method BlockedipsQuery groupByBlockedEmail() Group by the blocked_email column
 * @method BlockedipsQuery groupByStatus() Group by the status column
 *
 * @method BlockedipsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BlockedipsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BlockedipsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Blockedips findOne(PropelPDO $con = null) Return the first Blockedips matching the query
 * @method Blockedips findOneOrCreate(PropelPDO $con = null) Return the first Blockedips matching the query, or a new Blockedips object populated from the query conditions when no match is found
 *
 * @method Blockedips findOneByBlockedIp(string $blocked_ip) Return the first Blockedips filtered by the blocked_ip column
 * @method Blockedips findOneByBlockedEmail(string $blocked_email) Return the first Blockedips filtered by the blocked_email column
 * @method Blockedips findOneByStatus(boolean $status) Return the first Blockedips filtered by the status column
 *
 * @method array findByRefno(int $refno) Return Blockedips objects filtered by the refno column
 * @method array findByBlockedIp(string $blocked_ip) Return Blockedips objects filtered by the blocked_ip column
 * @method array findByBlockedEmail(string $blocked_email) Return Blockedips objects filtered by the blocked_email column
 * @method array findByStatus(boolean $status) Return Blockedips objects filtered by the status column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseBlockedipsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBlockedipsQuery object.
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
            $modelName = 'Blockedips';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BlockedipsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BlockedipsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BlockedipsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BlockedipsQuery) {
            return $criteria;
        }
        $query = new BlockedipsQuery(null, null, $modelAlias);

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
     * @return   Blockedips|Blockedips[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BlockedipsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BlockedipsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Blockedips A model object, or null if the key is not found
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
     * @return                 Blockedips A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `blocked_ip`, `blocked_email`, `status` FROM `blockedips` WHERE `refno` = :p0';
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
            $obj = new Blockedips();
            $obj->hydrate($row);
            BlockedipsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Blockedips|Blockedips[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Blockedips[]|mixed the list of results, formatted by the current formatter
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
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BlockedipsPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BlockedipsPeer::REFNO, $keys, Criteria::IN);
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
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(BlockedipsPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(BlockedipsPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlockedipsPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the blocked_ip column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockedIp('fooValue');   // WHERE blocked_ip = 'fooValue'
     * $query->filterByBlockedIp('%fooValue%'); // WHERE blocked_ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $blockedIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function filterByBlockedIp($blockedIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($blockedIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $blockedIp)) {
                $blockedIp = str_replace('*', '%', $blockedIp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlockedipsPeer::BLOCKED_IP, $blockedIp, $comparison);
    }

    /**
     * Filter the query on the blocked_email column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockedEmail('fooValue');   // WHERE blocked_email = 'fooValue'
     * $query->filterByBlockedEmail('%fooValue%'); // WHERE blocked_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $blockedEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function filterByBlockedEmail($blockedEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($blockedEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $blockedEmail)) {
                $blockedEmail = str_replace('*', '%', $blockedEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlockedipsPeer::BLOCKED_EMAIL, $blockedEmail, $comparison);
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
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(BlockedipsPeer::STATUS, $status, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Blockedips $blockedips Object to remove from the list of results
     *
     * @return BlockedipsQuery The current query, for fluid interface
     */
    public function prune($blockedips = null)
    {
        if ($blockedips) {
            $this->addUsingAlias(BlockedipsPeer::REFNO, $blockedips->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
