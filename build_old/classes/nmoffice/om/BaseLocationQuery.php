<?php


/**
 * Base class that represents a query for the 'location' table.
 *
 * project location
 *
 * @method     LocationQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method     LocationQuery orderByLocationname($order = Criteria::ASC) Order by the locationname column
 * @method     LocationQuery orderByLocationcity($order = Criteria::ASC) Order by the locationcity column
 * @method     LocationQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     LocationQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     LocationQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     LocationQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     LocationQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     LocationQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     LocationQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     LocationQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     LocationQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     LocationQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     LocationQuery groupByLocationcode() Group by the locationcode column
 * @method     LocationQuery groupByLocationname() Group by the locationname column
 * @method     LocationQuery groupByLocationcity() Group by the locationcity column
 * @method     LocationQuery groupByDeleted() Group by the deleted column
 * @method     LocationQuery groupByAddedby() Group by the addedby column
 * @method     LocationQuery groupByAddeddate() Group by the addeddate column
 * @method     LocationQuery groupByAddedtime() Group by the addedtime column
 * @method     LocationQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     LocationQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     LocationQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     LocationQuery groupByDeletedby() Group by the deletedby column
 * @method     LocationQuery groupByDeleteddate() Group by the deleteddate column
 * @method     LocationQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     LocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LocationQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method     LocationQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method     LocationQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method     LocationQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method     LocationQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method     LocationQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method     LocationQuery leftJoinCustomerreceipts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerreceipts relation
 * @method     LocationQuery rightJoinCustomerreceipts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerreceipts relation
 * @method     LocationQuery innerJoinCustomerreceipts($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerreceipts relation
 *
 * @method     LocationQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method     LocationQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method     LocationQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method     Location findOne(PropelPDO $con = null) Return the first Location matching the query
 * @method     Location findOneOrCreate(PropelPDO $con = null) Return the first Location matching the query, or a new Location object populated from the query conditions when no match is found
 *
 * @method     Location findOneByLocationcode(int $locationcode) Return the first Location filtered by the locationcode column
 * @method     Location findOneByLocationname(string $locationname) Return the first Location filtered by the locationname column
 * @method     Location findOneByLocationcity(string $locationcity) Return the first Location filtered by the locationcity column
 * @method     Location findOneByDeleted(boolean $deleted) Return the first Location filtered by the deleted column
 * @method     Location findOneByAddedby(int $addedby) Return the first Location filtered by the addedby column
 * @method     Location findOneByAddeddate(string $addeddate) Return the first Location filtered by the addeddate column
 * @method     Location findOneByAddedtime(string $addedtime) Return the first Location filtered by the addedtime column
 * @method     Location findOneByLastmodifiedby(int $lastmodifiedby) Return the first Location filtered by the lastmodifiedby column
 * @method     Location findOneByLastmodifieddate(string $lastmodifieddate) Return the first Location filtered by the lastmodifieddate column
 * @method     Location findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Location filtered by the lastmodifiedtime column
 * @method     Location findOneByDeletedby(int $deletedby) Return the first Location filtered by the deletedby column
 * @method     Location findOneByDeleteddate(string $deleteddate) Return the first Location filtered by the deleteddate column
 * @method     Location findOneByDeletedtime(string $deletedtime) Return the first Location filtered by the deletedtime column
 *
 * @method     array findByLocationcode(int $locationcode) Return Location objects filtered by the locationcode column
 * @method     array findByLocationname(string $locationname) Return Location objects filtered by the locationname column
 * @method     array findByLocationcity(string $locationcity) Return Location objects filtered by the locationcity column
 * @method     array findByDeleted(boolean $deleted) Return Location objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Location objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Location objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Location objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Location objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Location objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Location objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Location objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Location objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Location objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseLocationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLocationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Location', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LocationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LocationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LocationQuery) {
			return $criteria;
		}
		$query = new LocationQuery();
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
	 * @return    Location|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LocationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LocationPeer::LOCATIONCODE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LocationPeer::LOCATIONCODE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the locationcode column
	 * 
	 * @param     int|array $locationcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByLocationcode($locationcode = null, $comparison = null)
	{
		if (is_array($locationcode) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LocationPeer::LOCATIONCODE, $locationcode, $comparison);
	}

	/**
	 * Filter the query on the locationname column
	 * 
	 * @param     string $locationname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByLocationname($locationname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($locationname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $locationname)) {
				$locationname = str_replace('*', '%', $locationname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LocationPeer::LOCATIONNAME, $locationname, $comparison);
	}

	/**
	 * Filter the query on the locationcity column
	 * 
	 * @param     string $locationcity The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByLocationcity($locationcity = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($locationcity)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $locationcity)) {
				$locationcity = str_replace('*', '%', $locationcity);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LocationPeer::LOCATIONCITY, $locationcity, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(LocationPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(LocationPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(LocationPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(LocationPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(LocationPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(LocationPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(LocationPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(LocationPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(LocationPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(LocationPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(LocationPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(LocationPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(LocationPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(LocationPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(LocationPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(LocationPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(LocationPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(LocationPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(LocationPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LocationPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Project object
	 *
	 * @param     Project $project  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByProject($project, $comparison = null)
	{
		return $this
			->addUsingAlias(LocationPeer::LOCATIONCODE, $project->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Project relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocationQuery The current query, for fluid interface
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
		if($relationAlias) {
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
	 * @return    ProjectQuery A secondary query class using the current class as primary query
	 */
	public function useProjectQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProject($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Project', 'ProjectQuery');
	}

	/**
	 * Filter the query by a related Projectdetails object
	 *
	 * @param     Projectdetails $projectdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByProjectdetails($projectdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(LocationPeer::LOCATIONCODE, $projectdetails->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Projectdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function joinProjectdetails($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Projectdetails');
		
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
			$this->addJoinObject($join, 'Projectdetails');
		}
		
		return $this;
	}

	/**
	 * Use the Projectdetails relation Projectdetails object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectdetailsQuery A secondary query class using the current class as primary query
	 */
	public function useProjectdetailsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinProjectdetails($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Projectdetails', 'ProjectdetailsQuery');
	}

	/**
	 * Filter the query by a related Customerreceipts object
	 *
	 * @param     Customerreceipts $customerreceipts  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterByCustomerreceipts($customerreceipts, $comparison = null)
	{
		return $this
			->addUsingAlias(LocationPeer::LOCATIONCODE, $customerreceipts->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Customerreceipts relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocationQuery The current query, for fluid interface
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
		if($relationAlias) {
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
	 * @return    CustomerreceiptsQuery A secondary query class using the current class as primary query
	 */
	public function useCustomerreceiptsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCustomerreceipts($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Customerreceipts', 'CustomerreceiptsQuery');
	}

	/**
	 * Filter the query by a related Sales object
	 *
	 * @param     Sales $sales  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function filterBySales($sales, $comparison = null)
	{
		return $this
			->addUsingAlias(LocationPeer::LOCATIONCODE, $sales->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sales relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocationQuery The current query, for fluid interface
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
		if($relationAlias) {
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
	 * @return    SalesQuery A secondary query class using the current class as primary query
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
	 * @param     Location $location Object to remove from the list of results
	 *
	 * @return    LocationQuery The current query, for fluid interface
	 */
	public function prune($location = null)
	{
		if ($location) {
			$this->addUsingAlias(LocationPeer::LOCATIONCODE, $location->getLocationcode(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLocationQuery
