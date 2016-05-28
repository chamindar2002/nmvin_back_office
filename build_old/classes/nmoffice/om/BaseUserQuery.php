<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 * User
 *
 * @method     UserQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method     UserQuery orderByEnabled($order = Criteria::ASC) Order by the enabled column
 * @method     UserQuery orderByLoginname($order = Criteria::ASC) Order by the loginname column
 * @method     UserQuery orderByFamilyname($order = Criteria::ASC) Order by the familyname column
 * @method     UserQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     UserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     UserQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 *
 * @method     UserQuery groupByUid() Group by the uid column
 * @method     UserQuery groupByEnabled() Group by the enabled column
 * @method     UserQuery groupByLoginname() Group by the loginname column
 * @method     UserQuery groupByFamilyname() Group by the familyname column
 * @method     UserQuery groupByFirstname() Group by the firstname column
 * @method     UserQuery groupByPassword() Group by the password column
 * @method     UserQuery groupByDeleted() Group by the deleted column
 *
 * @method     UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserQuery leftJoinUserRoleRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRoleRef relation
 * @method     UserQuery rightJoinUserRoleRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRoleRef relation
 * @method     UserQuery innerJoinUserRoleRef($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRoleRef relation
 *
 * @method     User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method     User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method     User findOneByUid(int $uid) Return the first User filtered by the uid column
 * @method     User findOneByEnabled(boolean $enabled) Return the first User filtered by the enabled column
 * @method     User findOneByLoginname(string $loginname) Return the first User filtered by the loginname column
 * @method     User findOneByFamilyname(string $familyname) Return the first User filtered by the familyname column
 * @method     User findOneByFirstname(string $firstname) Return the first User filtered by the firstname column
 * @method     User findOneByPassword(string $password) Return the first User filtered by the password column
 * @method     User findOneByDeleted(boolean $deleted) Return the first User filtered by the deleted column
 *
 * @method     array findByUid(int $uid) Return User objects filtered by the uid column
 * @method     array findByEnabled(boolean $enabled) Return User objects filtered by the enabled column
 * @method     array findByLoginname(string $loginname) Return User objects filtered by the loginname column
 * @method     array findByFamilyname(string $familyname) Return User objects filtered by the familyname column
 * @method     array findByFirstname(string $firstname) Return User objects filtered by the firstname column
 * @method     array findByPassword(string $password) Return User objects filtered by the password column
 * @method     array findByDeleted(boolean $deleted) Return User objects filtered by the deleted column
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
	public function __construct($dbName = 'nmwndb', $modelName = 'User', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserQuery) {
			return $criteria;
		}
		$query = new UserQuery();
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
	 * @return    User|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserQuery The current query, for fluid interface
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
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserPeer::UID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the uid column
	 * 
	 * @param     int|array $uid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUid($uid = null, $comparison = null)
	{
		if (is_array($uid) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserPeer::UID, $uid, $comparison);
	}

	/**
	 * Filter the query on the enabled column
	 * 
	 * @param     boolean|string $enabled The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEnabled($enabled = null, $comparison = null)
	{
		if (is_string($enabled)) {
			$enabled = in_array(strtolower($enabled), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(UserPeer::ENABLED, $enabled, $comparison);
	}

	/**
	 * Filter the query on the loginname column
	 * 
	 * @param     string $loginname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
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
	 * @param     string $familyname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
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
	 * @param     string $firstname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
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
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
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
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(UserPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query by a related UserRoleRef object
	 *
	 * @param     UserRoleRef $userRoleRef  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserRoleRef($userRoleRef, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::UID, $userRoleRef->getUid(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserRoleRef relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
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
		if($relationAlias) {
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
	 * @return    UserRoleRefQuery A secondary query class using the current class as primary query
	 */
	public function useUserRoleRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserRoleRef($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserRoleRef', 'UserRoleRefQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     User $user Object to remove from the list of results
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function prune($user = null)
	{
		if ($user) {
			$this->addUsingAlias(UserPeer::UID, $user->getUid(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserQuery
