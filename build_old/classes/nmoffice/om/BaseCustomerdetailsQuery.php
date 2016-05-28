<?php


/**
 * Base class that represents a query for the 'customerdetails' table.
 *
 * customer details
 *
 * @method     CustomerdetailsQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method     CustomerdetailsQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     CustomerdetailsQuery orderByFamilyname($order = Criteria::ASC) Order by the familyname column
 * @method     CustomerdetailsQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method     CustomerdetailsQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method     CustomerdetailsQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method     CustomerdetailsQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     CustomerdetailsQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     CustomerdetailsQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     CustomerdetailsQuery orderBySkype($order = Criteria::ASC) Order by the Skype column
 * @method     CustomerdetailsQuery orderByLandline($order = Criteria::ASC) Order by the landline column
 * @method     CustomerdetailsQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method     CustomerdetailsQuery orderByWorkphone($order = Criteria::ASC) Order by the workphone column
 * @method     CustomerdetailsQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     CustomerdetailsQuery orderByProffession($order = Criteria::ASC) Order by the proffession column
 * @method     CustomerdetailsQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     CustomerdetailsQuery orderByPassportno($order = Criteria::ASC) Order by the passportno column
 * @method     CustomerdetailsQuery orderBySladdressline1($order = Criteria::ASC) Order by the sladdressline1 column
 * @method     CustomerdetailsQuery orderBySladdressline2($order = Criteria::ASC) Order by the sladdressline2 column
 * @method     CustomerdetailsQuery orderBySladdressline3($order = Criteria::ASC) Order by the sladdressline3 column
 * @method     CustomerdetailsQuery orderBySllandline($order = Criteria::ASC) Order by the sllandline column
 * @method     CustomerdetailsQuery orderBySlmobile($order = Criteria::ASC) Order by the slmobile column
 * @method     CustomerdetailsQuery orderBySlcontactperson($order = Criteria::ASC) Order by the slcontactperson column
 * @method     CustomerdetailsQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     CustomerdetailsQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method     CustomerdetailsQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method     CustomerdetailsQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method     CustomerdetailsQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method     CustomerdetailsQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method     CustomerdetailsQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method     CustomerdetailsQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method     CustomerdetailsQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method     CustomerdetailsQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method     CustomerdetailsQuery groupByCustomercode() Group by the customercode column
 * @method     CustomerdetailsQuery groupByTitle() Group by the title column
 * @method     CustomerdetailsQuery groupByFamilyname() Group by the familyname column
 * @method     CustomerdetailsQuery groupByFirstname() Group by the firstname column
 * @method     CustomerdetailsQuery groupByAddressline1() Group by the addressline1 column
 * @method     CustomerdetailsQuery groupByAddressline2() Group by the addressline2 column
 * @method     CustomerdetailsQuery groupByPostcode() Group by the postcode column
 * @method     CustomerdetailsQuery groupByCountry() Group by the country column
 * @method     CustomerdetailsQuery groupByEmail() Group by the email column
 * @method     CustomerdetailsQuery groupBySkype() Group by the Skype column
 * @method     CustomerdetailsQuery groupByLandline() Group by the landline column
 * @method     CustomerdetailsQuery groupByMobile() Group by the mobile column
 * @method     CustomerdetailsQuery groupByWorkphone() Group by the workphone column
 * @method     CustomerdetailsQuery groupByFax() Group by the fax column
 * @method     CustomerdetailsQuery groupByProffession() Group by the proffession column
 * @method     CustomerdetailsQuery groupByGender() Group by the gender column
 * @method     CustomerdetailsQuery groupByPassportno() Group by the passportno column
 * @method     CustomerdetailsQuery groupBySladdressline1() Group by the sladdressline1 column
 * @method     CustomerdetailsQuery groupBySladdressline2() Group by the sladdressline2 column
 * @method     CustomerdetailsQuery groupBySladdressline3() Group by the sladdressline3 column
 * @method     CustomerdetailsQuery groupBySllandline() Group by the sllandline column
 * @method     CustomerdetailsQuery groupBySlmobile() Group by the slmobile column
 * @method     CustomerdetailsQuery groupBySlcontactperson() Group by the slcontactperson column
 * @method     CustomerdetailsQuery groupByDeleted() Group by the deleted column
 * @method     CustomerdetailsQuery groupByAddedby() Group by the addedby column
 * @method     CustomerdetailsQuery groupByAddeddate() Group by the addeddate column
 * @method     CustomerdetailsQuery groupByAddedtime() Group by the addedtime column
 * @method     CustomerdetailsQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method     CustomerdetailsQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method     CustomerdetailsQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method     CustomerdetailsQuery groupByDeletedby() Group by the deletedby column
 * @method     CustomerdetailsQuery groupByDeleteddate() Group by the deleteddate column
 * @method     CustomerdetailsQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method     CustomerdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CustomerdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CustomerdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CustomerdetailsQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method     CustomerdetailsQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method     CustomerdetailsQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method     CustomerdetailsQuery leftJoinCustomerreceipts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerreceipts relation
 * @method     CustomerdetailsQuery rightJoinCustomerreceipts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerreceipts relation
 * @method     CustomerdetailsQuery innerJoinCustomerreceipts($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerreceipts relation
 *
 * @method     CustomerdetailsQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method     CustomerdetailsQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method     CustomerdetailsQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method     Customerdetails findOne(PropelPDO $con = null) Return the first Customerdetails matching the query
 * @method     Customerdetails findOneOrCreate(PropelPDO $con = null) Return the first Customerdetails matching the query, or a new Customerdetails object populated from the query conditions when no match is found
 *
 * @method     Customerdetails findOneByCustomercode(int $customercode) Return the first Customerdetails filtered by the customercode column
 * @method     Customerdetails findOneByTitle(string $title) Return the first Customerdetails filtered by the title column
 * @method     Customerdetails findOneByFamilyname(string $familyname) Return the first Customerdetails filtered by the familyname column
 * @method     Customerdetails findOneByFirstname(string $firstname) Return the first Customerdetails filtered by the firstname column
 * @method     Customerdetails findOneByAddressline1(string $addressline1) Return the first Customerdetails filtered by the addressline1 column
 * @method     Customerdetails findOneByAddressline2(string $addressline2) Return the first Customerdetails filtered by the addressline2 column
 * @method     Customerdetails findOneByPostcode(string $postcode) Return the first Customerdetails filtered by the postcode column
 * @method     Customerdetails findOneByCountry(string $country) Return the first Customerdetails filtered by the country column
 * @method     Customerdetails findOneByEmail(string $email) Return the first Customerdetails filtered by the email column
 * @method     Customerdetails findOneBySkype(string $Skype) Return the first Customerdetails filtered by the Skype column
 * @method     Customerdetails findOneByLandline(string $landline) Return the first Customerdetails filtered by the landline column
 * @method     Customerdetails findOneByMobile(string $mobile) Return the first Customerdetails filtered by the mobile column
 * @method     Customerdetails findOneByWorkphone(string $workphone) Return the first Customerdetails filtered by the workphone column
 * @method     Customerdetails findOneByFax(string $fax) Return the first Customerdetails filtered by the fax column
 * @method     Customerdetails findOneByProffession(string $proffession) Return the first Customerdetails filtered by the proffession column
 * @method     Customerdetails findOneByGender(string $gender) Return the first Customerdetails filtered by the gender column
 * @method     Customerdetails findOneByPassportno(string $passportno) Return the first Customerdetails filtered by the passportno column
 * @method     Customerdetails findOneBySladdressline1(string $sladdressline1) Return the first Customerdetails filtered by the sladdressline1 column
 * @method     Customerdetails findOneBySladdressline2(string $sladdressline2) Return the first Customerdetails filtered by the sladdressline2 column
 * @method     Customerdetails findOneBySladdressline3(string $sladdressline3) Return the first Customerdetails filtered by the sladdressline3 column
 * @method     Customerdetails findOneBySllandline(string $sllandline) Return the first Customerdetails filtered by the sllandline column
 * @method     Customerdetails findOneBySlmobile(string $slmobile) Return the first Customerdetails filtered by the slmobile column
 * @method     Customerdetails findOneBySlcontactperson(string $slcontactperson) Return the first Customerdetails filtered by the slcontactperson column
 * @method     Customerdetails findOneByDeleted(boolean $deleted) Return the first Customerdetails filtered by the deleted column
 * @method     Customerdetails findOneByAddedby(int $addedby) Return the first Customerdetails filtered by the addedby column
 * @method     Customerdetails findOneByAddeddate(string $addeddate) Return the first Customerdetails filtered by the addeddate column
 * @method     Customerdetails findOneByAddedtime(string $addedtime) Return the first Customerdetails filtered by the addedtime column
 * @method     Customerdetails findOneByLastmodifiedby(int $lastmodifiedby) Return the first Customerdetails filtered by the lastmodifiedby column
 * @method     Customerdetails findOneByLastmodifieddate(string $lastmodifieddate) Return the first Customerdetails filtered by the lastmodifieddate column
 * @method     Customerdetails findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Customerdetails filtered by the lastmodifiedtime column
 * @method     Customerdetails findOneByDeletedby(int $deletedby) Return the first Customerdetails filtered by the deletedby column
 * @method     Customerdetails findOneByDeleteddate(string $deleteddate) Return the first Customerdetails filtered by the deleteddate column
 * @method     Customerdetails findOneByDeletedtime(string $deletedtime) Return the first Customerdetails filtered by the deletedtime column
 *
 * @method     array findByCustomercode(int $customercode) Return Customerdetails objects filtered by the customercode column
 * @method     array findByTitle(string $title) Return Customerdetails objects filtered by the title column
 * @method     array findByFamilyname(string $familyname) Return Customerdetails objects filtered by the familyname column
 * @method     array findByFirstname(string $firstname) Return Customerdetails objects filtered by the firstname column
 * @method     array findByAddressline1(string $addressline1) Return Customerdetails objects filtered by the addressline1 column
 * @method     array findByAddressline2(string $addressline2) Return Customerdetails objects filtered by the addressline2 column
 * @method     array findByPostcode(string $postcode) Return Customerdetails objects filtered by the postcode column
 * @method     array findByCountry(string $country) Return Customerdetails objects filtered by the country column
 * @method     array findByEmail(string $email) Return Customerdetails objects filtered by the email column
 * @method     array findBySkype(string $Skype) Return Customerdetails objects filtered by the Skype column
 * @method     array findByLandline(string $landline) Return Customerdetails objects filtered by the landline column
 * @method     array findByMobile(string $mobile) Return Customerdetails objects filtered by the mobile column
 * @method     array findByWorkphone(string $workphone) Return Customerdetails objects filtered by the workphone column
 * @method     array findByFax(string $fax) Return Customerdetails objects filtered by the fax column
 * @method     array findByProffession(string $proffession) Return Customerdetails objects filtered by the proffession column
 * @method     array findByGender(string $gender) Return Customerdetails objects filtered by the gender column
 * @method     array findByPassportno(string $passportno) Return Customerdetails objects filtered by the passportno column
 * @method     array findBySladdressline1(string $sladdressline1) Return Customerdetails objects filtered by the sladdressline1 column
 * @method     array findBySladdressline2(string $sladdressline2) Return Customerdetails objects filtered by the sladdressline2 column
 * @method     array findBySladdressline3(string $sladdressline3) Return Customerdetails objects filtered by the sladdressline3 column
 * @method     array findBySllandline(string $sllandline) Return Customerdetails objects filtered by the sllandline column
 * @method     array findBySlmobile(string $slmobile) Return Customerdetails objects filtered by the slmobile column
 * @method     array findBySlcontactperson(string $slcontactperson) Return Customerdetails objects filtered by the slcontactperson column
 * @method     array findByDeleted(boolean $deleted) Return Customerdetails objects filtered by the deleted column
 * @method     array findByAddedby(int $addedby) Return Customerdetails objects filtered by the addedby column
 * @method     array findByAddeddate(string $addeddate) Return Customerdetails objects filtered by the addeddate column
 * @method     array findByAddedtime(string $addedtime) Return Customerdetails objects filtered by the addedtime column
 * @method     array findByLastmodifiedby(int $lastmodifiedby) Return Customerdetails objects filtered by the lastmodifiedby column
 * @method     array findByLastmodifieddate(string $lastmodifieddate) Return Customerdetails objects filtered by the lastmodifieddate column
 * @method     array findByLastmodifiedtime(string $lastmodifiedtime) Return Customerdetails objects filtered by the lastmodifiedtime column
 * @method     array findByDeletedby(int $deletedby) Return Customerdetails objects filtered by the deletedby column
 * @method     array findByDeleteddate(string $deleteddate) Return Customerdetails objects filtered by the deleteddate column
 * @method     array findByDeletedtime(string $deletedtime) Return Customerdetails objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseCustomerdetailsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCustomerdetailsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'nmwndb', $modelName = 'Customerdetails', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CustomerdetailsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CustomerdetailsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CustomerdetailsQuery) {
			return $criteria;
		}
		$query = new CustomerdetailsQuery();
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
	 * @return    Customerdetails|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CustomerdetailsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the customercode column
	 * 
	 * @param     int|array $customercode The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByCustomercode($customercode = null, $comparison = null)
	{
		if (is_array($customercode) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $customercode, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the familyname column
	 * 
	 * @param     string $familyname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CustomerdetailsPeer::FAMILYNAME, $familyname, $comparison);
	}

	/**
	 * Filter the query on the firstname column
	 * 
	 * @param     string $firstname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CustomerdetailsPeer::FIRSTNAME, $firstname, $comparison);
	}

	/**
	 * Filter the query on the addressline1 column
	 * 
	 * @param     string $addressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddressline1($addressline1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($addressline1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $addressline1)) {
				$addressline1 = str_replace('*', '%', $addressline1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::ADDRESSLINE1, $addressline1, $comparison);
	}

	/**
	 * Filter the query on the addressline2 column
	 * 
	 * @param     string $addressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddressline2($addressline2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($addressline2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $addressline2)) {
				$addressline2 = str_replace('*', '%', $addressline2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::ADDRESSLINE2, $addressline2, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByPostcode($postcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postcode)) {
				$postcode = str_replace('*', '%', $postcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($country)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $country)) {
				$country = str_replace('*', '%', $country);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the Skype column
	 * 
	 * @param     string $skype The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySkype($skype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($skype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $skype)) {
				$skype = str_replace('*', '%', $skype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SKYPE, $skype, $comparison);
	}

	/**
	 * Filter the query on the landline column
	 * 
	 * @param     string $landline The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByLandline($landline = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($landline)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $landline)) {
				$landline = str_replace('*', '%', $landline);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::LANDLINE, $landline, $comparison);
	}

	/**
	 * Filter the query on the mobile column
	 * 
	 * @param     string $mobile The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByMobile($mobile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($mobile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $mobile)) {
				$mobile = str_replace('*', '%', $mobile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::MOBILE, $mobile, $comparison);
	}

	/**
	 * Filter the query on the workphone column
	 * 
	 * @param     string $workphone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByWorkphone($workphone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($workphone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $workphone)) {
				$workphone = str_replace('*', '%', $workphone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::WORKPHONE, $workphone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fax)) {
				$fax = str_replace('*', '%', $fax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the proffession column
	 * 
	 * @param     string $proffession The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByProffession($proffession = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($proffession)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $proffession)) {
				$proffession = str_replace('*', '%', $proffession);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::PROFFESSION, $proffession, $comparison);
	}

	/**
	 * Filter the query on the gender column
	 * 
	 * @param     string $gender The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByGender($gender = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gender)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gender)) {
				$gender = str_replace('*', '%', $gender);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::GENDER, $gender, $comparison);
	}

	/**
	 * Filter the query on the passportno column
	 * 
	 * @param     string $passportno The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByPassportno($passportno = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($passportno)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $passportno)) {
				$passportno = str_replace('*', '%', $passportno);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::PASSPORTNO, $passportno, $comparison);
	}

	/**
	 * Filter the query on the sladdressline1 column
	 * 
	 * @param     string $sladdressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySladdressline1($sladdressline1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sladdressline1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sladdressline1)) {
				$sladdressline1 = str_replace('*', '%', $sladdressline1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SLADDRESSLINE1, $sladdressline1, $comparison);
	}

	/**
	 * Filter the query on the sladdressline2 column
	 * 
	 * @param     string $sladdressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySladdressline2($sladdressline2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sladdressline2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sladdressline2)) {
				$sladdressline2 = str_replace('*', '%', $sladdressline2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SLADDRESSLINE2, $sladdressline2, $comparison);
	}

	/**
	 * Filter the query on the sladdressline3 column
	 * 
	 * @param     string $sladdressline3 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySladdressline3($sladdressline3 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sladdressline3)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sladdressline3)) {
				$sladdressline3 = str_replace('*', '%', $sladdressline3);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SLADDRESSLINE3, $sladdressline3, $comparison);
	}

	/**
	 * Filter the query on the sllandline column
	 * 
	 * @param     string $sllandline The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySllandline($sllandline = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sllandline)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sllandline)) {
				$sllandline = str_replace('*', '%', $sllandline);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SLLANDLINE, $sllandline, $comparison);
	}

	/**
	 * Filter the query on the slmobile column
	 * 
	 * @param     string $slmobile The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySlmobile($slmobile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($slmobile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $slmobile)) {
				$slmobile = str_replace('*', '%', $slmobile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SLMOBILE, $slmobile, $comparison);
	}

	/**
	 * Filter the query on the slcontactperson column
	 * 
	 * @param     string $slcontactperson The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySlcontactperson($slcontactperson = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($slcontactperson)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $slcontactperson)) {
				$slcontactperson = str_replace('*', '%', $slcontactperson);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::SLCONTACTPERSON, $slcontactperson, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 * 
	 * @param     boolean|string $deleted The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(CustomerdetailsPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the addedby column
	 * 
	 * @param     int|array $addedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddedby($addedby = null, $comparison = null)
	{
		if (is_array($addedby)) {
			$useMinMax = false;
			if (isset($addedby['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedby['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::ADDEDBY, $addedby, $comparison);
	}

	/**
	 * Filter the query on the addeddate column
	 * 
	 * @param     string|array $addeddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddeddate($addeddate = null, $comparison = null)
	{
		if (is_array($addeddate)) {
			$useMinMax = false;
			if (isset($addeddate['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addeddate['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::ADDEDDATE, $addeddate, $comparison);
	}

	/**
	 * Filter the query on the addedtime column
	 * 
	 * @param     string|array $addedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByAddedtime($addedtime = null, $comparison = null)
	{
		if (is_array($addedtime)) {
			$useMinMax = false;
			if (isset($addedtime['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($addedtime['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::ADDEDTIME, $addedtime, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedby column
	 * 
	 * @param     int|array $lastmodifiedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
	{
		if (is_array($lastmodifiedby)) {
			$useMinMax = false;
			if (isset($lastmodifiedby['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedby['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
	}

	/**
	 * Filter the query on the lastmodifieddate column
	 * 
	 * @param     string|array $lastmodifieddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
	{
		if (is_array($lastmodifieddate)) {
			$useMinMax = false;
			if (isset($lastmodifieddate['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifieddate['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
	}

	/**
	 * Filter the query on the lastmodifiedtime column
	 * 
	 * @param     string|array $lastmodifiedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
	{
		if (is_array($lastmodifiedtime)) {
			$useMinMax = false;
			if (isset($lastmodifiedtime['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastmodifiedtime['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
	}

	/**
	 * Filter the query on the deletedby column
	 * 
	 * @param     int|array $deletedby The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeletedby($deletedby = null, $comparison = null)
	{
		if (is_array($deletedby)) {
			$useMinMax = false;
			if (isset($deletedby['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedby['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::DELETEDBY, $deletedby, $comparison);
	}

	/**
	 * Filter the query on the deleteddate column
	 * 
	 * @param     string|array $deleteddate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeleteddate($deleteddate = null, $comparison = null)
	{
		if (is_array($deleteddate)) {
			$useMinMax = false;
			if (isset($deleteddate['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deleteddate['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::DELETEDDATE, $deleteddate, $comparison);
	}

	/**
	 * Filter the query on the deletedtime column
	 * 
	 * @param     string|array $deletedtime The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByDeletedtime($deletedtime = null, $comparison = null)
	{
		if (is_array($deletedtime)) {
			$useMinMax = false;
			if (isset($deletedtime['min'])) {
				$this->addUsingAlias(CustomerdetailsPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedtime['max'])) {
				$this->addUsingAlias(CustomerdetailsPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CustomerdetailsPeer::DELETEDTIME, $deletedtime, $comparison);
	}

	/**
	 * Filter the query by a related Projectdetails object
	 *
	 * @param     Projectdetails $projectdetails  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByProjectdetails($projectdetails, $comparison = null)
	{
		return $this
			->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $projectdetails->getCustomercode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Projectdetails relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
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
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterByCustomerreceipts($customerreceipts, $comparison = null)
	{
		return $this
			->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $customerreceipts->getCustomercode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Customerreceipts relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
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
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function filterBySales($sales, $comparison = null)
	{
		return $this
			->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $sales->getCustomercode(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Sales relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
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
	 * @param     Customerdetails $customerdetails Object to remove from the list of results
	 *
	 * @return    CustomerdetailsQuery The current query, for fluid interface
	 */
	public function prune($customerdetails = null)
	{
		if ($customerdetails) {
			$this->addUsingAlias(CustomerdetailsPeer::CUSTOMERCODE, $customerdetails->getCustomercode(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCustomerdetailsQuery
