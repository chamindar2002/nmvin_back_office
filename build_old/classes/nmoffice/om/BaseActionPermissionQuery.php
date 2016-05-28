<?php


/**
 * Base class that represents a query for the 'action_permission' table.
 *
 * Action Permission
 *
 * @method     ActionPermissionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ActionPermissionQuery orderByModule($order = Criteria::ASC) Order by the module column
 * @method     ActionPermissionQuery orderByAction($order = Criteria::ASC) Order by the action column
 * @method     ActionPermissionQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ActionPermissionQuery orderBySystemid($order = Criteria::ASC) Order by the systemid column
 *
 * @method     ActionPermissionQuery groupById() Group by the id column
 * @method     ActionPermissionQuery groupByModule() Group by the module column
 * @method     ActionPermissionQuery groupByAction() Group by the action column
 * @method     ActionPermissionQuery groupByDescription() Group by the description column
 * @method     ActionPermissionQuery groupBySystemid() Group by the systemid column
 *
 * @method     ActionPermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ActionPermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ActionPermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ActionPermissionQuery leftJoinRoleActionPermissionRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the RoleActionPermissionRef relation
 * @method     ActionPermissionQuery rightJoinRoleActionPermissionRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RoleActionPermissionRef relation
 * @method     ActionPermissionQuery innerJoinRoleActionPermissionRef($relationAlias = null) Adds a INNER JOIN clause to the query using the RoleActionPermissionRef relation
 *
 * @method     ActionPermission findOne(PropelPDO $con = null) Return the first ActionPermission matching the query
 * @method     ActionPermission findOneOrCreate(PropelPDO $con = null) Return the first ActionPermission matching the query, or a new ActionPermission object populated from the query conditions when no match is found
 *
 * @method     ActionPermission findOneById(int $id) Return the first ActionPermission filtered by the id column
 * @method     ActionPermission findOneByModule(string $module) Return the first ActionPermission filtered by the module column
 * @method     ActionPermission findOneByAction(string $action) Return the first ActionPermission filtered by the action column
 * @method     ActionPermission findOneByDescription(string $description) Return the first ActionPermission filtered by the description column
 * @method     ActionPermission findOneBySystemid(int $systemid) Return the first ActionPermission filtered by the systemid column
 *
 * @method     array findById(int $id) Return ActionPermission objects filtered by the id column
 * @method     array findByModule(string $module) Return ActionPermission objects filtered by the module column
 * @method     array findByAction(string $action) Return ActionPermission objects filtered by the action column
 * @method     array findByDescription(string $description) Return ActionPermission objects filtered by the description column
 * @method     array findBySystemid(int $systemid) Return ActionPermission objects filtered by the systemid column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseActionPermissionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseActionPermissionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'ActionPermission', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ActionPermissionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ActionPermissionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ActionPermissionQuery) {
			return $criteria;
		}
		$query = new ActionPermissionQuery();
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
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    ActionPermission|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ActionPermissionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * $objs = $c->findPks(array(12, 56, 832), $con);
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
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ActionPermissionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ActionPermissionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ActionPermissionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the module column
	 * 
	 * @param     string $module The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterByModule($module = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($module)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $module)) {
				$module = str_replace('*', '%', $module);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ActionPermissionPeer::MODULE, $module, $comparison);
	}

	/**
	 * Filter the query on the action column
	 * 
	 * @param     string $action The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterByAction($action = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($action)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $action)) {
				$action = str_replace('*', '%', $action);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ActionPermissionPeer::ACTION, $action, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ActionPermissionPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the systemid column
	 * 
	 * @param     int|array $systemid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterBySystemid($systemid = null, $comparison = null)
	{
		if (is_array($systemid)) {
			$useMinMax = false;
			if (isset($systemid['min'])) {
				$this->addUsingAlias(ActionPermissionPeer::SYSTEMID, $systemid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($systemid['max'])) {
				$this->addUsingAlias(ActionPermissionPeer::SYSTEMID, $systemid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ActionPermissionPeer::SYSTEMID, $systemid, $comparison);
	}

	/**
	 * Filter the query by a related RoleActionPermissionRef object
	 *
	 * @param     RoleActionPermissionRef $roleActionPermissionRef  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function filterByRoleActionPermissionRef($roleActionPermissionRef, $comparison = null)
	{
		return $this
			->addUsingAlias(ActionPermissionPeer::ID, $roleActionPermissionRef->getAid(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the RoleActionPermissionRef relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function joinRoleActionPermissionRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RoleActionPermissionRef');
		
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
			$this->addJoinObject($join, 'RoleActionPermissionRef');
		}
		
		return $this;
	}

	/**
	 * Use the RoleActionPermissionRef relation RoleActionPermissionRef object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RoleActionPermissionRefQuery A secondary query class using the current class as primary query
	 */
	public function useRoleActionPermissionRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRoleActionPermissionRef($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RoleActionPermissionRef', 'RoleActionPermissionRefQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ActionPermission $actionPermission Object to remove from the list of results
	 *
	 * @return    ActionPermissionQuery The current query, for fluid interface
	 */
	public function prune($actionPermission = null)
	{
		if ($actionPermission) {
			$this->addUsingAlias(ActionPermissionPeer::ID, $actionPermission->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseActionPermissionQuery
