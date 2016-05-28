<?php


/**
 * Base class that represents a query for the 'project' table.
 *
 * projects
 *
 * @method     ProjectQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method     ProjectQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method     ProjectQuery orderByProjectname($order = Criteria::ASC) Order by the projectname column
 * @method     ProjectQuery orderByNofblocks($order = Criteria::ASC) Order by the nofblocks column
 * @method     ProjectQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     ProjectQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     ProjectQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     ProjectQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     ProjectQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     ProjectQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     ProjectQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     ProjectQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     ProjectQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     ProjectQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     ProjectQuery groupByProjectcode() Group by the projectcode column
 * @method     ProjectQuery groupByLocationcode() Group by the locationcode column
 * @method     ProjectQuery groupByProjectname() Group by the projectname column
 * @method     ProjectQuery groupByNofblocks() Group by the nofblocks column
 * @method     ProjectQuery groupByDeleted() Group by the deleted column
 * @method     ProjectQuery groupByAddedby() Group by the addedby column
 * @method     ProjectQuery groupByAddeddate() Group by the addeddate column
 * @method     ProjectQuery groupByAddedtime() Group by the addedtime column
 * @method     ProjectQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     ProjectQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     ProjectQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     ProjectQuery groupByDeletedby() Group by the deletedby column
 * @method     ProjectQuery groupByDeleteddate() Group by the deleteddate column
 * @method     ProjectQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     ProjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProjectQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method     ProjectQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method     ProjectQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method     ProjectQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method     ProjectQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method     ProjectQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method     ProjectQuery leftJoinCustomerreceipts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerreceipts relation
 * @method     ProjectQuery rightJoinCustomerreceipts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerreceipts relation
 * @method     ProjectQuery innerJoinCustomerreceipts($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerreceipts relation
 *
 * @method     ProjectQuery leftJoinPaymentplan($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paymentplan relation
 * @method     ProjectQuery rightJoinPaymentplan($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paymentplan relation
 * @method     ProjectQuery innerJoinPaymentplan($relationAlias = null) Adds a INNER JOIN clause to the query using the Paymentplan relation
 *
 * @method     ProjectQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method     ProjectQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method     ProjectQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method     Project findOne(PropelPDO $con = null) Return the first Project matching the query
 * @method     Project findOneOrCreate(PropelPDO $con = null) Return the first Project matching the query, or a new Project object populated from the query conditions when no match is found
 *
 * @method     Project findOneByProjectcode(int $projectcode) Return the first Project filtered by the projectcode column
 * @method     Project findOneByLocationcode(int $locationcode) Return the first Project filtered by the locationcode column
 * @method     Project findOneByProjectname(string $projectname) Return the first Project filtered by the projectname column
 * @method     Project findOneByNofblocks(int $nofblocks) Return the first Project filtered by the nofblocks column
 * @method     Project findOneByDeleted(boolean $deleted) Return the first Project filtered by the deleted column
 * @method     Project findOneByAddedby(int $addedby) Return the first Project filtered by the addedby column
 * @method     Project findOneByAddeddate(string $addeddate) Return the first Project filtered by the addeddate column
 * @method     Project findOneByAddedtime(string $addedtime) Return the first Project filtered by the addedtime column
 * @method     Project findOneByLastmodifiedby(int $lastmodifiedby) Return the first Project filtered by the lastmodifiedby column
 * @method     Project findOneByLastmodifieddate(string $lastmodifieddate) Return the first Project filtered by the lastmodifieddate column
 * @method     Project findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Project filtered by the lastmodifiedtime column
 * @method     Project findOneByDeletedby(int $deletedby) Return the first Project filtered by the deletedby column
 * @method     Project findOneByDeleteddate(string $deleteddate) Return the first Project filtered by the deleteddate column
 * @method     Project findOneByDeletedtime(string $deletedtime) Return the first Project filtered by the deletedtime column
 *
 * @method     array findByProjectcode(int $projectcode) Return Project objects filtered by the projectcode column
 * @method     array findByLocationcode(int $locationcode) Return Project objects filtered by the locationcode column
 * @method     array findByProjectname(string $projectname) Return Project objects filtered by the projectname column
 * @method     array findByNofblocks(int $nofblocks) Return Project objects filtered by the nofblocks column
 * @method     array findByDeleted(boolean $deleted) Return Project objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Project objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Project objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Project objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Project objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Project objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Project objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Project objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Project objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Project objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseProjectQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseProjectQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Project', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ProjectQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProjectQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProjectQuery) {
			return $criteria;
		}
		$query = new ProjectQuery();
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
	 * @return    Project|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ProjectPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ProjectPeer::PROJECTCODE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ProjectPeer::PROJECTCODE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the projectcode column
	 * 
	 * @param     int|array $projectcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByProjectcode($projectcode = null, $comparison = null)
	{
		if (is_array($projectcode) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ProjectPeer::PROJECTCODE, $projectcode, $comparison);
	}

	/**
	 * Filter the query on the locationcode column
	 * 
	 * @param     int|array $locationcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByLocationcode($locationcode = null, $comparison = null)
	{
		if (is_array($locationcode)) {
			$useMinMax = false;
			if (isset($locationcode['min'])) {
				$this->addUsingAlias(ProjectPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locationcode['max'])) {
				$this->addUsingAlias(ProjectPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::LOCATIONCODE, $locationcode, $comparison);
	}

	/**
	 * Filter the query on the projectname column
	 * 
	 * @param     string $projectname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByProjectname($projectname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($projectname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $projectname)) {
				$projectname = str_replace('*', '%', $projectname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProjectPeer::PROJECTNAME, $projectname, $comparison);
	}

	/**
	 * Filter the query on the nofblocks column
	 * 
	 * @param     int|array $nofblocks The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByNofblocks($nofblocks = null, $comparison = null)
	{
		if (is_array($nofblocks)) {
			$useMinMax = false;
			if (isset($nofblocks['min'])) {
				$this->addUsingAlias(ProjectPeer::NOFBLOCKS, $nofblocks['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nofblocks['max'])) {
				$this->addUsingAlias(ProjectPeer::NOFBLOCKS, $nofblocks['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::NOFBLOCKS, $nofblocks, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(ProjectPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(ProjectPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(ProjectPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(ProjectPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(ProjectPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(ProjectPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(ProjectPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(ProjectPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(ProjectPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(ProjectPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(ProjectPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(ProjectPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(ProjectPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(ProjectPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(ProjectPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(ProjectPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(ProjectPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(ProjectPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(ProjectPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Location object
	 *
	 * @param     Location $location  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByLocation($location, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Location relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function joinLocation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Location');
		
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
			$this->addJoinObject($join, 'Location');
		}
		
		return $this;
	}

	/**
	 * Use the Location relation Location object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LocationQuery A secondary query class using the current class as primary query
	 */
	public function useLocationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLocation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Location', 'LocationQuery');
	}

	/**
	 * Filter the query by a related Projectdetails object
	 *
	 * @param     Projectdetails $projectdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByProjectdetails($projectdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectPeer::PROJECTCODE, $projectdetails->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Projectdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectQuery The current query, for fluid interface
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
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByCustomerreceipts($customerreceipts, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectPeer::PROJECTCODE, $customerreceipts->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Customerreceipts relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectQuery The current query, for fluid interface
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
	 * Filter the query by a related Paymentplan object
	 *
	 * @param     Paymentplan $paymentplan  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterByPaymentplan($paymentplan, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectPeer::PROJECTCODE, $paymentplan->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Paymentplan relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function joinPaymentplan($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Paymentplan');
		
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
			$this->addJoinObject($join, 'Paymentplan');
		}
		
		return $this;
	}

	/**
	 * Use the Paymentplan relation Paymentplan object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentplanQuery A secondary query class using the current class as primary query
	 */
	public function usePaymentplanQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPaymentplan($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Paymentplan', 'PaymentplanQuery');
	}

	/**
	 * Filter the query by a related Sales object
	 *
	 * @param     Sales $sales  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function filterBySales($sales, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectPeer::PROJECTCODE, $sales->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sales relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectQuery The current query, for fluid interface
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
	 * @param     Project $project Object to remove from the list of results
	 *
	 * @return    ProjectQuery The current query, for fluid interface
	 */
	public function prune($project = null)
	{
		if ($project) {
			$this->addUsingAlias(ProjectPeer::PROJECTCODE, $project->getProjectcode(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseProjectQuery
