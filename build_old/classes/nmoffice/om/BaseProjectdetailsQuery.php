<?php


/**
 * Base class that represents a query for the 'projectdetails' table.
 *
 * project details
 *
 * @method     ProjectdetailsQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method     ProjectdetailsQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method     ProjectdetailsQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method     ProjectdetailsQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method     ProjectdetailsQuery orderByHousecatcode($order = Criteria::ASC) Order by the housecatcode column
 * @method     ProjectdetailsQuery orderByBlocknumber($order = Criteria::ASC) Order by the blocknumber column
 * @method     ProjectdetailsQuery orderByBlocksize($order = Criteria::ASC) Order by the blocksize column
 * @method     ProjectdetailsQuery orderByBlockprice($order = Criteria::ASC) Order by the blockprice column
 * @method     ProjectdetailsQuery orderByReservedate($order = Criteria::ASC) Order by the reservedate column
 * @method     ProjectdetailsQuery orderByReservestatus($order = Criteria::ASC) Order by the reservestatus column
 * @method     ProjectdetailsQuery orderByPaymentmethod($order = Criteria::ASC) Order by the paymentmethod column
 * @method     ProjectdetailsQuery orderByDuedate($order = Criteria::ASC) Order by the duedate column
 * @method     ProjectdetailsQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     ProjectdetailsQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     ProjectdetailsQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     ProjectdetailsQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     ProjectdetailsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     ProjectdetailsQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     ProjectdetailsQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     ProjectdetailsQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     ProjectdetailsQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     ProjectdetailsQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     ProjectdetailsQuery groupByRefno() Group by the refno column
 * @method     ProjectdetailsQuery groupByLocationcode() Group by the locationcode column
 * @method     ProjectdetailsQuery groupByProjectcode() Group by the projectcode column
 * @method     ProjectdetailsQuery groupByCustomercode() Group by the customercode column
 * @method     ProjectdetailsQuery groupByHousecatcode() Group by the housecatcode column
 * @method     ProjectdetailsQuery groupByBlocknumber() Group by the blocknumber column
 * @method     ProjectdetailsQuery groupByBlocksize() Group by the blocksize column
 * @method     ProjectdetailsQuery groupByBlockprice() Group by the blockprice column
 * @method     ProjectdetailsQuery groupByReservedate() Group by the reservedate column
 * @method     ProjectdetailsQuery groupByReservestatus() Group by the reservestatus column
 * @method     ProjectdetailsQuery groupByPaymentmethod() Group by the paymentmethod column
 * @method     ProjectdetailsQuery groupByDuedate() Group by the duedate column
 * @method     ProjectdetailsQuery groupByDeleted() Group by the deleted column
 * @method     ProjectdetailsQuery groupByAddedby() Group by the addedby column
 * @method     ProjectdetailsQuery groupByAddeddate() Group by the addeddate column
 * @method     ProjectdetailsQuery groupByAddedtime() Group by the addedtime column
 * @method     ProjectdetailsQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     ProjectdetailsQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     ProjectdetailsQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     ProjectdetailsQuery groupByDeletedby() Group by the deletedby column
 * @method     ProjectdetailsQuery groupByDeleteddate() Group by the deleteddate column
 * @method     ProjectdetailsQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     ProjectdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProjectdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProjectdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProjectdetailsQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method     ProjectdetailsQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method     ProjectdetailsQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method     ProjectdetailsQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method     ProjectdetailsQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method     ProjectdetailsQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method     ProjectdetailsQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method     ProjectdetailsQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method     ProjectdetailsQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method     ProjectdetailsQuery leftJoinHousecategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Housecategory relation
 * @method     ProjectdetailsQuery rightJoinHousecategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Housecategory relation
 * @method     ProjectdetailsQuery innerJoinHousecategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Housecategory relation
 *
 * @method     ProjectdetailsQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method     ProjectdetailsQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method     ProjectdetailsQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method     Projectdetails findOne(PropelPDO $con = null) Return the first Projectdetails matching the query
 * @method     Projectdetails findOneOrCreate(PropelPDO $con = null) Return the first Projectdetails matching the query, or a new Projectdetails object populated from the query conditions when no match is found
 *
 * @method     Projectdetails findOneByRefno(int $refno) Return the first Projectdetails filtered by the refno column
 * @method     Projectdetails findOneByLocationcode(int $locationcode) Return the first Projectdetails filtered by the locationcode column
 * @method     Projectdetails findOneByProjectcode(int $projectcode) Return the first Projectdetails filtered by the projectcode column
 * @method     Projectdetails findOneByCustomercode(int $customercode) Return the first Projectdetails filtered by the customercode column
 * @method     Projectdetails findOneByHousecatcode(int $housecatcode) Return the first Projectdetails filtered by the housecatcode column
 * @method     Projectdetails findOneByBlocknumber(string $blocknumber) Return the first Projectdetails filtered by the blocknumber column
 * @method     Projectdetails findOneByBlocksize(double $blocksize) Return the first Projectdetails filtered by the blocksize column
 * @method     Projectdetails findOneByBlockprice(double $blockprice) Return the first Projectdetails filtered by the blockprice column
 * @method     Projectdetails findOneByReservedate(string $reservedate) Return the first Projectdetails filtered by the reservedate column
 * @method     Projectdetails findOneByReservestatus(int $reservestatus) Return the first Projectdetails filtered by the reservestatus column
 * @method     Projectdetails findOneByPaymentmethod(int $paymentmethod) Return the first Projectdetails filtered by the paymentmethod column
 * @method     Projectdetails findOneByDuedate(string $duedate) Return the first Projectdetails filtered by the duedate column
 * @method     Projectdetails findOneByDeleted(boolean $deleted) Return the first Projectdetails filtered by the deleted column
 * @method     Projectdetails findOneByAddedby(int $addedby) Return the first Projectdetails filtered by the addedby column
 * @method     Projectdetails findOneByAddeddate(string $addeddate) Return the first Projectdetails filtered by the addeddate column
 * @method     Projectdetails findOneByAddedtime(string $addedtime) Return the first Projectdetails filtered by the addedtime column
 * @method     Projectdetails findOneByLastmodifiedby(int $lastmodifiedby) Return the first Projectdetails filtered by the lastmodifiedby column
 * @method     Projectdetails findOneByLastmodifieddate(string $lastmodifieddate) Return the first Projectdetails filtered by the lastmodifieddate column
 * @method     Projectdetails findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Projectdetails filtered by the lastmodifiedtime column
 * @method     Projectdetails findOneByDeletedby(int $deletedby) Return the first Projectdetails filtered by the deletedby column
 * @method     Projectdetails findOneByDeleteddate(string $deleteddate) Return the first Projectdetails filtered by the deleteddate column
 * @method     Projectdetails findOneByDeletedtime(string $deletedtime) Return the first Projectdetails filtered by the deletedtime column
 *
 * @method     array findByRefno(int $refno) Return Projectdetails objects filtered by the refno column
 * @method     array findByLocationcode(int $locationcode) Return Projectdetails objects filtered by the locationcode column
 * @method     array findByProjectcode(int $projectcode) Return Projectdetails objects filtered by the projectcode column
 * @method     array findByCustomercode(int $customercode) Return Projectdetails objects filtered by the customercode column
 * @method     array findByHousecatcode(int $housecatcode) Return Projectdetails objects filtered by the housecatcode column
 * @method     array findByBlocknumber(string $blocknumber) Return Projectdetails objects filtered by the blocknumber column
 * @method     array findByBlocksize(double $blocksize) Return Projectdetails objects filtered by the blocksize column
 * @method     array findByBlockprice(double $blockprice) Return Projectdetails objects filtered by the blockprice column
 * @method     array findByReservedate(string $reservedate) Return Projectdetails objects filtered by the reservedate column
 * @method     array findByReservestatus(int $reservestatus) Return Projectdetails objects filtered by the reservestatus column
 * @method     array findByPaymentmethod(int $paymentmethod) Return Projectdetails objects filtered by the paymentmethod column
 * @method     array findByDuedate(string $duedate) Return Projectdetails objects filtered by the duedate column
 * @method     array findByDeleted(boolean $deleted) Return Projectdetails objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Projectdetails objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Projectdetails objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Projectdetails objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Projectdetails objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Projectdetails objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Projectdetails objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Projectdetails objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Projectdetails objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Projectdetails objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseProjectdetailsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseProjectdetailsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Projectdetails', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ProjectdetailsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProjectdetailsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProjectdetailsQuery) {
			return $criteria;
		}
		$query = new ProjectdetailsQuery();
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
	 * @return    Projectdetails|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ProjectdetailsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ProjectdetailsPeer::REFNO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ProjectdetailsPeer::REFNO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the refno column
	 * 
	 * @param     int|array $refno The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByRefno($refno = null, $comparison = null)
	{
		if (is_array($refno) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ProjectdetailsPeer::REFNO, $refno, $comparison);
	}

	/**
	 * Filter the query on the locationcode column
	 * 
	 * @param     int|array $locationcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByLocationcode($locationcode = null, $comparison = null)
	{
		if (is_array($locationcode)) {
			$useMinMax = false;
			if (isset($locationcode['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locationcode['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $locationcode, $comparison);
	}

	/**
	 * Filter the query on the projectcode column
	 * 
	 * @param     int|array $projectcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByProjectcode($projectcode = null, $comparison = null)
	{
		if (is_array($projectcode)) {
			$useMinMax = false;
			if (isset($projectcode['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($projectcode['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $projectcode, $comparison);
	}

	/**
	 * Filter the query on the customercode column
	 * 
	 * @param     int|array $customercode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByCustomercode($customercode = null, $comparison = null)
	{
		if (is_array($customercode)) {
			$useMinMax = false;
			if (isset($customercode['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($customercode['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customercode, $comparison);
	}

	/**
	 * Filter the query on the housecatcode column
	 * 
	 * @param     int|array $housecatcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByHousecatcode($housecatcode = null, $comparison = null)
	{
		if (is_array($housecatcode)) {
			$useMinMax = false;
			if (isset($housecatcode['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecatcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($housecatcode['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecatcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecatcode, $comparison);
	}

	/**
	 * Filter the query on the blocknumber column
	 * 
	 * @param     string $blocknumber The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByBlocknumber($blocknumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($blocknumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $blocknumber)) {
				$blocknumber = str_replace('*', '%', $blocknumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::BLOCKNUMBER, $blocknumber, $comparison);
	}

	/**
	 * Filter the query on the blocksize column
	 * 
	 * @param     double|array $blocksize The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByBlocksize($blocksize = null, $comparison = null)
	{
		if (is_array($blocksize)) {
			$useMinMax = false;
			if (isset($blocksize['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::BLOCKSIZE, $blocksize['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blocksize['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::BLOCKSIZE, $blocksize['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::BLOCKSIZE, $blocksize, $comparison);
	}

	/**
	 * Filter the query on the blockprice column
	 * 
	 * @param     double|array $blockprice The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByBlockprice($blockprice = null, $comparison = null)
	{
		if (is_array($blockprice)) {
			$useMinMax = false;
			if (isset($blockprice['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::BLOCKPRICE, $blockprice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blockprice['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::BLOCKPRICE, $blockprice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::BLOCKPRICE, $blockprice, $comparison);
	}

	/**
	 * Filter the query on the reservedate column
	 * 
	 * @param     string|array $reservedate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByReservedate($reservedate = null, $comparison = null)
	{
		if (is_array($reservedate)) {
			$useMinMax = false;
			if (isset($reservedate['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::RESERVEDATE, $reservedate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reservedate['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::RESERVEDATE, $reservedate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::RESERVEDATE, $reservedate, $comparison);
	}

	/**
	 * Filter the query on the reservestatus column
	 * 
	 * @param     int|array $reservestatus The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByReservestatus($reservestatus = null, $comparison = null)
	{
		if (is_array($reservestatus)) {
			$useMinMax = false;
			if (isset($reservestatus['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::RESERVESTATUS, $reservestatus['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($reservestatus['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::RESERVESTATUS, $reservestatus['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::RESERVESTATUS, $reservestatus, $comparison);
	}

	/**
	 * Filter the query on the paymentmethod column
	 * 
	 * @param     int|array $paymentmethod The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByPaymentmethod($paymentmethod = null, $comparison = null)
	{
		if (is_array($paymentmethod)) {
			$useMinMax = false;
			if (isset($paymentmethod['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::PAYMENTMETHOD, $paymentmethod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($paymentmethod['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::PAYMENTMETHOD, $paymentmethod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::PAYMENTMETHOD, $paymentmethod, $comparison);
	}

	/**
	 * Filter the query on the duedate column
	 * 
	 * @param     string|array $duedate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByDuedate($duedate = null, $comparison = null)
	{
		if (is_array($duedate)) {
			$useMinMax = false;
			if (isset($duedate['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DUEDATE, $duedate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($duedate['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DUEDATE, $duedate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::DUEDATE, $duedate, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(ProjectdetailsPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(ProjectdetailsPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProjectdetailsPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Location object
	 *
	 * @param     Location $location  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByLocation($location, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectdetailsPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Location relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
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
	 * Filter the query by a related Project object
	 *
	 * @param     Project $project  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByProject($project, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectdetailsPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Project relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
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
	 * Filter the query by a related Customerdetails object
	 *
	 * @param     Customerdetails $customerdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByCustomerdetails($customerdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectdetailsPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Customerdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function joinCustomerdetails($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Customerdetails');
		
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
			$this->addJoinObject($join, 'Customerdetails');
		}
		
		return $this;
	}

	/**
	 * Use the Customerdetails relation Customerdetails object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerdetailsQuery A secondary query class using the current class as primary query
	 */
	public function useCustomerdetailsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCustomerdetails($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Customerdetails', 'CustomerdetailsQuery');
	}

	/**
	 * Filter the query by a related Housecategory object
	 *
	 * @param     Housecategory $housecategory  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterByHousecategory($housecategory, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectdetailsPeer::HOUSECATCODE, $housecategory->getHousecatcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Housecategory relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function joinHousecategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Housecategory');
		
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
			$this->addJoinObject($join, 'Housecategory');
		}
		
		return $this;
	}

	/**
	 * Use the Housecategory relation Housecategory object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HousecategoryQuery A secondary query class using the current class as primary query
	 */
	public function useHousecategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinHousecategory($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Housecategory', 'HousecategoryQuery');
	}

	/**
	 * Filter the query by a related Sales object
	 *
	 * @param     Sales $sales  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function filterBySales($sales, $comparison = null)
	{
		return $this
			->addUsingAlias(ProjectdetailsPeer::REFNO, $sales->getBlockrefnumber(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sales relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
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
	 * @param     Projectdetails $projectdetails Object to remove from the list of results
	 *
	 * @return    ProjectdetailsQuery The current query, for fluid interface
	 */
	public function prune($projectdetails = null)
	{
		if ($projectdetails) {
			$this->addUsingAlias(ProjectdetailsPeer::REFNO, $projectdetails->getRefno(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseProjectdetailsQuery
