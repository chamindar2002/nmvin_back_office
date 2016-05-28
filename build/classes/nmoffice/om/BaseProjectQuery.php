<?php


/**
 * Base class that represents a query for the 'project' table.
 *
 * projects
 *
 * @method ProjectQuery orderByProjectcode($order = Criteria::ASC) Order by the projectcode column
 * @method ProjectQuery orderByLocationcode($order = Criteria::ASC) Order by the locationcode column
 * @method ProjectQuery orderByProjectname($order = Criteria::ASC) Order by the projectname column
 * @method ProjectQuery orderByNofblocks($order = Criteria::ASC) Order by the nofblocks column
 * @method ProjectQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method ProjectQuery orderByAddedby($order = Criteria::ASC) Order by the addedby column
 * @method ProjectQuery orderByAddeddate($order = Criteria::ASC) Order by the addeddate column
 * @method ProjectQuery orderByAddedtime($order = Criteria::ASC) Order by the addedtime column
 * @method ProjectQuery orderByLastmodifiedby($order = Criteria::ASC) Order by the lastmodifiedby column
 * @method ProjectQuery orderByLastmodifieddate($order = Criteria::ASC) Order by the lastmodifieddate column
 * @method ProjectQuery orderByLastmodifiedtime($order = Criteria::ASC) Order by the lastmodifiedtime column
 * @method ProjectQuery orderByDeletedby($order = Criteria::ASC) Order by the deletedby column
 * @method ProjectQuery orderByDeleteddate($order = Criteria::ASC) Order by the deleteddate column
 * @method ProjectQuery orderByDeletedtime($order = Criteria::ASC) Order by the deletedtime column
 *
 * @method ProjectQuery groupByProjectcode() Group by the projectcode column
 * @method ProjectQuery groupByLocationcode() Group by the locationcode column
 * @method ProjectQuery groupByProjectname() Group by the projectname column
 * @method ProjectQuery groupByNofblocks() Group by the nofblocks column
 * @method ProjectQuery groupByDeleted() Group by the deleted column
 * @method ProjectQuery groupByAddedby() Group by the addedby column
 * @method ProjectQuery groupByAddeddate() Group by the addeddate column
 * @method ProjectQuery groupByAddedtime() Group by the addedtime column
 * @method ProjectQuery groupByLastmodifiedby() Group by the lastmodifiedby column
 * @method ProjectQuery groupByLastmodifieddate() Group by the lastmodifieddate column
 * @method ProjectQuery groupByLastmodifiedtime() Group by the lastmodifiedtime column
 * @method ProjectQuery groupByDeletedby() Group by the deletedby column
 * @method ProjectQuery groupByDeleteddate() Group by the deleteddate column
 * @method ProjectQuery groupByDeletedtime() Group by the deletedtime column
 *
 * @method ProjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectQuery leftJoinLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the Location relation
 * @method ProjectQuery rightJoinLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Location relation
 * @method ProjectQuery innerJoinLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the Location relation
 *
 * @method ProjectQuery leftJoinProjectdetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Projectdetails relation
 * @method ProjectQuery rightJoinProjectdetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Projectdetails relation
 * @method ProjectQuery innerJoinProjectdetails($relationAlias = null) Adds a INNER JOIN clause to the query using the Projectdetails relation
 *
 * @method ProjectQuery leftJoinCustomerreceipts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customerreceipts relation
 * @method ProjectQuery rightJoinCustomerreceipts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customerreceipts relation
 * @method ProjectQuery innerJoinCustomerreceipts($relationAlias = null) Adds a INNER JOIN clause to the query using the Customerreceipts relation
 *
 * @method ProjectQuery leftJoinPaymentplan($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paymentplan relation
 * @method ProjectQuery rightJoinPaymentplan($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paymentplan relation
 * @method ProjectQuery innerJoinPaymentplan($relationAlias = null) Adds a INNER JOIN clause to the query using the Paymentplan relation
 *
 * @method ProjectQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method ProjectQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method ProjectQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method ProjectQuery leftJoinRefunds($relationAlias = null) Adds a LEFT JOIN clause to the query using the Refunds relation
 * @method ProjectQuery rightJoinRefunds($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Refunds relation
 * @method ProjectQuery innerJoinRefunds($relationAlias = null) Adds a INNER JOIN clause to the query using the Refunds relation
 *
 * @method Project findOne(PropelPDO $con = null) Return the first Project matching the query
 * @method Project findOneOrCreate(PropelPDO $con = null) Return the first Project matching the query, or a new Project object populated from the query conditions when no match is found
 *
 * @method Project findOneByLocationcode(int $locationcode) Return the first Project filtered by the locationcode column
 * @method Project findOneByProjectname(string $projectname) Return the first Project filtered by the projectname column
 * @method Project findOneByNofblocks(int $nofblocks) Return the first Project filtered by the nofblocks column
 * @method Project findOneByDeleted(boolean $deleted) Return the first Project filtered by the deleted column
 * @method Project findOneByAddedby(int $addedby) Return the first Project filtered by the addedby column
 * @method Project findOneByAddeddate(string $addeddate) Return the first Project filtered by the addeddate column
 * @method Project findOneByAddedtime(string $addedtime) Return the first Project filtered by the addedtime column
 * @method Project findOneByLastmodifiedby(int $lastmodifiedby) Return the first Project filtered by the lastmodifiedby column
 * @method Project findOneByLastmodifieddate(string $lastmodifieddate) Return the first Project filtered by the lastmodifieddate column
 * @method Project findOneByLastmodifiedtime(string $lastmodifiedtime) Return the first Project filtered by the lastmodifiedtime column
 * @method Project findOneByDeletedby(int $deletedby) Return the first Project filtered by the deletedby column
 * @method Project findOneByDeleteddate(string $deleteddate) Return the first Project filtered by the deleteddate column
 * @method Project findOneByDeletedtime(string $deletedtime) Return the first Project filtered by the deletedtime column
 *
 * @method array findByProjectcode(int $projectcode) Return Project objects filtered by the projectcode column
 * @method array findByLocationcode(int $locationcode) Return Project objects filtered by the locationcode column
 * @method array findByProjectname(string $projectname) Return Project objects filtered by the projectname column
 * @method array findByNofblocks(int $nofblocks) Return Project objects filtered by the nofblocks column
 * @method array findByDeleted(boolean $deleted) Return Project objects filtered by the deleted column
 * @method array findByAddedby(int $addedby) Return Project objects filtered by the addedby column
 * @method array findByAddeddate(string $addeddate) Return Project objects filtered by the addeddate column
 * @method array findByAddedtime(string $addedtime) Return Project objects filtered by the addedtime column
 * @method array findByLastmodifiedby(int $lastmodifiedby) Return Project objects filtered by the lastmodifiedby column
 * @method array findByLastmodifieddate(string $lastmodifieddate) Return Project objects filtered by the lastmodifieddate column
 * @method array findByLastmodifiedtime(string $lastmodifiedtime) Return Project objects filtered by the lastmodifiedtime column
 * @method array findByDeletedby(int $deletedby) Return Project objects filtered by the deletedby column
 * @method array findByDeleteddate(string $deleteddate) Return Project objects filtered by the deleteddate column
 * @method array findByDeletedtime(string $deletedtime) Return Project objects filtered by the deletedtime column
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
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'nmwndb';
        }
        if (null === $modelName) {
            $modelName = 'Project';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectQuery) {
            return $criteria;
        }
        $query = new ProjectQuery(null, null, $modelAlias);

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
     * @return   Project|Project[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Project A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByProjectcode($key, $con = null)
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
     * @return                 Project A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `projectcode`, `locationcode`, `projectname`, `nofblocks`, `deleted`, `addedby`, `addeddate`, `addedtime`, `lastmodifiedby`, `lastmodifieddate`, `lastmodifiedtime`, `deletedby`, `deleteddate`, `deletedtime` FROM `project` WHERE `projectcode` = :p0';
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
            $obj = new Project();
            $obj->hydrate($row);
            ProjectPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Project|Project[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Project[]|mixed the list of results, formatted by the current formatter
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectPeer::PROJECTCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the projectcode column
     *
     * Example usage:
     * <code>
     * $query->filterByProjectcode(1234); // WHERE projectcode = 1234
     * $query->filterByProjectcode(array(12, 34)); // WHERE projectcode IN (12, 34)
     * $query->filterByProjectcode(array('min' => 12)); // WHERE projectcode >= 12
     * $query->filterByProjectcode(array('max' => 12)); // WHERE projectcode <= 12
     * </code>
     *
     * @param     mixed $projectcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectQuery The current query, for fluid interface
     */
    public function filterByProjectcode($projectcode = null, $comparison = null)
    {
        if (is_array($projectcode)) {
            $useMinMax = false;
            if (isset($projectcode['min'])) {
                $this->addUsingAlias(ProjectPeer::PROJECTCODE, $projectcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projectcode['max'])) {
                $this->addUsingAlias(ProjectPeer::PROJECTCODE, $projectcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectPeer::PROJECTCODE, $projectcode, $comparison);
    }

    /**
     * Filter the query on the locationcode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationcode(1234); // WHERE locationcode = 1234
     * $query->filterByLocationcode(array(12, 34)); // WHERE locationcode IN (12, 34)
     * $query->filterByLocationcode(array('min' => 12)); // WHERE locationcode >= 12
     * $query->filterByLocationcode(array('max' => 12)); // WHERE locationcode <= 12
     * </code>
     *
     * @see       filterByLocation()
     *
     * @param     mixed $locationcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByProjectname('fooValue');   // WHERE projectname = 'fooValue'
     * $query->filterByProjectname('%fooValue%'); // WHERE projectname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $projectname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectQuery The current query, for fluid interface
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
     * Example usage:
     * <code>
     * $query->filterByNofblocks(1234); // WHERE nofblocks = 1234
     * $query->filterByNofblocks(array(12, 34)); // WHERE nofblocks IN (12, 34)
     * $query->filterByNofblocks(array('min' => 12)); // WHERE nofblocks >= 12
     * $query->filterByNofblocks(array('max' => 12)); // WHERE nofblocks <= 12
     * </code>
     *
     * @param     mixed $nofblocks The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProjectPeer::DELETED, $deleted, $comparison);
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @return ProjectQuery The current query, for fluid interface
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
     * @param   Location|PropelObjectCollection $location The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLocation($location, $comparison = null)
    {
        if ($location instanceof Location) {
            return $this
                ->addUsingAlias(ProjectPeer::LOCATIONCODE, $location->getLocationcode(), $comparison);
        } elseif ($location instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectPeer::LOCATIONCODE, $location->toKeyValue('PrimaryKey', 'Locationcode'), $comparison);
        } else {
            throw new PropelException('filterByLocation() only accepts arguments of type Location or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Location relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   LocationQuery A secondary query class using the current class as primary query
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
     * @param   Projectdetails|PropelObjectCollection $projectdetails  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProjectdetails($projectdetails, $comparison = null)
    {
        if ($projectdetails instanceof Projectdetails) {
            return $this
                ->addUsingAlias(ProjectPeer::PROJECTCODE, $projectdetails->getProjectcode(), $comparison);
        } elseif ($projectdetails instanceof PropelObjectCollection) {
            return $this
                ->useProjectdetailsQuery()
                ->filterByPrimaryKeys($projectdetails->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProjectdetails() only accepts arguments of type Projectdetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Projectdetails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   ProjectdetailsQuery A secondary query class using the current class as primary query
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
     * @param   Customerreceipts|PropelObjectCollection $customerreceipts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerreceipts($customerreceipts, $comparison = null)
    {
        if ($customerreceipts instanceof Customerreceipts) {
            return $this
                ->addUsingAlias(ProjectPeer::PROJECTCODE, $customerreceipts->getProjectcode(), $comparison);
        } elseif ($customerreceipts instanceof PropelObjectCollection) {
            return $this
                ->useCustomerreceiptsQuery()
                ->filterByPrimaryKeys($customerreceipts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerreceipts() only accepts arguments of type Customerreceipts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customerreceipts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   CustomerreceiptsQuery A secondary query class using the current class as primary query
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
     * @param   Paymentplan|PropelObjectCollection $paymentplan  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaymentplan($paymentplan, $comparison = null)
    {
        if ($paymentplan instanceof Paymentplan) {
            return $this
                ->addUsingAlias(ProjectPeer::PROJECTCODE, $paymentplan->getProjectcode(), $comparison);
        } elseif ($paymentplan instanceof PropelObjectCollection) {
            return $this
                ->usePaymentplanQuery()
                ->filterByPrimaryKeys($paymentplan->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPaymentplan() only accepts arguments of type Paymentplan or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paymentplan relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   PaymentplanQuery A secondary query class using the current class as primary query
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
     * @param   Sales|PropelObjectCollection $sales  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySales($sales, $comparison = null)
    {
        if ($sales instanceof Sales) {
            return $this
                ->addUsingAlias(ProjectPeer::PROJECTCODE, $sales->getProjectcode(), $comparison);
        } elseif ($sales instanceof PropelObjectCollection) {
            return $this
                ->useSalesQuery()
                ->filterByPrimaryKeys($sales->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySales() only accepts arguments of type Sales or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sales relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectQuery The current query, for fluid interface
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
        if ($relationAlias) {
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
     * @return   SalesQuery A secondary query class using the current class as primary query
     */
    public function useSalesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSales($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sales', 'SalesQuery');
    }

    /**
     * Filter the query by a related Refunds object
     *
     * @param   Refunds|PropelObjectCollection $refunds  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRefunds($refunds, $comparison = null)
    {
        if ($refunds instanceof Refunds) {
            return $this
                ->addUsingAlias(ProjectPeer::PROJECTCODE, $refunds->getProjectcode(), $comparison);
        } elseif ($refunds instanceof PropelObjectCollection) {
            return $this
                ->useRefundsQuery()
                ->filterByPrimaryKeys($refunds->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRefunds() only accepts arguments of type Refunds or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Refunds relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectQuery The current query, for fluid interface
     */
    public function joinRefunds($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Refunds');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Refunds');
        }

        return $this;
    }

    /**
     * Use the Refunds relation Refunds object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RefundsQuery A secondary query class using the current class as primary query
     */
    public function useRefundsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRefunds($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Refunds', 'RefundsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Project $project Object to remove from the list of results
     *
     * @return ProjectQuery The current query, for fluid interface
     */
    public function prune($project = null)
    {
        if ($project) {
            $this->addUsingAlias(ProjectPeer::PROJECTCODE, $project->getProjectcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
