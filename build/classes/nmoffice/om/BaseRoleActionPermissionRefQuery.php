<?php


/**
 * Base class that represents a query for the 'role_action_permission_ref' table.
 *
 * Role - Action_Permission Mapping
 *
 * @method RoleActionPermissionRefQuery orderByRid($order = Criteria::ASC) Order by the rid column
 * @method RoleActionPermissionRefQuery orderByAid($order = Criteria::ASC) Order by the aid column
 *
 * @method RoleActionPermissionRefQuery groupByRid() Group by the rid column
 * @method RoleActionPermissionRefQuery groupByAid() Group by the aid column
 *
 * @method RoleActionPermissionRefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RoleActionPermissionRefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RoleActionPermissionRefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RoleActionPermissionRefQuery leftJoinRole($relationAlias = null) Adds a LEFT JOIN clause to the query using the Role relation
 * @method RoleActionPermissionRefQuery rightJoinRole($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Role relation
 * @method RoleActionPermissionRefQuery innerJoinRole($relationAlias = null) Adds a INNER JOIN clause to the query using the Role relation
 *
 * @method RoleActionPermissionRefQuery leftJoinActionPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the ActionPermission relation
 * @method RoleActionPermissionRefQuery rightJoinActionPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ActionPermission relation
 * @method RoleActionPermissionRefQuery innerJoinActionPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the ActionPermission relation
 *
 * @method RoleActionPermissionRef findOne(PropelPDO $con = null) Return the first RoleActionPermissionRef matching the query
 * @method RoleActionPermissionRef findOneOrCreate(PropelPDO $con = null) Return the first RoleActionPermissionRef matching the query, or a new RoleActionPermissionRef object populated from the query conditions when no match is found
 *
 * @method RoleActionPermissionRef findOneByRid(int $rid) Return the first RoleActionPermissionRef filtered by the rid column
 * @method RoleActionPermissionRef findOneByAid(int $aid) Return the first RoleActionPermissionRef filtered by the aid column
 *
 * @method array findByRid(int $rid) Return RoleActionPermissionRef objects filtered by the rid column
 * @method array findByAid(int $aid) Return RoleActionPermissionRef objects filtered by the aid column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseRoleActionPermissionRefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRoleActionPermissionRefQuery object.
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
            $modelName = 'RoleActionPermissionRef';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RoleActionPermissionRefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RoleActionPermissionRefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RoleActionPermissionRefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RoleActionPermissionRefQuery) {
            return $criteria;
        }
        $query = new RoleActionPermissionRefQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$rid, $aid]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   RoleActionPermissionRef|RoleActionPermissionRef[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RoleActionPermissionRefPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RoleActionPermissionRefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 RoleActionPermissionRef A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `rid`, `aid` FROM `role_action_permission_ref` WHERE `rid` = :p0 AND `aid` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new RoleActionPermissionRef();
            $obj->hydrate($row);
            RoleActionPermissionRefPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return RoleActionPermissionRef|RoleActionPermissionRef[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|RoleActionPermissionRef[]|mixed the list of results, formatted by the current formatter
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
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(RoleActionPermissionRefPeer::RID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(RoleActionPermissionRefPeer::AID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(RoleActionPermissionRefPeer::RID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(RoleActionPermissionRefPeer::AID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the rid column
     *
     * Example usage:
     * <code>
     * $query->filterByRid(1234); // WHERE rid = 1234
     * $query->filterByRid(array(12, 34)); // WHERE rid IN (12, 34)
     * $query->filterByRid(array('min' => 12)); // WHERE rid >= 12
     * $query->filterByRid(array('max' => 12)); // WHERE rid <= 12
     * </code>
     *
     * @see       filterByRole()
     *
     * @param     mixed $rid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function filterByRid($rid = null, $comparison = null)
    {
        if (is_array($rid)) {
            $useMinMax = false;
            if (isset($rid['min'])) {
                $this->addUsingAlias(RoleActionPermissionRefPeer::RID, $rid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rid['max'])) {
                $this->addUsingAlias(RoleActionPermissionRefPeer::RID, $rid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RoleActionPermissionRefPeer::RID, $rid, $comparison);
    }

    /**
     * Filter the query on the aid column
     *
     * Example usage:
     * <code>
     * $query->filterByAid(1234); // WHERE aid = 1234
     * $query->filterByAid(array(12, 34)); // WHERE aid IN (12, 34)
     * $query->filterByAid(array('min' => 12)); // WHERE aid >= 12
     * $query->filterByAid(array('max' => 12)); // WHERE aid <= 12
     * </code>
     *
     * @see       filterByActionPermission()
     *
     * @param     mixed $aid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function filterByAid($aid = null, $comparison = null)
    {
        if (is_array($aid)) {
            $useMinMax = false;
            if (isset($aid['min'])) {
                $this->addUsingAlias(RoleActionPermissionRefPeer::AID, $aid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aid['max'])) {
                $this->addUsingAlias(RoleActionPermissionRefPeer::AID, $aid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RoleActionPermissionRefPeer::AID, $aid, $comparison);
    }

    /**
     * Filter the query by a related Role object
     *
     * @param   Role|PropelObjectCollection $role The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RoleActionPermissionRefQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRole($role, $comparison = null)
    {
        if ($role instanceof Role) {
            return $this
                ->addUsingAlias(RoleActionPermissionRefPeer::RID, $role->getRid(), $comparison);
        } elseif ($role instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RoleActionPermissionRefPeer::RID, $role->toKeyValue('PrimaryKey', 'Rid'), $comparison);
        } else {
            throw new PropelException('filterByRole() only accepts arguments of type Role or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Role relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function joinRole($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Role');

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
            $this->addJoinObject($join, 'Role');
        }

        return $this;
    }

    /**
     * Use the Role relation Role object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RoleQuery A secondary query class using the current class as primary query
     */
    public function useRoleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRole($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Role', 'RoleQuery');
    }

    /**
     * Filter the query by a related ActionPermission object
     *
     * @param   ActionPermission|PropelObjectCollection $actionPermission The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RoleActionPermissionRefQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByActionPermission($actionPermission, $comparison = null)
    {
        if ($actionPermission instanceof ActionPermission) {
            return $this
                ->addUsingAlias(RoleActionPermissionRefPeer::AID, $actionPermission->getId(), $comparison);
        } elseif ($actionPermission instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RoleActionPermissionRefPeer::AID, $actionPermission->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByActionPermission() only accepts arguments of type ActionPermission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ActionPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function joinActionPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ActionPermission');

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
            $this->addJoinObject($join, 'ActionPermission');
        }

        return $this;
    }

    /**
     * Use the ActionPermission relation ActionPermission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ActionPermissionQuery A secondary query class using the current class as primary query
     */
    public function useActionPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinActionPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ActionPermission', 'ActionPermissionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RoleActionPermissionRef $roleActionPermissionRef Object to remove from the list of results
     *
     * @return RoleActionPermissionRefQuery The current query, for fluid interface
     */
    public function prune($roleActionPermissionRef = null)
    {
        if ($roleActionPermissionRef) {
            $this->addCond('pruneCond0', $this->getAliasedColName(RoleActionPermissionRefPeer::RID), $roleActionPermissionRef->getRid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(RoleActionPermissionRefPeer::AID), $roleActionPermissionRef->getAid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
