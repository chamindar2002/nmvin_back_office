<?php


/**
 * Base class that represents a query for the 'role_action_permission_ref' table.
 *
 * Role - Action_Permission Mapping
 *
 * @method     RoleActionPermissionRefQuery orderByRid($order = Criteria::ASC) Order by the rid column
 * @method     RoleActionPermissionRefQuery orderByAid($order = Criteria::ASC) Order by the aid column
 *
 * @method     RoleActionPermissionRefQuery groupByRid() Group by the rid column
 * @method     RoleActionPermissionRefQuery groupByAid() Group by the aid column
 *
 * @method     RoleActionPermissionRefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RoleActionPermissionRefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RoleActionPermissionRefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RoleActionPermissionRefQuery leftJoinRole($relationAlias = null) Adds a LEFT JOIN clause to the query using the Role relation
 * @method     RoleActionPermissionRefQuery rightJoinRole($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Role relation
 * @method     RoleActionPermissionRefQuery innerJoinRole($relationAlias = null) Adds a INNER JOIN clause to the query using the Role relation
 *
 * @method     RoleActionPermissionRefQuery leftJoinActionPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the ActionPermission relation
 * @method     RoleActionPermissionRefQuery rightJoinActionPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ActionPermission relation
 * @method     RoleActionPermissionRefQuery innerJoinActionPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the ActionPermission relation
 *
 * @method     RoleActionPermissionRef findOne(PropelPDO $con = null) Return the first RoleActionPermissionRef matching the query
 * @method     RoleActionPermissionRef findOneOrCreate(PropelPDO $con = null) Return the first RoleActionPermissionRef matching the query, or a new RoleActionPermissionRef object populated from the query conditions when no match is found
 *
 * @method     RoleActionPermissionRef findOneByRid(int $rid) Return the first RoleActionPermissionRef filtered by the rid column
 * @method     RoleActionPermissionRef findOneByAid(int $aid) Return the first RoleActionPermissionRef filtered by the aid column
 *
 * @method     array findByRid(int $rid) Return RoleActionPermissionRef objects filtered by the rid column
 * @method     array findByAid(int $aid) Return RoleActionPermissionRef objects filtered by the aid column
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
	public function __construct($dbName = 'nmwndb', $modelName = 'RoleActionPermissionRef', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RoleActionPermissionRefQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RoleActionPermissionRefQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RoleActionPermissionRefQuery) {
			return $criteria;
		}
		$query = new RoleActionPermissionRefQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * <code>
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 * @param     array[$rid, $aid] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    RoleActionPermissionRef|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RoleActionPermissionRefPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
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
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
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
	 * @param     int|array $rid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
	 */
	public function filterByRid($rid = null, $comparison = null)
	{
		if (is_array($rid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RoleActionPermissionRefPeer::RID, $rid, $comparison);
	}

	/**
	 * Filter the query on the aid column
	 * 
	 * @param     int|array $aid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
	 */
	public function filterByAid($aid = null, $comparison = null)
	{
		if (is_array($aid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RoleActionPermissionRefPeer::AID, $aid, $comparison);
	}

	/**
	 * Filter the query by a related Role object
	 *
	 * @param     Role $role  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
	 */
	public function filterByRole($role, $comparison = null)
	{
		return $this
			->addUsingAlias(RoleActionPermissionRefPeer::RID, $role->getRid(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Role relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
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
		if($relationAlias) {
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
	 * @return    RoleQuery A secondary query class using the current class as primary query
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
	 * @param     ActionPermission $actionPermission  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
	 */
	public function filterByActionPermission($actionPermission, $comparison = null)
	{
		return $this
			->addUsingAlias(RoleActionPermissionRefPeer::AID, $actionPermission->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the ActionPermission relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
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
		if($relationAlias) {
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
	 * @return    ActionPermissionQuery A secondary query class using the current class as primary query
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
	 * @param     RoleActionPermissionRef $roleActionPermissionRef Object to remove from the list of results
	 *
	 * @return    RoleActionPermissionRefQuery The current query, for fluid interface
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

} // BaseRoleActionPermissionRefQuery
