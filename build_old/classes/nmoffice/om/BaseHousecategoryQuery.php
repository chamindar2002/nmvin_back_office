<?php


/**
 * Base class that represents a query for the 'housecategory' table.
 *
 * house category
 *
 * @method     HousecategoryQuery orderByHousecatcode($order = Criteria::ASC) Order by the housecatcode column
 * @method     HousecategoryQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     HousecategoryQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     HousecategoryQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     HousecategoryQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     HousecategoryQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     HousecategoryQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     HousecategoryQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     HousecategoryQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     HousecategoryQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     HousecategoryQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     HousecategoryQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     HousecategoryQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     HousecategoryQuery groupByHousecatcode() Group by the housecatcode column
 * @method     HousecategoryQuery groupByDescription() Group by the description column
 * @method     HousecategoryQuery groupByPrice() Group by the price column
 * @method     HousecategoryQuery groupByDeleted() Group by the deleted column
 * @method     HousecategoryQuery groupByAddedby() Group by the addedby column
 * @method     HousecategoryQuery groupByAddeddate() Group by the addeddate column
 * @method     HousecategoryQuery groupByAddedtime() Group by the addedtime column
 * @method     HousecategoryQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     HousecategoryQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     HousecategoryQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     HousecategoryQuery groupByDeletedby() Group by the deletedby column
 * @method     HousecategoryQuery groupByDeleteddate() Group by the deleteddate column
 * @method     HousecategoryQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     HousecategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     HousecategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     HousecategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     HousecategoryQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method     HousecategoryQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method     HousecategoryQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method     Housecategory findOne(PropelPDO $con = null) Return the first Housecategory matching the query
 * @method     Housecategory findOneOrCreate(PropelPDO $con = null) Return the first Housecategory matching the query, or a new Housecategory object populated from the query conditions when no match is found
 *
 * @method     Housecategory findOneByHousecatcode(int $housecatcode) Return the first Housecategory filtered by the housecatcode column
 * @method     Housecategory findOneByDescription(string $description) Return the first Housecategory filtered by the description column
 * @method     Housecategory findOneByPrice(double $price) Return the first Housecategory filtered by the price column
 * @method     Housecategory findOneByDeleted(boolean $deleted) Return the first Housecategory filtered by the deleted column
 * @method     Housecategory findOneByAddedby(int $addedby) Return the first Housecategory filtered by the addedby column
 * @method     Housecategory findOneByAddeddate(string $addeddate) Return the first Housecategory filtered by the addeddate column
 * @method     Housecategory findOneByAddedtime(string $addedtime) Return the first Housecategory filtered by the addedtime column
 * @method     Housecategory findOneByLastmodifiedby(int $lastmodifiedby) Return the first Housecategory filtered by the lastmodifiedby column
 * @method     Housecategory findOneByLastmodifieddate(string $lastmodifieddate) Return the first Housecategory filtered by the lastmodifieddate column
 * @method     Housecategory findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Housecategory filtered by the lastmodifiedtime column
 * @method     Housecategory findOneByDeletedby(int $deletedby) Return the first Housecategory filtered by the deletedby column
 * @method     Housecategory findOneByDeleteddate(string $deleteddate) Return the first Housecategory filtered by the deleteddate column
 * @method     Housecategory findOneByDeletedtime(string $deletedtime) Return the first Housecategory filtered by the deletedtime column
 *
 * @method     array findByHousecatcode(int $housecatcode) Return Housecategory objects filtered by the housecatcode column
 * @method     array findByDescription(string $description) Return Housecategory objects filtered by the description column
 * @method     array findByPrice(double $price) Return Housecategory objects filtered by the price column
 * @method     array findByDeleted(boolean $deleted) Return Housecategory objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Housecategory objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Housecategory objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Housecategory objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Housecategory objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Housecategory objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Housecategory objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Housecategory objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Housecategory objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Housecategory objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseHousecategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseHousecategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Housecategory', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new HousecategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    HousecategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof HousecategoryQuery) {
			return $criteria;
		}
		$query = new HousecategoryQuery();
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
	 * @return    Housecategory|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = HousecategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(HousecategoryPeer::HOUSECATCODE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(HousecategoryPeer::HOUSECATCODE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the housecatcode column
	 * 
	 * @param     int|array $housecatcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByHousecatcode($housecatcode = null, $comparison = null)
	{
		if (is_array($housecatcode) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(HousecategoryPeer::HOUSECATCODE, $housecatcode, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(HousecategoryPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the price column
	 * 
	 * @param     double|array $price The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(HousecategoryPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(HousecategoryPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::PRICE, $price, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(HousecategoryPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(HousecategoryPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(HousecategoryPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(HousecategoryPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(HousecategoryPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(HousecategoryPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(HousecategoryPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(HousecategoryPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(HousecategoryPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(HousecategoryPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(HousecategoryPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(HousecategoryPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(HousecategoryPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HousecategoryPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Projectdetails object
	 *
	 * @param     Projectdetails $projectdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function filterByProjectdetails($projectdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(HousecategoryPeer::HOUSECATCODE, $projectdetails->getHousecatcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Projectdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Housecategory $housecategory Object to remove from the list of results
	 *
	 * @return    HousecategoryQuery The current query, for fluid interface
	 */
	public function prune($housecategory = null)
	{
		if ($housecategory) {
			$this->addUsingAlias(HousecategoryPeer::HOUSECATCODE, $housecategory->getHousecatcode(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseHousecategoryQuery
