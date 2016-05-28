<?php


/**
 * Base class that represents a query for the 'customerreceipts' table.
 *
 * customer payment receipts
 *
 * @method     CustomerreceiptsQuery orderByReceiptno($order = Criteria::ASC) Order by the receiptno column
 * @method     CustomerreceiptsQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method     CustomerreceiptsQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method     CustomerreceiptsQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method     CustomerreceiptsQuery orderByReceiptdate($order = Criteria::ASC) Order by the receiptdate column
 * @method     CustomerreceiptsQuery orderByBlocknumber($order = Criteria::ASC) Order by the blocknumber column
 * @method     CustomerreceiptsQuery orderByPaymenttype($order = Criteria::ASC) Order by the paymenttype column
 * @method     CustomerreceiptsQuery orderByPaidamount($order = Criteria::ASC) Order by the paidamount column
 * @method     CustomerreceiptsQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     CustomerreceiptsQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     CustomerreceiptsQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     CustomerreceiptsQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     CustomerreceiptsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     CustomerreceiptsQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     CustomerreceiptsQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     CustomerreceiptsQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     CustomerreceiptsQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     CustomerreceiptsQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     CustomerreceiptsQuery groupByReceiptno() Group by the receiptno column
 * @method     CustomerreceiptsQuery groupByLocationcode() Group by the locationcode column
 * @method     CustomerreceiptsQuery groupByProjectcode() Group by the projectcode column
 * @method     CustomerreceiptsQuery groupByCustomercode() Group by the customercode column
 * @method     CustomerreceiptsQuery groupByReceiptdate() Group by the receiptdate column
 * @method     CustomerreceiptsQuery groupByBlocknumber() Group by the blocknumber column
 * @method     CustomerreceiptsQuery groupByPaymenttype() Group by the paymenttype column
 * @method     CustomerreceiptsQuery groupByPaidamount() Group by the paidamount column
 * @method     CustomerreceiptsQuery groupByDeleted() Group by the deleted column
 * @method     CustomerreceiptsQuery groupByAddedby() Group by the addedby column
 * @method     CustomerreceiptsQuery groupByAddeddate() Group by the addeddate column
 * @method     CustomerreceiptsQuery groupByAddedtime() Group by the addedtime column
 * @method     CustomerreceiptsQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     CustomerreceiptsQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     CustomerreceiptsQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     CustomerreceiptsQuery groupByDeletedby() Group by the deletedby column
 * @method     CustomerreceiptsQuery groupByDeleteddate() Group by the deleteddate column
 * @method     CustomerreceiptsQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     CustomerreceiptsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CustomerreceiptsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CustomerreceiptsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CustomerreceiptsQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method     CustomerreceiptsQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method     CustomerreceiptsQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method     CustomerreceiptsQuery leftJoinProject($relationAlias = null) Adds a LEFT JOIN clause to the query using the Project relation
 * @method     CustomerreceiptsQuery rightJoinProject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Project relation
 * @method     CustomerreceiptsQuery innerJoinProject($relationAlias = null) Adds a INNER JOIN clause to the query using the Project relation
 *
 * @method     CustomerreceiptsQuery leftJoinCustomerdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerdetails relation
 * @method     CustomerreceiptsQuery rightJoinCustomerdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerdetails relation
 * @method     CustomerreceiptsQuery innerJoinCustomerdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerdetails relation
 *
 * @method     Customerreceipts findOne(PropelPDO $con = null) Return the first Customerreceipts matching the query
 * @method     Customerreceipts findOneOrCreate(PropelPDO $con = null) Return the first Customerreceipts matching the query, or a new Customerreceipts object populated from the query conditions when no match is found
 *
 * @method     Customerreceipts findOneByReceiptno(int $receiptno) Return the first Customerreceipts filtered by the receiptno column
 * @method     Customerreceipts findOneByLocationcode(int $locationcode) Return the first Customerreceipts filtered by the locationcode column
 * @method     Customerreceipts findOneByProjectcode(int $projectcode) Return the first Customerreceipts filtered by the projectcode column
 * @method     Customerreceipts findOneByCustomercode(int $customercode) Return the first Customerreceipts filtered by the customercode column
 * @method     Customerreceipts findOneByReceiptdate(string $receiptdate) Return the first Customerreceipts filtered by the receiptdate column
 * @method     Customerreceipts findOneByBlocknumber(int $blocknumber) Return the first Customerreceipts filtered by the blocknumber column
 * @method     Customerreceipts findOneByPaymenttype(int $paymenttype) Return the first Customerreceipts filtered by the paymenttype column
 * @method     Customerreceipts findOneByPaidamount(double $paidamount) Return the first Customerreceipts filtered by the paidamount column
 * @method     Customerreceipts findOneByDeleted(boolean $deleted) Return the first Customerreceipts filtered by the deleted column
 * @method     Customerreceipts findOneByAddedby(int $addedby) Return the first Customerreceipts filtered by the addedby column
 * @method     Customerreceipts findOneByAddeddate(string $addeddate) Return the first Customerreceipts filtered by the addeddate column
 * @method     Customerreceipts findOneByAddedtime(string $addedtime) Return the first Customerreceipts filtered by the addedtime column
 * @method     Customerreceipts findOneByLastmodifiedby(int $lastmodifiedby) Return the first Customerreceipts filtered by the lastmodifiedby column
 * @method     Customerreceipts findOneByLastmodifieddate(string $lastmodifieddate) Return the first Customerreceipts filtered by the lastmodifieddate column
 * @method     Customerreceipts findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Customerreceipts filtered by the lastmodifiedtime column
 * @method     Customerreceipts findOneByDeletedby(int $deletedby) Return the first Customerreceipts filtered by the deletedby column
 * @method     Customerreceipts findOneByDeleteddate(string $deleteddate) Return the first Customerreceipts filtered by the deleteddate column
 * @method     Customerreceipts findOneByDeletedtime(string $deletedtime) Return the first Customerreceipts filtered by the deletedtime column
 *
 * @method     array findByReceiptno(int $receiptno) Return Customerreceipts objects filtered by the receiptno column
 * @method     array findByLocationcode(int $locationcode) Return Customerreceipts objects filtered by the locationcode column
 * @method     array findByProjectcode(int $projectcode) Return Customerreceipts objects filtered by the projectcode column
 * @method     array findByCustomercode(int $customercode) Return Customerreceipts objects filtered by the customercode column
 * @method     array findByReceiptdate(string $receiptdate) Return Customerreceipts objects filtered by the receiptdate column
 * @method     array findByBlocknumber(int $blocknumber) Return Customerreceipts objects filtered by the blocknumber column
 * @method     array findByPaymenttype(int $paymenttype) Return Customerreceipts objects filtered by the paymenttype column
 * @method     array findByPaidamount(double $paidamount) Return Customerreceipts objects filtered by the paidamount column
 * @method     array findByDeleted(boolean $deleted) Return Customerreceipts objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Customerreceipts objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Customerreceipts objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Customerreceipts objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Customerreceipts objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Customerreceipts objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Customerreceipts objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Customerreceipts objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Customerreceipts objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Customerreceipts objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseCustomerreceiptsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCustomerreceiptsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Customerreceipts', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CustomerreceiptsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CustomerreceiptsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CustomerreceiptsQuery) {
			return $criteria;
		}
		$query = new CustomerreceiptsQuery();
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
	 * @return    Customerreceipts|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CustomerreceiptsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the receiptno column
	 * 
	 * @param     int|array $receiptno The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByReceiptno($receiptno = null, $comparison = null)
	{
		if (is_array($receiptno) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $receiptno, $comparison);
	}

	/**
	 * Filter the query on the locationcode column
	 * 
	 * @param     int|array $locationcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByLocationcode($locationcode = null, $comparison = null)
	{
		if (is_array($locationcode)) {
			$useMinMax = false;
			if (isset($locationcode['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($locationcode['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $locationcode, $comparison);
	}

	/**
	 * Filter the query on the projectcode column
	 * 
	 * @param     int|array $projectcode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByProjectcode($projectcode = null, $comparison = null)
	{
		if (is_array($projectcode)) {
			$useMinMax = false;
			if (isset($projectcode['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($projectcode['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $projectcode, $comparison);
	}

	/**
	 * Filter the query on the customercode column
	 * 
	 * @param     int|array $customercode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByCustomercode($customercode = null, $comparison = null)
	{
		if (is_array($customercode)) {
			$useMinMax = false;
			if (isset($customercode['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($customercode['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customercode, $comparison);
	}

	/**
	 * Filter the query on the receiptdate column
	 * 
	 * @param     string|array $receiptdate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByReceiptdate($receiptdate = null, $comparison = null)
	{
		if (is_array($receiptdate)) {
			$useMinMax = false;
			if (isset($receiptdate['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::RECEIPTDATE, $receiptdate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($receiptdate['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::RECEIPTDATE, $receiptdate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::RECEIPTDATE, $receiptdate, $comparison);
	}

	/**
	 * Filter the query on the blocknumber column
	 * 
	 * @param     int|array $blocknumber The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByBlocknumber($blocknumber = null, $comparison = null)
	{
		if (is_array($blocknumber)) {
			$useMinMax = false;
			if (isset($blocknumber['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::BLOCKNUMBER, $blocknumber['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blocknumber['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::BLOCKNUMBER, $blocknumber['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::BLOCKNUMBER, $blocknumber, $comparison);
	}

	/**
	 * Filter the query on the paymenttype column
	 * 
	 * @param     int|array $paymenttype The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByPaymenttype($paymenttype = null, $comparison = null)
	{
		if (is_array($paymenttype)) {
			$useMinMax = false;
			if (isset($paymenttype['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::PAYMENTTYPE, $paymenttype['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($paymenttype['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::PAYMENTTYPE, $paymenttype['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::PAYMENTTYPE, $paymenttype, $comparison);
	}

	/**
	 * Filter the query on the paidamount column
	 * 
	 * @param     double|array $paidamount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByPaidamount($paidamount = null, $comparison = null)
	{
		if (is_array($paidamount)) {
			$useMinMax = false;
			if (isset($paidamount['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::PAIDAMOUNT, $paidamount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($paidamount['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::PAIDAMOUNT, $paidamount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::PAIDAMOUNT, $paidamount, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(CustomerreceiptsPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerreceiptsPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Location object
	 *
	 * @param     Location $location  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByLocation($location, $comparison = null)
	{
		return $this
			->addUsingAlias(CustomerreceiptsPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Location relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
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
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByProject($project, $comparison = null)
	{
		return $this
			->addUsingAlias(CustomerreceiptsPeer::PROJECTCODE, $project->getProjectcode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Project relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
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
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function filterByCustomerdetails($customerdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(CustomerreceiptsPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Customerdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Customerreceipts $customerreceipts Object to remove from the list of results
	 *
	 * @return    CustomerreceiptsQuery The current query, for fluid interface
	 */
	public function prune($customerreceipts = null)
	{
		if ($customerreceipts) {
			$this->addUsingAlias(CustomerreceiptsPeer::RECEIPTNO, $customerreceipts->getReceiptno(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCustomerreceiptsQuery
