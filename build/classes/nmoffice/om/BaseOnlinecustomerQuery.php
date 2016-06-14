<?php


/**
 * Base class that represents a query for the 'onlinecustomer' table.
 *
 * onlinecustomer
 *
 * @method OnlinecustomerQuery orderByCustomercode($order = Criteria::ASC) Order by the customercode column
 * @method OnlinecustomerQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method OnlinecustomerQuery orderByFamilyname($order = Criteria::ASC) Order by the familyname column
 * @method OnlinecustomerQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method OnlinecustomerQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method OnlinecustomerQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method OnlinecustomerQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method OnlinecustomerQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method OnlinecustomerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method OnlinecustomerQuery orderBySkype($order = Criteria::ASC) Order by the Skype column
 * @method OnlinecustomerQuery orderByLandline($order = Criteria::ASC) Order by the landline column
 * @method OnlinecustomerQuery orderByMobile($order = Criteria::ASC) Order by the mobile column
 * @method OnlinecustomerQuery orderByWorkphone($order = Criteria::ASC) Order by the workphone column
 * @method OnlinecustomerQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method OnlinecustomerQuery orderByProffession($order = Criteria::ASC) Order by the proffession column
 * @method OnlinecustomerQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method OnlinecustomerQuery orderByPassportno($order = Criteria::ASC) Order by the passportno column
 * @method OnlinecustomerQuery orderBySladdressline1($order = Criteria::ASC) Order by the sladdressline1 column
 * @method OnlinecustomerQuery orderBySladdressline2($order = Criteria::ASC) Order by the sladdressline2 column
 * @method OnlinecustomerQuery orderBySladdressline3($order = Criteria::ASC) Order by the sladdressline3 column
 * @method OnlinecustomerQuery orderBySllandline($order = Criteria::ASC) Order by the sllandline column
 * @method OnlinecustomerQuery orderBySlmobile($order = Criteria::ASC) Order by the slmobile column
 * @method OnlinecustomerQuery orderBySlcontactperson($order = Criteria::ASC) Order by the slcontactperson column
 * @method OnlinecustomerQuery orderByOnlineuserid($order = Criteria::ASC) Order by the onlineuserid column
 * @method OnlinecustomerQuery orderByPaymentsuccess($order = Criteria::ASC) Order by the paymentsuccess column
 * @method OnlinecustomerQuery orderByBlockrefno($order = Criteria::ASC) Order by the blockrefno column
 * @method OnlinecustomerQuery orderByPaidamt($order = Criteria::ASC) Order by the paidamt column
 * @method OnlinecustomerQuery orderByPaidamtissuedreceiptstatus($order = Criteria::ASC) Order by the paidamtissuedreceiptstatus column
 * @method OnlinecustomerQuery orderByUtilized($order = Criteria::ASC) Order by the utilized column
 * @method OnlinecustomerQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method OnlinecustomerQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method OnlinecustomerQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method OnlinecustomerQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method OnlinecustomerQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method OnlinecustomerQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method OnlinecustomerQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method OnlinecustomerQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method OnlinecustomerQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method OnlinecustomerQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method OnlinecustomerQuery groupByCustomercode() Group by the customercode column
 * @method OnlinecustomerQuery groupByTitle() Group by the title column
 * @method OnlinecustomerQuery groupByFamilyname() Group by the familyname column
 * @method OnlinecustomerQuery groupByFirstname() Group by the firstname column
 * @method OnlinecustomerQuery groupByAddressline1() Group by the addressline1 column
 * @method OnlinecustomerQuery groupByAddressline2() Group by the addressline2 column
 * @method OnlinecustomerQuery groupByPostcode() Group by the postcode column
 * @method OnlinecustomerQuery groupByCountry() Group by the country column
 * @method OnlinecustomerQuery groupByEmail() Group by the email column
 * @method OnlinecustomerQuery groupBySkype() Group by the Skype column
 * @method OnlinecustomerQuery groupByLandline() Group by the landline column
 * @method OnlinecustomerQuery groupByMobile() Group by the mobile column
 * @method OnlinecustomerQuery groupByWorkphone() Group by the workphone column
 * @method OnlinecustomerQuery groupByFax() Group by the fax column
 * @method OnlinecustomerQuery groupByProffession() Group by the proffession column
 * @method OnlinecustomerQuery groupByGender() Group by the gender column
 * @method OnlinecustomerQuery groupByPassportno() Group by the passportno column
 * @method OnlinecustomerQuery groupBySladdressline1() Group by the sladdressline1 column
 * @method OnlinecustomerQuery groupBySladdressline2() Group by the sladdressline2 column
 * @method OnlinecustomerQuery groupBySladdressline3() Group by the sladdressline3 column
 * @method OnlinecustomerQuery groupBySllandline() Group by the sllandline column
 * @method OnlinecustomerQuery groupBySlmobile() Group by the slmobile column
 * @method OnlinecustomerQuery groupBySlcontactperson() Group by the slcontactperson column
 * @method OnlinecustomerQuery groupByOnlineuserid() Group by the onlineuserid column
 * @method OnlinecustomerQuery groupByPaymentsuccess() Group by the paymentsuccess column
 * @method OnlinecustomerQuery groupByBlockrefno() Group by the blockrefno column
 * @method OnlinecustomerQuery groupByPaidamt() Group by the paidamt column
 * @method OnlinecustomerQuery groupByPaidamtissuedreceiptstatus() Group by the paidamtissuedreceiptstatus column
 * @method OnlinecustomerQuery groupByUtilized() Group by the utilized column
 * @method OnlinecustomerQuery groupByDeleted() Group by the deleted column
 * @method OnlinecustomerQuery groupByAddedby() Group by the addedby column
 * @method OnlinecustomerQuery groupByAddeddate() Group by the addeddate column
 * @method OnlinecustomerQuery groupByAddedtime() Group by the addedtime column
 * @method OnlinecustomerQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method OnlinecustomerQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method OnlinecustomerQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method OnlinecustomerQuery groupByDeletedby() Group by the deletedby column
 * @method OnlinecustomerQuery groupByDeleteddate() Group by the deleteddate column
 * @method OnlinecustomerQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method OnlinecustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OnlinecustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OnlinecustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Onlinecustomer findOne(PropelPDO $con = null) Return the first Onlinecustomer matching the query
 * @method Onlinecustomer findOneOrCreate(PropelPDO $con = null) Return the first Onlinecustomer matching the query, or a new Onlinecustomer object populated from the query conditions when no match is found
 *
 * @method Onlinecustomer findOneByTitle(string $title) Return the first Onlinecustomer filtered by the title column
 * @method Onlinecustomer findOneByFamilyname(string $familyname) Return the first Onlinecustomer filtered by the familyname column
 * @method Onlinecustomer findOneByFirstname(string $firstname) Return the first Onlinecustomer filtered by the firstname column
 * @method Onlinecustomer findOneByAddressline1(string $addressline1) Return the first Onlinecustomer filtered by the addressline1 column
 * @method Onlinecustomer findOneByAddressline2(string $addressline2) Return the first Onlinecustomer filtered by the addressline2 column
 * @method Onlinecustomer findOneByPostcode(string $postcode) Return the first Onlinecustomer filtered by the postcode column
 * @method Onlinecustomer findOneByCountry(string $country) Return the first Onlinecustomer filtered by the country column
 * @method Onlinecustomer findOneByEmail(string $email) Return the first Onlinecustomer filtered by the email column
 * @method Onlinecustomer findOneBySkype(string $Skype) Return the first Onlinecustomer filtered by the Skype column
 * @method Onlinecustomer findOneByLandline(string $landline) Return the first Onlinecustomer filtered by the landline column
 * @method Onlinecustomer findOneByMobile(string $mobile) Return the first Onlinecustomer filtered by the mobile column
 * @method Onlinecustomer findOneByWorkphone(string $workphone) Return the first Onlinecustomer filtered by the workphone column
 * @method Onlinecustomer findOneByFax(string $fax) Return the first Onlinecustomer filtered by the fax column
 * @method Onlinecustomer findOneByProffession(string $proffession) Return the first Onlinecustomer filtered by the proffession column
 * @method Onlinecustomer findOneByGender(string $gender) Return the first Onlinecustomer filtered by the gender column
 * @method Onlinecustomer findOneByPassportno(string $passportno) Return the first Onlinecustomer filtered by the passportno column
 * @method Onlinecustomer findOneBySladdressline1(string $sladdressline1) Return the first Onlinecustomer filtered by the sladdressline1 column
 * @method Onlinecustomer findOneBySladdressline2(string $sladdressline2) Return the first Onlinecustomer filtered by the sladdressline2 column
 * @method Onlinecustomer findOneBySladdressline3(string $sladdressline3) Return the first Onlinecustomer filtered by the sladdressline3 column
 * @method Onlinecustomer findOneBySllandline(string $sllandline) Return the first Onlinecustomer filtered by the sllandline column
 * @method Onlinecustomer findOneBySlmobile(string $slmobile) Return the first Onlinecustomer filtered by the slmobile column
 * @method Onlinecustomer findOneBySlcontactperson(string $slcontactperson) Return the first Onlinecustomer filtered by the slcontactperson column
 * @method Onlinecustomer findOneByOnlineuserid(int $onlineuserid) Return the first Onlinecustomer filtered by the onlineuserid column
 * @method Onlinecustomer findOneByPaymentsuccess(boolean $paymentsuccess) Return the first Onlinecustomer filtered by the paymentsuccess column
 * @method Onlinecustomer findOneByBlockrefno(int $blockrefno) Return the first Onlinecustomer filtered by the blockrefno column
 * @method Onlinecustomer findOneByPaidamt(double $paidamt) Return the first Onlinecustomer filtered by the paidamt column
 * @method Onlinecustomer findOneByPaidamtissuedreceiptstatus(boolean $paidamtissuedreceiptstatus) Return the first Onlinecustomer filtered by the paidamtissuedreceiptstatus column
 * @method Onlinecustomer findOneByUtilized(boolean $utilized) Return the first Onlinecustomer filtered by the utilized column
 * @method Onlinecustomer findOneByDeleted(boolean $deleted) Return the first Onlinecustomer filtered by the deleted column
 * @method Onlinecustomer findOneByAddedby(int $addedby) Return the first Onlinecustomer filtered by the addedby column
 * @method Onlinecustomer findOneByAddeddate(string $addeddate) Return the first Onlinecustomer filtered by the addeddate column
 * @method Onlinecustomer findOneByAddedtime(string $addedtime) Return the first Onlinecustomer filtered by the addedtime column
 * @method Onlinecustomer findOneByLastmodifiedby(int $lastmodifiedby) Return the first Onlinecustomer filtered by the lastmodifiedby column
 * @method Onlinecustomer findOneByLastmodifieddate(string $lastmodifieddate) Return the first Onlinecustomer filtered by the lastmodifieddate column
 * @method Onlinecustomer findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Onlinecustomer filtered by the lastmodifiedtime column
 * @method Onlinecustomer findOneByDeletedby(int $deletedby) Return the first Onlinecustomer filtered by the deletedby column
 * @method Onlinecustomer findOneByDeleteddate(string $deleteddate) Return the first Onlinecustomer filtered by the deleteddate column
 * @method Onlinecustomer findOneByDeletedtime(string $deletedtime) Return the first Onlinecustomer filtered by the deletedtime column
 *
 * @method array findByCustomercode(int $customercode) Return Onlinecustomer objects filtered by the customercode column
 * @method array findByTitle(string $title) Return Onlinecustomer objects filtered by the title column
 * @method array findByFamilyname(string $familyname) Return Onlinecustomer objects filtered by the familyname column
 * @method array findByFirstname(string $firstname) Return Onlinecustomer objects filtered by the firstname column
 * @method array findByAddressline1(string $addressline1) Return Onlinecustomer objects filtered by the addressline1 column
 * @method array findByAddressline2(string $addressline2) Return Onlinecustomer objects filtered by the addressline2 column
 * @method array findByPostcode(string $postcode) Return Onlinecustomer objects filtered by the postcode column
 * @method array findByCountry(string $country) Return Onlinecustomer objects filtered by the country column
 * @method array findByEmail(string $email) Return Onlinecustomer objects filtered by the email column
 * @method array findBySkype(string $Skype) Return Onlinecustomer objects filtered by the Skype column
 * @method array findByLandline(string $landline) Return Onlinecustomer objects filtered by the landline column
 * @method array findByMobile(string $mobile) Return Onlinecustomer objects filtered by the mobile column
 * @method array findByWorkphone(string $workphone) Return Onlinecustomer objects filtered by the workphone column
 * @method array findByFax(string $fax) Return Onlinecustomer objects filtered by the fax column
 * @method array findByProffession(string $proffession) Return Onlinecustomer objects filtered by the proffession column
 * @method array findByGender(string $gender) Return Onlinecustomer objects filtered by the gender column
 * @method array findByPassportno(string $passportno) Return Onlinecustomer objects filtered by the passportno column
 * @method array findBySladdressline1(string $sladdressline1) Return Onlinecustomer objects filtered by the sladdressline1 column
 * @method array findBySladdressline2(string $sladdressline2) Return Onlinecustomer objects filtered by the sladdressline2 column
 * @method array findBySladdressline3(string $sladdressline3) Return Onlinecustomer objects filtered by the sladdressline3 column
 * @method array findBySllandline(string $sllandline) Return Onlinecustomer objects filtered by the sllandline column
 * @method array findBySlmobile(string $slmobile) Return Onlinecustomer objects filtered by the slmobile column
 * @method array findBySlcontactperson(string $slcontactperson) Return Onlinecustomer objects filtered by the slcontactperson column
 * @method array findByOnlineuserid(int $onlineuserid) Return Onlinecustomer objects filtered by the onlineuserid column
 * @method array findByPaymentsuccess(boolean $paymentsuccess) Return Onlinecustomer objects filtered by the paymentsuccess column
 * @method array findByBlockrefno(int $blockrefno) Return Onlinecustomer objects filtered by the blockrefno column
 * @method array findByPaidamt(double $paidamt) Return Onlinecustomer objects filtered by the paidamt column
 * @method array findByPaidamtissuedreceiptstatus(boolean $paidamtissuedreceiptstatus) Return Onlinecustomer objects filtered by the paidamtissuedreceiptstatus column
 * @method array findByUtilized(boolean $utilized) Return Onlinecustomer objects filtered by the utilized column
 * @method array findByDeleted(boolean $deleted) Return Onlinecustomer objects filtered by the deleted column
 * @method array findByAddedby(int $addedby) Return Onlinecustomer objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Onlinecustomer objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Onlinecustomer objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Onlinecustomer objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Onlinecustomer objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Onlinecustomer objects filtered by the lastmodifiedtime column
 * @method array findByDeletedby(int $deletedby) Return Onlinecustomer objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Onlinecustomer objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Onlinecustomer objects filtered by the deletedtime column
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseOnlinecustomerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOnlinecustomerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'nmwndb';
        }
        if (null === $modelName) {
            $modelName = 'Onlinecustomer';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OnlinecustomerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OnlinecustomerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OnlinecustomerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OnlinecustomerQuery) {
            return $criteria;
        }
        $query = new OnlinecustomerQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Onlinecustomer|Onlinecustomer[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OnlinecustomerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OnlinecustomerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Onlinecustomer A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCustomercode($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Onlinecustomer A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `customercode`, `title`, `familyname`, `firstname`, `addressline1`, `addressline2`, `postcode`, `country`, `email`, `Skype`, `landline`, `mobile`, `workphone`, `fax`, `proffession`, `gender`, `passportno`, `sladdressline1`, `sladdressline2`, `sladdressline3`, `sllandline`, `slmobile`, `slcontactperson`, `onlineuserid`, `paymentsuccess`, `blockrefno`, `paidamt`, `paidamtissuedreceiptstatus`, `utilized`, `deleted`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime`, `deletedby`, `deleteddate`, `deletedtime` FROM `onlinecustomer` WHERE `customercode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Onlinecustomer();
            $obj->hydrate($row);
            OnlinecustomerPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Onlinecustomer|Onlinecustomer[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Onlinecustomer[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OnlinecustomerPeer::CUSTOMERCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OnlinecustomerPeer::CUSTOMERCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the customercode column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomercode(1234); // WHERE customercode = 1234
     * $query->filterByCustomercode(array(12, 34)); // WHERE customercode IN (12, 34)
     * $query->filterByCustomercode(array('min' => 12)); // WHERE customercode >= 12
     * $query->filterByCustomercode(array('max' => 12)); // WHERE customercode <= 12
     * </code>
     *
     * @param     mixed $customercode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByCustomercode($customercode = null, $comparison = null)
    {
        if (is_array($customercode)) {
            $useMinMax = false;
            if (isset($customercode['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::CUSTOMERCODE, $customercode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customercode['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::CUSTOMERCODE, $customercode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::CUSTOMERCODE, $customercode, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the familyname column
     *
     * Example usage:
     * <code>
     * $query->filterByFamilyname('fooValue');   // WHERE familyname = 'fooValue'
     * $query->filterByFamilyname('%fooValue%'); // WHERE familyname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $familyname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::FAMILYNAME, $familyname, $comparison);
    }

    /**
     * Filter the query on the firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE firstname = 'fooValue'
     * $query->filterByFirstname('%fooValue%'); // WHERE firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the addressline1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAddressline1('fooValue');   // WHERE addressline1 = 'fooValue'
     * $query->filterByAddressline1('%fooValue%'); // WHERE addressline1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addressline1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::ADDRESSLINE1, $addressline1, $comparison);
    }

    /**
     * Filter the query on the addressline2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAddressline2('fooValue');   // WHERE addressline2 = 'fooValue'
     * $query->filterByAddressline2('%fooValue%'); // WHERE addressline2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addressline2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::ADDRESSLINE2, $addressline2, $comparison);
    }

    /**
     * Filter the query on the postcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPostcode('fooValue');   // WHERE postcode = 'fooValue'
     * $query->filterByPostcode('%fooValue%'); // WHERE postcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::POSTCODE, $postcode, $comparison);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Skype column
     *
     * Example usage:
     * <code>
     * $query->filterBySkype('fooValue');   // WHERE Skype = 'fooValue'
     * $query->filterBySkype('%fooValue%'); // WHERE Skype LIKE '%fooValue%'
     * </code>
     *
     * @param     string $skype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SKYPE, $skype, $comparison);
    }

    /**
     * Filter the query on the landline column
     *
     * Example usage:
     * <code>
     * $query->filterByLandline('fooValue');   // WHERE landline = 'fooValue'
     * $query->filterByLandline('%fooValue%'); // WHERE landline LIKE '%fooValue%'
     * </code>
     *
     * @param     string $landline The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::LANDLINE, $landline, $comparison);
    }

    /**
     * Filter the query on the mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByMobile('fooValue');   // WHERE mobile = 'fooValue'
     * $query->filterByMobile('%fooValue%'); // WHERE mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mobile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::MOBILE, $mobile, $comparison);
    }

    /**
     * Filter the query on the workphone column
     *
     * Example usage:
     * <code>
     * $query->filterByWorkphone('fooValue');   // WHERE workphone = 'fooValue'
     * $query->filterByWorkphone('%fooValue%'); // WHERE workphone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $workphone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::WORKPHONE, $workphone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the proffession column
     *
     * Example usage:
     * <code>
     * $query->filterByProffession('fooValue');   // WHERE proffession = 'fooValue'
     * $query->filterByProffession('%fooValue%'); // WHERE proffession LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proffession The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::PROFFESSION, $proffession, $comparison);
    }

    /**
     * Filter the query on the gender column
     *
     * Example usage:
     * <code>
     * $query->filterByGender('fooValue');   // WHERE gender = 'fooValue'
     * $query->filterByGender('%fooValue%'); // WHERE gender LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gender The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::GENDER, $gender, $comparison);
    }

    /**
     * Filter the query on the passportno column
     *
     * Example usage:
     * <code>
     * $query->filterByPassportno('fooValue');   // WHERE passportno = 'fooValue'
     * $query->filterByPassportno('%fooValue%'); // WHERE passportno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $passportno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::PASSPORTNO, $passportno, $comparison);
    }

    /**
     * Filter the query on the sladdressline1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySladdressline1('fooValue');   // WHERE sladdressline1 = 'fooValue'
     * $query->filterBySladdressline1('%fooValue%'); // WHERE sladdressline1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sladdressline1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SLADDRESSLINE1, $sladdressline1, $comparison);
    }

    /**
     * Filter the query on the sladdressline2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySladdressline2('fooValue');   // WHERE sladdressline2 = 'fooValue'
     * $query->filterBySladdressline2('%fooValue%'); // WHERE sladdressline2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sladdressline2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SLADDRESSLINE2, $sladdressline2, $comparison);
    }

    /**
     * Filter the query on the sladdressline3 column
     *
     * Example usage:
     * <code>
     * $query->filterBySladdressline3('fooValue');   // WHERE sladdressline3 = 'fooValue'
     * $query->filterBySladdressline3('%fooValue%'); // WHERE sladdressline3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sladdressline3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SLADDRESSLINE3, $sladdressline3, $comparison);
    }

    /**
     * Filter the query on the sllandline column
     *
     * Example usage:
     * <code>
     * $query->filterBySllandline('fooValue');   // WHERE sllandline = 'fooValue'
     * $query->filterBySllandline('%fooValue%'); // WHERE sllandline LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sllandline The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SLLANDLINE, $sllandline, $comparison);
    }

    /**
     * Filter the query on the slmobile column
     *
     * Example usage:
     * <code>
     * $query->filterBySlmobile('fooValue');   // WHERE slmobile = 'fooValue'
     * $query->filterBySlmobile('%fooValue%'); // WHERE slmobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slmobile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SLMOBILE, $slmobile, $comparison);
    }

    /**
     * Filter the query on the slcontactperson column
     *
     * Example usage:
     * <code>
     * $query->filterBySlcontactperson('fooValue');   // WHERE slcontactperson = 'fooValue'
     * $query->filterBySlcontactperson('%fooValue%'); // WHERE slcontactperson LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slcontactperson The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OnlinecustomerPeer::SLCONTACTPERSON, $slcontactperson, $comparison);
    }

    /**
     * Filter the query on the onlineuserid column
     *
     * Example usage:
     * <code>
     * $query->filterByOnlineuserid(1234); // WHERE onlineuserid = 1234
     * $query->filterByOnlineuserid(array(12, 34)); // WHERE onlineuserid IN (12, 34)
     * $query->filterByOnlineuserid(array('min' => 12)); // WHERE onlineuserid >= 12
     * $query->filterByOnlineuserid(array('max' => 12)); // WHERE onlineuserid <= 12
     * </code>
     *
     * @param     mixed $onlineuserid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByOnlineuserid($onlineuserid = null, $comparison = null)
    {
        if (is_array($onlineuserid)) {
            $useMinMax = false;
            if (isset($onlineuserid['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ONLINEUSERID, $onlineuserid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($onlineuserid['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ONLINEUSERID, $onlineuserid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::ONLINEUSERID, $onlineuserid, $comparison);
    }

    /**
     * Filter the query on the paymentsuccess column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentsuccess(true); // WHERE paymentsuccess = true
     * $query->filterByPaymentsuccess('yes'); // WHERE paymentsuccess = true
     * </code>
     *
     * @param     boolean|string $paymentsuccess The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByPaymentsuccess($paymentsuccess = null, $comparison = null)
    {
        if (is_string($paymentsuccess)) {
            $paymentsuccess = in_array(strtolower($paymentsuccess), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OnlinecustomerPeer::PAYMENTSUCCESS, $paymentsuccess, $comparison);
    }

    /**
     * Filter the query on the blockrefno column
     *
     * Example usage:
     * <code>
     * $query->filterByBlockrefno(1234); // WHERE blockrefno = 1234
     * $query->filterByBlockrefno(array(12, 34)); // WHERE blockrefno IN (12, 34)
     * $query->filterByBlockrefno(array('min' => 12)); // WHERE blockrefno >= 12
     * $query->filterByBlockrefno(array('max' => 12)); // WHERE blockrefno <= 12
     * </code>
     *
     * @param     mixed $blockrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByBlockrefno($blockrefno = null, $comparison = null)
    {
        if (is_array($blockrefno)) {
            $useMinMax = false;
            if (isset($blockrefno['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::BLOCKREFNO, $blockrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($blockrefno['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::BLOCKREFNO, $blockrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::BLOCKREFNO, $blockrefno, $comparison);
    }

    /**
     * Filter the query on the paidamt column
     *
     * Example usage:
     * <code>
     * $query->filterByPaidamt(1234); // WHERE paidamt = 1234
     * $query->filterByPaidamt(array(12, 34)); // WHERE paidamt IN (12, 34)
     * $query->filterByPaidamt(array('min' => 12)); // WHERE paidamt >= 12
     * $query->filterByPaidamt(array('max' => 12)); // WHERE paidamt <= 12
     * </code>
     *
     * @param     mixed $paidamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByPaidamt($paidamt = null, $comparison = null)
    {
        if (is_array($paidamt)) {
            $useMinMax = false;
            if (isset($paidamt['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::PAIDAMT, $paidamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paidamt['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::PAIDAMT, $paidamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::PAIDAMT, $paidamt, $comparison);
    }

    /**
     * Filter the query on the paidamtissuedreceiptstatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPaidamtissuedreceiptstatus(true); // WHERE paidamtissuedreceiptstatus = true
     * $query->filterByPaidamtissuedreceiptstatus('yes'); // WHERE paidamtissuedreceiptstatus = true
     * </code>
     *
     * @param     boolean|string $paidamtissuedreceiptstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByPaidamtissuedreceiptstatus($paidamtissuedreceiptstatus = null, $comparison = null)
    {
        if (is_string($paidamtissuedreceiptstatus)) {
            $paidamtissuedreceiptstatus = in_array(strtolower($paidamtissuedreceiptstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OnlinecustomerPeer::PAIDAMTISSUEDRECEIPTSTATUS, $paidamtissuedreceiptstatus, $comparison);
    }

    /**
     * Filter the query on the utilized column
     *
     * Example usage:
     * <code>
     * $query->filterByUtilized(true); // WHERE utilized = true
     * $query->filterByUtilized('yes'); // WHERE utilized = true
     * </code>
     *
     * @param     boolean|string $utilized The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByUtilized($utilized = null, $comparison = null)
    {
        if (is_string($utilized)) {
            $utilized = in_array(strtolower($utilized), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OnlinecustomerPeer::UTILIZED, $utilized, $comparison);
    }

    /**
     * Filter the query on the deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByDeleted(true); // WHERE deleted = true
     * $query->filterByDeleted('yes'); // WHERE deleted = true
     * </code>
     *
     * @param     boolean|string $deleted The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OnlinecustomerPeer::DELETED, $deleted, $comparison);
    }

    /**
     * Filter the query on the addedby column
     *
     * Example usage:
     * <code>
     * $query->filterByAddedby(1234); // WHERE addedby = 1234
     * $query->filterByAddedby(array(12, 34)); // WHERE addedby IN (12, 34)
     * $query->filterByAddedby(array('min' => 12)); // WHERE addedby >= 12
     * $query->filterByAddedby(array('max' => 12)); // WHERE addedby <= 12
     * </code>
     *
     * @param     mixed $addedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByAddedby($addedby = null, $comparison = null)
    {
        if (is_array($addedby)) {
            $useMinMax = false;
            if (isset($addedby['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ADDEDBY, $addedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedby['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ADDEDBY, $addedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::ADDEDBY, $addedby, $comparison);
    }

    /**
     * Filter the query on the addeddate column
     *
     * Example usage:
     * <code>
     * $query->filterByAddeddate('2011-03-14'); // WHERE addeddate = '2011-03-14'
     * $query->filterByAddeddate('now'); // WHERE addeddate = '2011-03-14'
     * $query->filterByAddeddate(array('max' => 'yesterday')); // WHERE addeddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $addeddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByAddeddate($addeddate = null, $comparison = null)
    {
        if (is_array($addeddate)) {
            $useMinMax = false;
            if (isset($addeddate['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ADDEDDATE, $addeddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addeddate['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ADDEDDATE, $addeddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::ADDEDDATE, $addeddate, $comparison);
    }

    /**
     * Filter the query on the addedtime column
     *
     * Example usage:
     * <code>
     * $query->filterByAddedtime('2011-03-14'); // WHERE addedtime = '2011-03-14'
     * $query->filterByAddedtime('now'); // WHERE addedtime = '2011-03-14'
     * $query->filterByAddedtime(array('max' => 'yesterday')); // WHERE addedtime < '2011-03-13'
     * </code>
     *
     * @param     mixed $addedtime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByAddedtime($addedtime = null, $comparison = null)
    {
        if (is_array($addedtime)) {
            $useMinMax = false;
            if (isset($addedtime['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ADDEDTIME, $addedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($addedtime['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::ADDEDTIME, $addedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::ADDEDTIME, $addedtime, $comparison);
    }

    /**
     * Filter the query on the lastmodifiedby column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifiedby(1234); // WHERE lastmodifiedby = 1234
     * $query->filterByLastmodifiedby(array(12, 34)); // WHERE lastmodifiedby IN (12, 34)
     * $query->filterByLastmodifiedby(array('min' => 12)); // WHERE lastmodifiedby >= 12
     * $query->filterByLastmodifiedby(array('max' => 12)); // WHERE lastmodifiedby <= 12
     * </code>
     *
     * @param     mixed $lastmodifiedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedby($lastmodifiedby = null, $comparison = null)
    {
        if (is_array($lastmodifiedby)) {
            $useMinMax = false;
            if (isset($lastmodifiedby['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDBY, $lastmodifiedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedby['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDBY, $lastmodifiedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDBY, $lastmodifiedby, $comparison);
    }

    /**
     * Filter the query on the lastmodifieddate column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifieddate('2011-03-14'); // WHERE lastmodifieddate = '2011-03-14'
     * $query->filterByLastmodifieddate('now'); // WHERE lastmodifieddate = '2011-03-14'
     * $query->filterByLastmodifieddate(array('max' => 'yesterday')); // WHERE lastmodifieddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastmodifieddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByLastmodifieddate($lastmodifieddate = null, $comparison = null)
    {
        if (is_array($lastmodifieddate)) {
            $useMinMax = false;
            if (isset($lastmodifieddate['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDDATE, $lastmodifieddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifieddate['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDDATE, $lastmodifieddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDDATE, $lastmodifieddate, $comparison);
    }

    /**
     * Filter the query on the lastmodifiedtime column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodifiedtime('2011-03-14'); // WHERE lastmodifiedtime = '2011-03-14'
     * $query->filterByLastmodifiedtime('now'); // WHERE lastmodifiedtime = '2011-03-14'
     * $query->filterByLastmodifiedtime(array('max' => 'yesterday')); // WHERE lastmodifiedtime < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastmodifiedtime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByLastmodifiedtime($lastmodifiedtime = null, $comparison = null)
    {
        if (is_array($lastmodifiedtime)) {
            $useMinMax = false;
            if (isset($lastmodifiedtime['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDTIME, $lastmodifiedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodifiedtime['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDTIME, $lastmodifiedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::LASTMODIFIEDTIME, $lastmodifiedtime, $comparison);
    }

    /**
     * Filter the query on the deletedby column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedby(1234); // WHERE deletedby = 1234
     * $query->filterByDeletedby(array(12, 34)); // WHERE deletedby IN (12, 34)
     * $query->filterByDeletedby(array('min' => 12)); // WHERE deletedby >= 12
     * $query->filterByDeletedby(array('max' => 12)); // WHERE deletedby <= 12
     * </code>
     *
     * @param     mixed $deletedby The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByDeletedby($deletedby = null, $comparison = null)
    {
        if (is_array($deletedby)) {
            $useMinMax = false;
            if (isset($deletedby['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::DELETEDBY, $deletedby['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedby['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::DELETEDBY, $deletedby['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::DELETEDBY, $deletedby, $comparison);
    }

    /**
     * Filter the query on the deleteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByDeleteddate('2011-03-14'); // WHERE deleteddate = '2011-03-14'
     * $query->filterByDeleteddate('now'); // WHERE deleteddate = '2011-03-14'
     * $query->filterByDeleteddate(array('max' => 'yesterday')); // WHERE deleteddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $deleteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByDeleteddate($deleteddate = null, $comparison = null)
    {
        if (is_array($deleteddate)) {
            $useMinMax = false;
            if (isset($deleteddate['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::DELETEDDATE, $deleteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deleteddate['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::DELETEDDATE, $deleteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::DELETEDDATE, $deleteddate, $comparison);
    }

    /**
     * Filter the query on the deletedtime column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedtime('2011-03-14'); // WHERE deletedtime = '2011-03-14'
     * $query->filterByDeletedtime('now'); // WHERE deletedtime = '2011-03-14'
     * $query->filterByDeletedtime(array('max' => 'yesterday')); // WHERE deletedtime < '2011-03-13'
     * </code>
     *
     * @param     mixed $deletedtime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function filterByDeletedtime($deletedtime = null, $comparison = null)
    {
        if (is_array($deletedtime)) {
            $useMinMax = false;
            if (isset($deletedtime['min'])) {
                $this->addUsingAlias(OnlinecustomerPeer::DELETEDTIME, $deletedtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedtime['max'])) {
                $this->addUsingAlias(OnlinecustomerPeer::DELETEDTIME, $deletedtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OnlinecustomerPeer::DELETEDTIME, $deletedtime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Onlinecustomer $onlinecustomer Object to remove from the list of results
     *
     * @return OnlinecustomerQuery The current query, for fluid interface
     */
    public function prune($onlinecustomer = null)
    {
        if ($onlinecustomer) {
            $this->addUsingAlias(OnlinecustomerPeer::CUSTOMERCODE, $onlinecustomer->getCustomercode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
