<?php


/**
 * Base class that represents a query for the 'paymentplan' table.
 *
 * payment plans for houses in a project
 *
 * @method     PaymentplanQuery orderByRefno($order = Criteria::ASC) Order by the refno column
 * @method     PaymentplanQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method     PaymentplanQuery orderByNofinstallments($order = Criteria::ASC) Order by the nofinstallments column
 * @method     PaymentplanQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     PaymentplanQuery orderByInstallamount($order = Criteria::ASC) Order by the installamount column
 * @method     PaymentplanQuery orderByTotalpayable($order = Criteria::ASC) Order by the totalpayable column
 * @method     PaymentplanQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     PaymentplanQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     PaymentplanQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     PaymentplanQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     PaymentplanQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     PaymentplanQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     PaymentplanQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     PaymentplanQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     PaymentplanQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     PaymentplanQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     PaymentplanQuery groupByRefno() Group by the refno column
 * @method     PaymentplanQuery groupByProjectcode() Group by the projectcode column
 * @method     PaymentplanQuery groupByNofinstallments() Group by the nofinstallments column
 * @method     PaymentplanQuery groupByDescription() Group by the description column
 * @method     PaymentplanQuery groupByInstallamount() Group by the installamount column
 * @method     PaymentplanQuery groupByTotalpayable() Group by the totalpayable column
 * @method     PaymentplanQuery groupByDeleted() Group by the deleted column
 * @method     PaymentplanQuery groupByAddedby() Group by the addedby column
 * @method     PaymentplanQuery groupByAddeddate() Group by the addeddate column
 * @method     PaymentplanQuery groupByAddedtime() Group by the addedtime column
 * @method     PaymentplanQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     PaymentplanQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     PaymentplanQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     PaymentplanQuery groupByDeletedby() Group by the deletedby column
 * @method     PaymentplanQuery groupByDeleteddate() Group by the deleteddate column
 * @method     PaymentplanQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     PaymentplanQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PaymentplanQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PaymentplanQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PaymentplanQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method     PaymentplanQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method     PaymentplanQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method     PaymentplanQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method     PaymentplanQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method     PaymentplanQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method     Paymentplan findOne(PropelPDO $con = null) Return the first Paymentplan matching the query
 * @method     Paymentplan findOneOrCreate(PropelPDO $con = null) Return the first Paymentplan matching the query, or a new Paymentplan object populated from the query conditions when no match is found
 *
 * @method     Paymentplan findOneByRefno(int $refno) Return the first Paymentplan filtered by the refno column
 * @method     Paymentplan findOneByProjectcode(int $projectcode) Return the first Paymentplan filtered by the projectcode column
 * @method     Paymentplan findOneByNofinstallments(int $nofinstallments) Return the first Paymentplan filtered by the nofinstallments column
 * @method     Paymentplan findOneByDescription(string $description) Return the first Paymentplan filtered by the description column
 * @method     Paymentplan findOneByInstallamount(double $installamount) Return the first Paymentplan filtered by the installamount column
 * @method     Paymentplan findOneByTotalpayable(double $totalpayable) Return the first Paymentplan filtered by the totalpayable column
 * @method     Paymentplan findOneByDeleted(boolean $deleted) Return the first Paymentplan filtered by the deleted column
 * @method     Paymentplan findOneByAddedby(int $addedby) Return the first Paymentplan filtered by the addedby column
 * @method     Paymentplan findOneByAddeddate(string $addeddate) Return the first Paymentplan filtered by the addeddate column
 * @method     Paymentplan findOneByAddedtime(string $addedtime) Return the first Paymentplan filtered by the addedtime column
 * @method     Paymentplan findOneByLastmodifiedby(int $lastmodifiedby) Return the first Paymentplan filtered by the lastmodifiedby column
 * @method     Paymentplan findOneByLastmodifieddate(string $lastmodifieddate) Return the first Paymentplan filtered by the lastmodifieddate column
 * @method     Paymentplan findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Paymentplan filtered by the lastmodifiedtime column
 * @method     Paymentplan findOneByDeletedby(int $deletedby) Return the first Paymentplan filtered by the deletedby column
 * @method     Paymentplan findOneByDeleteddate(string $deleteddate) Return the first Paymentplan filtered by the deleteddate column
 * @method     Paymentplan findOneByDeletedtime(string $deletedtime) Return the first Paymentplan filtered by the deletedtime column
 *
 * @method     array findByRefno(int $refno) Return Paymentplan objects filtered by the refno column
 * @method     array findByProjectcode(int $projectcode) Return Paymentplan objects filtered by the projectcode column
 * @method     array findByNofinstallments(int $nofinstallments) Return Paymentplan objects filtered by the nofinstallments column
 * @method     array findByDescription(string $description) Return Paymentplan objects filtered by the description column
 * @method     array findByInstallamount(double $installamount) Return Paymentplan objects filtered by the installamount column
 * @method     array findByTotalpayable(double $totalpayable) Return Paymentplan objects filtered by the totalpayable column
 * @method     array findByDeleted(boolean $deleted) Return Paymentplan objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Paymentplan objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Paymentplan objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Paymentplan objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Paymentplan objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Paymentplan objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Paymentplan objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Paymentplan objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Paymentplan objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Paymentplan objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BasePaymentplanQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePaymentplanQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Paymentplan', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PaymentplanQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PaymentplanQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PaymentplanQuery) {
			return $criteria;
		}
		$query = new PaymentplanQuery();
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
	 * @return    Paymentplan|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PaymentplanPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PaymentplanPeer::REFNO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PaymentplanPeer::REFNO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the refno column
	 * 
	 * @param     int|array $refno The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByRefno($refno = null, $comparison = null)
	{
		if (is_array($refno) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PaymentplanPeer::REFNO, $refno, $comparison);
	}

	/**
	 * Filter the query on the projectcode column
	 * 
	 * @param     int|array $projectcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByProjectcode($projectcode = null, $comparison = null)
	{
		if (is_array($projectcode)) {
			$useMinMax = false;
			if (isset($projectcode['min'])) {
				$this->addUsingAlias(PaymentplanPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($projectcode['max'])) {
				$this->addUsingAlias(PaymentplanPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::PROJECTCODE, $projectcode, $comparison);
	}

	/**
	 * Filter the query on the nofinstallments column
	 * 
	 * @param     int|array $nofinstallments The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByNofinstallments($nofinstallments = null, $comparison = null)
	{
		if (is_array($nofinstallments)) {
			$useMinMax = false;
			if (isset($nofinstallments['min'])) {
				$this->addUsingAlias(PaymentplanPeer::NOFINSTALLMENTS, $nofinstallments['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($nofinstallments['max'])) {
				$this->addUsingAlias(PaymentplanPeer::NOFINSTALLMENTS, $nofinstallments['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::NOFINSTALLMENTS, $nofinstallments, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentplanPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the installamount column
	 * 
	 * @param     double|array $installamount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByInstallamount($installamount = null, $comparison = null)
	{
		if (is_array($installamount)) {
			$useMinMax = false;
			if (isset($installamount['min'])) {
				$this->addUsingAlias(PaymentplanPeer::INSTALLAMOUNT, $installamount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($installamount['max'])) {
				$this->addUsingAlias(PaymentplanPeer::INSTALLAMOUNT, $installamount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::INSTALLAMOUNT, $installamount, $comparison);
	}

	/**
	 * Filter the query on the totalpayable column
	 * 
	 * @param     double|array $totalpayable The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByTotalpayable($totalpayable = null, $comparison = null)
	{
		if (is_array($totalpayable)) {
			$useMinMax = false;
			if (isset($totalpayable['min'])) {
				$this->addUsingAlias(PaymentplanPeer::TOTALPAYABLE, $totalpayable['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalpayable['max'])) {
				$this->addUsingAlias(PaymentplanPeer::TOTALPAYABLE, $totalpayable['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::TOTALPAYABLE, $totalpayable, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(PaymentplanPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(PaymentplanPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(PaymentplanPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(PaymentplanPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(PaymentplanPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(PaymentplanPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(PaymentplanPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(PaymentplanPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(PaymentplanPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(PaymentplanPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(PaymentplanPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(PaymentplanPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(PaymentplanPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentplanPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Project object
	 *
	 * @param     Project $project  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterByProject($project, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentplanPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Project relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
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
	 * Filter the query by a related Sales object
	 *
	 * @param     Sales $sales  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function filterBySales($sales, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentplanPeer::REFNO, $sales->getPayplanrefno(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sales relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
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
	 * @param     Paymentplan $paymentplan Object to remove from the list of results
	 *
	 * @return    PaymentplanQuery The current query, for fluid interface
	 */
	public function prune($paymentplan = null)
	{
		if ($paymentplan) {
			$this->addUsingAlias(PaymentplanPeer::REFNO, $paymentplan->getRefno(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePaymentplanQuery
