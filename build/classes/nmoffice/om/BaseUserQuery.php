<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 * User
 *
 * @method UserQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method UserQuery orderByEnabled($order = Criteria::ASC) Order by the enabled column
 * @method UserQuery orderByLoginname($order = Criteria::ASC) Order by the loginname column
 * @method UserQuery orderByFamilyname($order = Criteria::ASC) Order by the familyname column
 * @method UserQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method UserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method UserQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 *
 * @method UserQuery groupByUid() Group by the uid column
 * @method UserQuery groupByEnabled() Group by the enabled column
 * @method UserQuery groupByLoginname() Group by the loginname column
 * @method UserQuery groupByFamilyname() Group by the familyname column
 * @method UserQuery groupByFirstname() Group by the firstname column
 * @method UserQuery groupByPassword() Group by the password column
 * @method UserQuery groupByDeleted() Group by the deleted column
 *
 * @method UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserQuery leftJoinUserRoleRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRoleRef relation
 * @method UserQuery rightJoinUserRoleRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRoleRef relation
 * @method UserQuery innerJoinUserRoleRef($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRoleRef relation
 *
 * @method UserQuery leftJoinUpcomprjctsregister($relationAlias = null) Adds a LEFT JOIN clause to the query using the Upcomprjctsregister relation
 * @method UserQuery rightJoinUpcomprjctsregister($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Upcomprjctsregister relation
 * @method UserQuery innerJoinUpcomprjctsregister($relationAlias = null) Adds a INNER JOIN clause to the query using the Upcomprjctsregister relation
 *
 * @method User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method User findOneByEnabled(boolean $enabled) Return the first User filtered by the enabled column
 * @method User findOneByLoginname(string $loginname) Return the first User filtered by the loginname column
 * @method User findOneByFamilyname(string $familyname) Return the first User filtered by the familyname column
 * @method User findOneByFirstname(string $firstname) Return the first User filtered by the firstname column
 * @method User findOneByPassword(string $password) Return the first User filtered by the password column
 * @method User findOneByDeleted(boolean $deleted) Return the first User filtered by the deleted column
 *
 * @method array findByUid(int $uid) Return User objects filtered by the uid column
 * @method array findByEnabled(boolean $enabled) Return User objects filtered by the enabled column
 * @method array findByLoginname(string $loginname) Return User objects filtered by the loginname column
 * @method array findByFamilyname(string $familyname) Return User objects filtered by the familyname column
 * @method array findByFirstname(string $firstname) Return User objects filtered by the firstname column
 * @method array findByPassword(string $password) Return User objects filtered by the password column
 * @method array findByDeleted(boolean $deleted) Return User objects filtered by the deleted column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserQuery object.
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
            $modelName = 'User';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserQuery) {
            return $criteria;
        }
        $query = new UserQuery(null, null, $modelAlias);

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
     * @return   User|User[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 User A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUid($key, $con = null)
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
     * @return                 User A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `uid`, `enabled`, `loginname`, `familyname`, `firstname`, `password`, `deleted` FROM `user` WHERE `uid` = :p0';
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
            $obj = new User();
            $obj->hydrate($row);
            UserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return User|User[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|User[]|mixed the list of results, formatted by the current formatter
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserPeer::UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserPeer::UID, $keys, Criteria::IN);
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
     * @param     mixed $uid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (is_array($uid)) {
            $useMinMax = false;
            if (isset($uid['min'])) {
                $this->addUsingAlias(UserPeer::UID, $uid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uid['max'])) {
                $this->addUsingAlias(UserPeer::UID, $uid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::UID, $uid, $comparison);
    }

    /**
     * Filter the query on the enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByEnabled(true); // WHERE enabled = true
     * $query->filterByEnabled('yes'); // WHERE enabled = true
     * </code>
     *
     * @param     boolean|string $enabled The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByEnabled($enabled = null, $comparison = null)
    {
        if (is_string($enabled)) {
            $enabled = in_array(strtolower($enabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UserPeer::ENABLED, $enabled, $comparison);
    }

    /**
     * Filter the query on the loginname column
     *
     * Example usage:
     * <code>
     * $query->filterByLoginname('fooValue');   // WHERE loginname = 'fooValue'
     * $query->filterByLoginname('%fooValue%'); // WHERE loginname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loginname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByLoginname($loginname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loginname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $loginname)) {
                $loginname = str_replace('*', '%', $loginname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::LOGINNAME, $loginname, $comparison);
    }

    /**
     * Filter the query on the familyname column
     *
     * Example usage:
     * <code>
     * $query->filterByFamilyname('fooValue');   // WHERE familyname = 'fooValue'
     * $query->filterByFamilyname('%fooValue%'); // WHERE familyname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $familyname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByFamilyname($familyname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($familyname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $familyname)) {
                $familyname = str_replace('*', '%', $familyname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::FAMILYNAME, $familyname, $comparison);
    }

    /**
     * Filter the query on the firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE firstname = 'fooValue'
     * $query->filterByFirstname('%fooValue%'); // WHERE firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByFirstname($firstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstname)) {
                $firstname = str_replace('*', '%', $firstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::PASSWORD, $password, $comparison);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UserPeer::DELETED, $deleted, $comparison);
    }

    /**
     * Filter the query by a related UserRoleRef object
     *
     * @param   UserRoleRef|PropelObjectCollection $userRoleRef  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserRoleRef($userRoleRef, $comparison = null)
    {
        if ($userRoleRef instanceof UserRoleRef) {
            return $this
                ->addUsingAlias(UserPeer::UID, $userRoleRef->getUid(), $comparison);
        } elseif ($userRoleRef instanceof PropelObjectCollection) {
            return $this
                ->useUserRoleRefQuery()
                ->filterByPrimaryKeys($userRoleRef->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUserRoleRef() only accepts arguments of type UserRoleRef or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserRoleRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinUserRoleRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserRoleRef');

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
            $this->addJoinObject($join, 'UserRoleRef');
        }

        return $this;
    }

    /**
     * Use the UserRoleRef relation UserRoleRef object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserRoleRefQuery A secondary query class using the current class as primary query
     */
    public function useUserRoleRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUserRoleRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserRoleRef', 'UserRoleRefQuery');
    }

    /**
     * Filter the query by a related Upcomprjctsregister object
     *
     * @param   Upcomprjctsregister|PropelObjectCollection $upcomprjctsregister  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUpcomprjctsregister($upcomprjctsregister, $comparison = null)
    {
        if ($upcomprjctsregister instanceof Upcomprjctsregister) {
            return $this
                ->addUsingAlias(UserPeer::UID, $upcomprjctsregister->getUid(), $comparison);
        } elseif ($upcomprjctsregister instanceof PropelObjectCollection) {
            return $this
                ->useUpcomprjctsregisterQuery()
                ->filterByPrimaryKeys($upcomprjctsregister->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUpcomprjctsregister() only accepts arguments of type Upcomprjctsregister or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Upcomprjctsregister relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function joinUpcomprjctsregister($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Upcomprjctsregister');

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
            $this->addJoinObject($join, 'Upcomprjctsregister');
        }

        return $this;
    }

    /**
     * Use the Upcomprjctsregister relation Upcomprjctsregister object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UpcomprjctsregisterQuery A secondary query class using the current class as primary query
     */
    public function useUpcomprjctsregisterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUpcomprjctsregister($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Upcomprjctsregister', 'UpcomprjctsregisterQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   User $user Object to remove from the list of results
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function prune($user = null)
    {
        if ($user) {
            $this->addUsingAlias(UserPeer::UID, $user->getUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
