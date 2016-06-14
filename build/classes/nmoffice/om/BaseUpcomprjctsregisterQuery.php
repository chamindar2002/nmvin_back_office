<?php


/**
 * Base class that represents a query for the 'upcomprjctsregister' table.
 *
 * Upcoming Projects Registrations
 *
 * @method UpcomprjctsregisterQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method UpcomprjctsregisterQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method UpcomprjctsregisterQuery orderByUpcprojectid($order = Criteria::ASC) Order by the upcprojectid column
 * @method UpcomprjctsregisterQuery orderByUpcprojectname($order = Criteria::ASC) Order by the upcprojectname column
 * @method UpcomprjctsregisterQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method UpcomprjctsregisterQuery groupByRefno() Group by the refno column
 * @method UpcomprjctsregisterQuery groupByUid() Group by the uid column
 * @method UpcomprjctsregisterQuery groupByUpcprojectid() Group by the upcprojectid column
 * @method UpcomprjctsregisterQuery groupByUpcprojectname() Group by the upcprojectname column
 * @method UpcomprjctsregisterQuery groupByStatus() Group by the status column
 *
 * @method UpcomprjctsregisterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UpcomprjctsregisterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UpcomprjctsregisterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UpcomprjctsregisterQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method UpcomprjctsregisterQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method UpcomprjctsregisterQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method Upcomprjctsregister findOne(PropelPDO $con = null) Return the first Upcomprjctsregister matching the query
 * @method Upcomprjctsregister findOneOrCreate(PropelPDO $con = null) Return the first Upcomprjctsregister matching the query, or a new Upcomprjctsregister object populated from the query conditions when no match is found
 *
 * @method Upcomprjctsregister findOneByUid(int $uid) Return the first Upcomprjctsregister filtered by the uid column
 * @method Upcomprjctsregister findOneByUpcprojectid(int $upcprojectid) Return the first Upcomprjctsregister filtered by the upcprojectid column
 * @method Upcomprjctsregister findOneByUpcprojectname(string $upcprojectname) Return the first Upcomprjctsregister filtered by the upcprojectname column
 * @method Upcomprjctsregister findOneByStatus(boolean $status) Return the first Upcomprjctsregister filtered by the status column
 *
 * @method array findByRefno(int $refno) Return Upcomprjctsregister objects filtered by the refno column
 * @method array findByUid(int $uid) Return Upcomprjctsregister objects filtered by the uid column
 * @method array findByUpcprojectid(int $upcprojectid) Return Upcomprjctsregister objects filtered by the upcprojectid column
 * @method array findByUpcprojectname(string $upcprojectname) Return Upcomprjctsregister objects filtered by the upcprojectname column
 * @method array findByStatus(boolean $status) Return Upcomprjctsregister objects filtered by the status column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseUpcomprjctsregisterQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUpcomprjctsregisterQuery object.
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
            $modelName = 'Upcomprjctsregister';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UpcomprjctsregisterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UpcomprjctsregisterQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UpcomprjctsregisterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UpcomprjctsregisterQuery) {
            return $criteria;
        }
        $query = new UpcomprjctsregisterQuery(null, null, $modelAlias);

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
     * @return   Upcomprjctsregister|Upcomprjctsregister[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UpcomprjctsregisterPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UpcomprjctsregisterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Upcomprjctsregister A model object, or null if the key is not found
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
     * @return                 Upcomprjctsregister A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `refno`, `uid`, `upcprojectid`, `upcprojectname`, `status` FROM `upcomprjctsregister` WHERE `refno` = :p0';
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
            $obj = new Upcomprjctsregister();
            $obj->hydrate($row);
            UpcomprjctsregisterPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Upcomprjctsregister|Upcomprjctsregister[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Upcomprjctsregister[]|mixed the list of results, formatted by the current formatter
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
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UpcomprjctsregisterPeer::REFNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UpcomprjctsregisterPeer::REFNO, $keys, Criteria::IN);
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
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(UpcomprjctsregisterPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(UpcomprjctsregisterPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UpcomprjctsregisterPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the uid column
     *
     * Example usage:
     * <code>
     * $query->filterByUid(1234); // WHERE uid = 1234
     * $query->filterByUid(array(12, 34)); // WHERE uid IN (12, 34)
     * $query->filterByUid(array('min' => 12)); // WHERE uid >= 12
     * $query->filterByUid(array('max' => 12)); // WHERE uid <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $uid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (is_array($uid)) {
            $useMinMax = false;
            if (isset($uid['min'])) {
                $this->addUsingAlias(UpcomprjctsregisterPeer::UID, $uid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uid['max'])) {
                $this->addUsingAlias(UpcomprjctsregisterPeer::UID, $uid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UpcomprjctsregisterPeer::UID, $uid, $comparison);
    }

    /**
     * Filter the query on the upcprojectid column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcprojectid(1234); // WHERE upcprojectid = 1234
     * $query->filterByUpcprojectid(array(12, 34)); // WHERE upcprojectid IN (12, 34)
     * $query->filterByUpcprojectid(array('min' => 12)); // WHERE upcprojectid >= 12
     * $query->filterByUpcprojectid(array('max' => 12)); // WHERE upcprojectid <= 12
     * </code>
     *
     * @param     mixed $upcprojectid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByUpcprojectid($upcprojectid = null, $comparison = null)
    {
        if (is_array($upcprojectid)) {
            $useMinMax = false;
            if (isset($upcprojectid['min'])) {
                $this->addUsingAlias(UpcomprjctsregisterPeer::UPCPROJECTID, $upcprojectid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($upcprojectid['max'])) {
                $this->addUsingAlias(UpcomprjctsregisterPeer::UPCPROJECTID, $upcprojectid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UpcomprjctsregisterPeer::UPCPROJECTID, $upcprojectid, $comparison);
    }

    /**
     * Filter the query on the upcprojectname column
     *
     * Example usage:
     * <code>
     * $query->filterByUpcprojectname('fooValue');   // WHERE upcprojectname = 'fooValue'
     * $query->filterByUpcprojectname('%fooValue%'); // WHERE upcprojectname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $upcprojectname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByUpcprojectname($upcprojectname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($upcprojectname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $upcprojectname)) {
                $upcprojectname = str_replace('*', '%', $upcprojectname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UpcomprjctsregisterPeer::UPCPROJECTNAME, $upcprojectname, $comparison);
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
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_string($status)) {
            $status = in_array(strtolower($status), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UpcomprjctsregisterPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UpcomprjctsregisterQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(UpcomprjctsregisterPeer::UID, $user->getUid(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UpcomprjctsregisterPeer::UID, $user->toKeyValue('PrimaryKey', 'Uid'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Upcomprjctsregister $upcomprjctsregister Object to remove from the list of results
     *
     * @return UpcomprjctsregisterQuery The current query, for fluid interface
     */
    public function prune($upcomprjctsregister = null)
    {
        if ($upcomprjctsregister) {
            $this->addUsingAlias(UpcomprjctsregisterPeer::REFNO, $upcomprjctsregister->getRefno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
