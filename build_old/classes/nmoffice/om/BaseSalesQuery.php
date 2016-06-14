<?php


/**
 * Base class that represents a query for the 'sales' table.
 *
 * house sales of projects
 *
 * @method     SalesQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method     SalesQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method     SalesQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method     SalesQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method     SalesQuery orderByBlockrefnumber($order = Criteria::ASC) Order by the blockrefnumber column
 * @method     SalesQuery orderByPayplanrefno($order = Criteria::ASC) Order by the payplanrefno column
 * @method     SalesQuery orderByNofinstallments($order = Criteria::ASC) Order by the nofinstallments column
 * @method     SalesQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     SalesQuery orderByInstallamount($order = Criteria::ASC) Order by the installamount column
 * @method     SalesQuery orderByTotalpayable($order = Criteria::ASC) Order by the totalpayable column
 * @method     SalesQuery orderByPaymentduedate($order = Criteria::ASC) Order by the paymentduedate column
 * @method     SalesQuery orderByAgrementstartdate($order = Criteria::ASC) Order by the agrementstartdate column
 * @method     SalesQuery orderByAgrementfinishdate($order = Criteria::ASC) Order by the agrementfinishdate column
 * @method     SalesQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     SalesQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     SalesQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     SalesQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     SalesQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     SalesQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     SalesQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     SalesQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     SalesQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     SalesQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     SalesQuery groupByRefno() Group by the refno column
 * @method     SalesQuery groupByCustomercode() Group by the customercode column
 * @method     SalesQuery groupByLocationcode() Group by the locationcode column
 * @method     SalesQuery groupByProjectcode() Group by the projectcode column
 * @method     SalesQuery groupByBlockrefnumber() Group by the blockrefnumber column
 * @method     SalesQuery groupByPayplanrefno() Group by the payplanrefno column
 * @method     SalesQuery groupByNofinstallments() Group by the nofinstallments column
 * @method     SalesQuery groupByDescription() Group by the description column
 * @method     SalesQuery groupByInstallamount() Group by the installamount column
 * @method     SalesQuery groupByTotalpayable() Group by the totalpayable column
 * @method     SalesQuery groupByPaymentduedate() Group by the paymentduedate column
 * @method     SalesQuery groupByAgrementstartdate() Group by the agrementstartdate column
 * @method     SalesQuery groupByAgrementfinishdate() Group by the agrementfinishdate column
 * @method     SalesQuery groupByDeleted() Group by the deleted column
 * @method     SalesQuery groupByAddedby() Group by the addedby column
 * @method     SalesQuery groupByAddeddate() Group by the addeddate column
 * @method     SalesQuery groupByAddedtime() Group by the addedtime column
 * @method     SalesQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     SalesQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     SalesQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     SalesQuery groupByDeletedby() Group by the deletedby column
 * @method     SalesQuery groupByDeleteddate() Group by the deleteddate column
 * @method     SalesQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     SalesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SalesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SalesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SalesQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method     SalesQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method     SalesQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method     SalesQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method     SalesQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method     SalesQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method     SalesQuery leftJoinPaymentplan($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paymentplan relation
 * @method     SalesQuery rightJoinPaymentplan($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paymentplan relation
 * @method     SalesQuery innerJoinPaymentplan($relationAlias = null) Adds a INNER JOIN clause to the query using the Paymentplan relation
 *
 * @method     SalesQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method     SalesQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method     SalesQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method     SalesQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method     SalesQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method     SalesQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method     Sales findOne(PropelPDO $con = null) Return the first Sales matching the query
 * @method     Sales findOneOrCreate(PropelPDO $con = null) Return the first Sales matching the query, or a new Sales object populated from the query conditions when no match is found
 *
 * @method     Sales findOneByRefno(int $refno) Return the first Sales filtered by the refno column
 * @method     Sales findOneByCustomercode(int $customercode) Return the first Sales filtered by the customercode column
 * @method     Sales findOneByLocationcode(int $locationcode) Return the first Sales filtered by the locationcode column
 * @method     Sales findOneByProjectcode(int $projectcode) Return the first Sales filtered by the projectcode column
 * @method     Sales findOneByBlockrefnumber(int $blockrefnumber) Return the first Sales filtered by the blockrefnumber column
 * @method     Sales findOneByPayplanrefno(int $payplanrefno) Return the first Sales filtered by the payplanrefno column
 * @method     Sales findOneByNofinstallments(int $nofinstallments) Return the first Sales filtered by the nofinstallments column
 * @method     Sales findOneByDescription(string $description) Return the first Sales filtered by the description column
 * @method     Sales findOneByInstallamount(double $installamount) Return the first Sales filtered by the installamount column
 * @method     Sales findOneByTotalpayable(double $totalpayable) Return the first Sales filtered by the totalpayable column
 * @method     Sales findOneByPaymentduedate(int $paymentduedate) Return the first Sales filtered by the paymentduedate column
 * @method     Sales findOneByAgrementstartdate(string $agrementstartdate) Return the first Sales filtered by the agrementstartdate column
 * @method     Sales findOneByAgrementfinishdate(string $agrementfinishdate) Return the first Sales filtered by the agrementfinishdate column
 * @method     Sales findOneByDeleted(boolean $deleted) Return the first Sales filtered by the deleted column
 * @method     Sales findOneByAddedby(int $addedby) Return the first Sales filtered by the addedby column
 * @method     Sales findOneByAddeddate(string $addeddate) Return the first Sales filtered by the addeddate column
 * @method     Sales findOneByAddedtime(string $addedtime) Return the first Sales filtered by the addedtime column
 * @method     Sales findOneByLastmodifiedby(int $lastmodifiedby) Return the first Sales filtered by the lastmodifiedby column
 * @method     Sales findOneByLastmodifieddate(string $lastmodifieddate) Return the first Sales filtered by the lastmodifieddate column
 * @method     Sales findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Sales filtered by the lastmodifiedtime column
 * @method     Sales findOneByDeletedby(int $deletedby) Return the first Sales filtered by the deletedby column
 * @method     Sales findOneByDeleteddate(string $deleteddate) Return the first Sales filtered by the deleteddate column
 * @method     Sales findOneByDeletedtime(string $deletedtime) Return the first Sales filtered by the deletedtime column
 *
 * @method     array findByRefno(int $refno) Return Sales objects filtered by the refno column
 * @method     array findByCustomercode(int $customercode) Return Sales objects filtered by the customercode column
 * @method     array findByLocationcode(int $locationcode) Return Sales objects filtered by the locationcode column
 * @method     array findByProjectcode(int $projectcode) Return Sales objects filtered by the projectcode column
 * @method     array findByBlockrefnumber(int $blockrefnumber) Return Sales objects filtered by the blockrefnumber column
 * @method     array findByPayplanrefno(int $payplanrefno) Return Sales objects filtered by the payplanrefno column
 * @method     array findByNofinstallments(int $nofinstallments) Return Sales objects filtered by the nofinstallments column
 * @method     array findByDescription(string $description) Return Sales objects filtered by the description column
 * @method     array findByInstallamount(double $installamount) Return Sales objects filtered by the installamount column
 * @method     array findByTotalpayable(double $totalpayable) Return Sales objects filtered by the totalpayable column
 * @method     array findByPaymentduedate(int $paymentduedate) Return Sales objects filtered by the paymentduedate column
 * @method     array findByAgrementstartdate(string $agrementstartdate) Return Sales objects filtered by the agrementstartdate column
 * @method     array findByAgrementfinishdate(string $agrementfinishdate) Return Sales objects filtered by the agrementfinishdate column
 * @method     array findByDeleted(boolean $deleted) Return Sales objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Sales objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Sales objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Sales objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Sales objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Sales objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Sales objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Sales objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Sales objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Sales objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseSalesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSalesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Sales', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SalesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SalesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SalesQuery) {
			return $criteria;
		}
		$query = new SalesQuery();
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
	 * @return    Sales|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SalesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SalesPeer::REFNO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SalesPeer::REFNO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the refno column
	 * 
	 * @param     int|array $refno The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByRefno($refno = null, $comparison = null)
	{
		if (is_array($refno) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SalesPeer::REFNO, $refno, $comparison);
	}

	/**
	 * Filter the query on the customercode column
	 * 
	 * @param     int|array $customercode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByCustomercode($customercode = null, $comparison = null)
	{
		if (is_array($customercode)) {
			$useMinMax = false;
			if (isset($customercode['min'])) {
				$this->addUsingAlias(SalesPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($customercode['max'])) {
				$this->addUsingAlias(SalesPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::CUSTOMERCODE, $customercode, $comparison);
	}

	/**
	 * Filter the query on the locationcode column
	 * 
	 * @param     int|array $locationcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByLocationcode($locationcode = null, $comparison = null)
	{
		if (is_array($locationcode)) {
			$useMinMax = false;
			if (isset($locationcode['min'])) {
				$this->addUsingAlias(SalesPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locationcode['max'])) {
				$this->addUsingAlias(SalesPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::LOCATIONCODE, $locationcode, $comparison);
	}

	/**
	 * Filter the query on the projectcode column
	 * 
	 * @param     int|array $projectcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByProjectcode($projectcode = null, $comparison = null)
	{
		if (is_array($projectcode)) {
			$useMinMax = false;
			if (isset($projectcode['min'])) {
				$this->addUsingAlias(SalesPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($projectcode['max'])) {
				$this->addUsingAlias(SalesPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::PROJECTCODE, $projectcode, $comparison);
	}

	/**
	 * Filter the query on the blockrefnumber column
	 * 
	 * @param     int|array $blockrefnumber The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByBlockrefnumber($blockrefnumber = null, $comparison = null)
	{
		if (is_array($blockrefnumber)) {
			$useMinMax = false;
			if (isset($blockrefnumber['min'])) {
				$this->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $blockrefnumber['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blockrefnumber['max'])) {
				$this->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $blockrefnumber['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $blockrefnumber, $comparison);
	}

	/**
	 * Filter the query on the payplanrefno column
	 * 
	 * @param     int|array $payplanrefno The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPayplanrefno($payplanrefno = null, $comparison = null)
	{
		if (is_array($payplanrefno)) {
			$useMinMax = false;
			if (isset($payplanrefno['min'])) {
				$this->addUsingAlias(SalesPeer::PAYPLANREFNO, $payplanrefno['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($payplanrefno['max'])) {
				$this->addUsingAlias(SalesPeer::PAYPLANREFNO, $payplanrefno['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::PAYPLANREFNO, $payplanrefno, $comparison);
	}

	/**
	 * Filter the query on the nofinstallments column
	 * 
	 * @param     int|array $nofinstallments The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByNofinstallments($nofinstallments = null, $comparison = null)
	{
		if (is_array($nofinstallments)) {
			$useMinMax = false;
			if (isset($nofinstallments['min'])) {
				$this->addUsingAlias(SalesPeer::NOFINSTALLMENTS, $nofinstallments['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nofinstallments['max'])) {
				$this->addUsingAlias(SalesPeer::NOFINSTALLMENTS, $nofinstallments['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::NOFINSTALLMENTS, $nofinstallments, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SalesPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the installamount column
	 * 
	 * @param     double|array $installamount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByInstallamount($installamount = null, $comparison = null)
	{
		if (is_array($installamount)) {
			$useMinMax = false;
			if (isset($installamount['min'])) {
				$this->addUsingAlias(SalesPeer::INSTALLAMOUNT, $installamount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($installamount['max'])) {
				$this->addUsingAlias(SalesPeer::INSTALLAMOUNT, $installamount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::INSTALLAMOUNT, $installamount, $comparison);
	}

	/**
	 * Filter the query on the totalpayable column
	 * 
	 * @param     double|array $totalpayable The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByTotalpayable($totalpayable = null, $comparison = null)
	{
		if (is_array($totalpayable)) {
			$useMinMax = false;
			if (isset($totalpayable['min'])) {
				$this->addUsingAlias(SalesPeer::TOTALPAYABLE, $totalpayable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalpayable['max'])) {
				$this->addUsingAlias(SalesPeer::TOTALPAYABLE, $totalpayable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::TOTALPAYABLE, $totalpayable, $comparison);
	}

	/**
	 * Filter the query on the paymentduedate column
	 * 
	 * @param     int|array $paymentduedate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPaymentduedate($paymentduedate = null, $comparison = null)
	{
		if (is_array($paymentduedate)) {
			$useMinMax = false;
			if (isset($paymentduedate['min'])) {
				$this->addUsingAlias(SalesPeer::PAYMENTDUEDATE, $paymentduedate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($paymentduedate['max'])) {
				$this->addUsingAlias(SalesPeer::PAYMENTDUEDATE, $paymentduedate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::PAYMENTDUEDATE, $paymentduedate, $comparison);
	}

	/**
	 * Filter the query on the agrementstartdate column
	 * 
	 * @param     string|array $agrementstartdate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByAgrementstartdate($agrementstartdate = null, $comparison = null)
	{
		if (is_array($agrementstartdate)) {
			$useMinMax = false;
			if (isset($agrementstartdate['min'])) {
				$this->addUsingAlias(SalesPeer::AGREMENTSTARTDATE, $agrementstartdate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($agrementstartdate['max'])) {
				$this->addUsingAlias(SalesPeer::AGREMENTSTARTDATE, $agrementstartdate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::AGREMENTSTARTDATE, $agrementstartdate, $comparison);
	}

	/**
	 * Filter the query on the agrementfinishdate column
	 * 
	 * @param     string|array $agrementfinishdate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByAgrementfinishdate($agrementfinishdate = null, $comparison = null)
	{
		if (is_array($agrementfinishdate)) {
			$useMinMax = false;
			if (isset($agrementfinishdate['min'])) {
				$this->addUsingAlias(SalesPeer::AGREMENTFINISHDATE, $agrementfinishdate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($agrementfinishdate['max'])) {
				$this->addUsingAlias(SalesPeer::AGREMENTFINISHDATE, $agrementfinishdate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::AGREMENTFINISHDATE, $agrementfinishdate, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(SalesPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(SalesPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(SalesPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(SalesPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(SalesPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(SalesPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(SalesPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(SalesPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(SalesPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(SalesPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(SalesPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(SalesPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(SalesPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(SalesPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(SalesPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(SalesPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(SalesPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(SalesPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(SalesPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Customerdetails object
	 *
	 * @param     Customerdetails $customerdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByCustomerdetails($customerdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(SalesPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Customerdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SalesQuery The current query, for fluid interface
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
	 * Filter the query by a related Projectdetails object
	 *
	 * @param     Projectdetails $projectdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByProjectdetails($projectdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(SalesPeer::BLOCKREFNUMBER, $projectdetails->getRefno(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Projectdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SalesQuery The current query, for fluid interface
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
	 * Filter the query by a related Paymentplan object
	 *
	 * @param     Paymentplan $paymentplan  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPaymentplan($paymentplan, $comparison = null)
	{
		return $this
			->addUsingAlias(SalesPeer::PAYPLANREFNO, $paymentplan->getRefno(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Paymentplan relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SalesQuery The current query, for fluid interface
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
	 * Filter the query by a related Project object
	 *
	 * @param     Project $project  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByProject($project, $comparison = null)
	{
		return $this
			->addUsingAlias(SalesPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Project relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SalesQuery The current query, for fluid interface
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
	 * Filter the query by a related Location object
	 *
	 * @param     Location $location  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByLocation($location, $comparison = null)
	{
		return $this
			->addUsingAlias(SalesPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Location relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SalesQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Sales $sales Object to remove from the list of results
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function prune($sales = null)
	{
		if ($sales) {
			$this->addUsingAlias(SalesPeer::REFNO, $sales->getRefno(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSalesQuery
