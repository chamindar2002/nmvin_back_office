<?php


/**
 * Base class that represents a row from the 'customerreceipts' table.
 *
 * customer payment receipts
 *
 * @package    propel.generator.nmoffice.om
 */
abstract class BaseCustomerreceipts extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CustomerreceiptsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CustomerreceiptsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the receiptno field.
     * @var        int
     */
    protected $receiptno;

    /**
     * The value for the salerefno field.
     * @var        int
     */
    protected $salerefno;

    /**
     * The value for the locationcode field.
     * @var        int
     */
    protected $locationcode;

    /**
     * The value for the projectcode field.
     * @var        int
     */
    protected $projectcode;

    /**
     * The value for the customercode field.
     * @var        int
     */
    protected $customercode;

    /**
     * The value for the receiptdate field.
     * @var        string
     */
    protected $receiptdate;

    /**
     * The value for the oldreceiptno field.
     * @var        string
     */
    protected $oldreceiptno;

    /**
     * The value for the blocknumber field.
     * @var        int
     */
    protected $blocknumber;

    /**
     * The value for the paidfor field.
     * @var        string
     */
    protected $paidfor;

    /**
     * The value for the paymenttype field.
     * @var        int
     */
    protected $paymenttype;

    /**
     * The value for the paidamount field.
     * @var        double
     */
    protected $paidamount;

    /**
     * The value for the installment_no field.
     * @var        int
     */
    protected $installment_no;

    /**
     * The value for the deleted field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $deleted;

    /**
     * The value for the addedby field.
     * @var        int
     */
    protected $addedby;

    /**
     * The value for the addeddate field.
     * @var        string
     */
    protected $addeddate;

    /**
     * The value for the addedtime field.
     * @var        string
     */
    protected $addedtime;

    /**
     * The value for the lastmodifiedby field.
     * @var        int
     */
    protected $lastmodifiedby;

    /**
     * The value for the lastmodifieddate field.
     * @var        string
     */
    protected $lastmodifieddate;

    /**
     * The value for the lastmodifiedtime field.
     * @var        string
     */
    protected $lastmodifiedtime;

    /**
     * The value for the deletedby field.
     * @var        int
     */
    protected $deletedby;

    /**
     * The value for the deleteddate field.
     * @var        string
     */
    protected $deleteddate;

    /**
     * The value for the deletedtime field.
     * @var        string
     */
    protected $deletedtime;

    /**
     * @var        Location
     */
    protected $aLocation;

    /**
     * @var        Project
     */
    protected $aProject;

    /**
     * @var        Customerdetails
     */
    protected $aCustomerdetails;

    /**
     * @var        Sales
     */
    protected $aSales;

    /**
     * @var        PropelObjectCollection|CustomerReceiptmethodofpayment[] Collection to store aggregation of CustomerReceiptmethodofpayment objects.
     */
    protected $collCustomerReceiptmethodofpayments;
    protected $collCustomerReceiptmethodofpaymentsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $customerReceiptmethodofpaymentsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->deleted = false;
    }

    /**
     * Initializes internal state of BaseCustomerreceipts object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [receiptno] column value.
     * receipt number
     * @return int
     */
    public function getReceiptno()
    {

        return $this->receiptno;
    }

    /**
     * Get the [salerefno] column value.
     * sale reference number
     * @return int
     */
    public function getSalerefno()
    {

        return $this->salerefno;
    }

    /**
     * Get the [locationcode] column value.
     * Location Code
     * @return int
     */
    public function getLocationcode()
    {

        return $this->locationcode;
    }

    /**
     * Get the [projectcode] column value.
     * project code
     * @return int
     */
    public function getProjectcode()
    {

        return $this->projectcode;
    }

    /**
     * Get the [customercode] column value.
     * customer code
     * @return int
     */
    public function getCustomercode()
    {

        return $this->customercode;
    }

    /**
     * Get the [optionally formatted] temporal [receiptdate] column value.
     * receipt date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getReceiptdate($format = '%x')
    {
        if ($this->receiptdate === null) {
            return null;
        }

        if ($this->receiptdate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->receiptdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->receiptdate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [oldreceiptno] column value.
     * Receipt Book Number
     * @return string
     */
    public function getOldreceiptno()
    {

        return $this->oldreceiptno;
    }

    /**
     * Get the [blocknumber] column value.
     * block no
     * @return int
     */
    public function getBlocknumber()
    {

        return $this->blocknumber;
    }

    /**
     * Get the [paidfor] column value.
     * RC:reservation charge,FP:fullpayment,PP:partpayment,In:installment
     * @return string
     */
    public function getPaidfor()
    {

        return $this->paidfor;
    }

    /**
     * Get the [paymenttype] column value.
     * paymenttype 1=cash,2=cheque,...
     * @return int
     */
    public function getPaymenttype()
    {

        return $this->paymenttype;
    }

    /**
     * Get the [paidamount] column value.
     * paid amount
     * @return double
     */
    public function getPaidamount()
    {

        return $this->paidamount;
    }

    /**
     * Get the [installment_no] column value.
     * installment number
     * @return int
     */
    public function getInstallmentNo()
    {

        return $this->installment_no;
    }

    /**
     * Get the [deleted] column value.
     * Record deleted
     * @return boolean
     */
    public function getDeleted()
    {

        return $this->deleted;
    }

    /**
     * Get the [addedby] column value.
     * Added by
     * @return int
     */
    public function getAddedby()
    {

        return $this->addedby;
    }

    /**
     * Get the [optionally formatted] temporal [addeddate] column value.
     * Added date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAddeddate($format = '%x')
    {
        if ($this->addeddate === null) {
            return null;
        }

        if ($this->addeddate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->addeddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->addeddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [addedtime] column value.
     * Added time
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAddedtime($format = '%X')
    {
        if ($this->addedtime === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->addedtime);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->addedtime, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [lastmodifiedby] column value.
     * Last modified by
     * @return int
     */
    public function getLastmodifiedby()
    {

        return $this->lastmodifiedby;
    }

    /**
     * Get the [optionally formatted] temporal [lastmodifieddate] column value.
     * Last modified date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastmodifieddate($format = '%x')
    {
        if ($this->lastmodifieddate === null) {
            return null;
        }

        if ($this->lastmodifieddate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lastmodifieddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastmodifieddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [lastmodifiedtime] column value.
     * Last modified time
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastmodifiedtime($format = '%X')
    {
        if ($this->lastmodifiedtime === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->lastmodifiedtime);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lastmodifiedtime, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [deletedby] column value.
     * Deleted by
     * @return int
     */
    public function getDeletedby()
    {

        return $this->deletedby;
    }

    /**
     * Get the [optionally formatted] temporal [deleteddate] column value.
     * Deleted Date
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeleteddate($format = '%x')
    {
        if ($this->deleteddate === null) {
            return null;
        }

        if ($this->deleteddate === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->deleteddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleteddate, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [deletedtime] column value.
     * Deleted Time
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDeletedtime($format = '%X')
    {
        if ($this->deletedtime === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->deletedtime);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deletedtime, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [receiptno] column.
     * receipt number
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setReceiptno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->receiptno !== $v) {
            $this->receiptno = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::RECEIPTNO;
        }


        return $this;
    } // setReceiptno()

    /**
     * Set the value of [salerefno] column.
     * sale reference number
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setSalerefno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salerefno !== $v) {
            $this->salerefno = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::SALEREFNO;
        }

        if ($this->aSales !== null && $this->aSales->getRefno() !== $v) {
            $this->aSales = null;
        }


        return $this;
    } // setSalerefno()

    /**
     * Set the value of [locationcode] column.
     * Location Code
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setLocationcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locationcode !== $v) {
            $this->locationcode = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::LOCATIONCODE;
        }

        if ($this->aLocation !== null && $this->aLocation->getLocationcode() !== $v) {
            $this->aLocation = null;
        }


        return $this;
    } // setLocationcode()

    /**
     * Set the value of [projectcode] column.
     * project code
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setProjectcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->projectcode !== $v) {
            $this->projectcode = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::PROJECTCODE;
        }

        if ($this->aProject !== null && $this->aProject->getProjectcode() !== $v) {
            $this->aProject = null;
        }


        return $this;
    } // setProjectcode()

    /**
     * Set the value of [customercode] column.
     * customer code
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setCustomercode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customercode !== $v) {
            $this->customercode = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::CUSTOMERCODE;
        }

        if ($this->aCustomerdetails !== null && $this->aCustomerdetails->getCustomercode() !== $v) {
            $this->aCustomerdetails = null;
        }


        return $this;
    } // setCustomercode()

    /**
     * Sets the value of [receiptdate] column to a normalized version of the date/time value specified.
     * receipt date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setReceiptdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->receiptdate !== null || $dt !== null) {
            $currentDateAsString = ($this->receiptdate !== null && $tmpDt = new DateTime($this->receiptdate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->receiptdate = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::RECEIPTDATE;
            }
        } // if either are not null


        return $this;
    } // setReceiptdate()

    /**
     * Set the value of [oldreceiptno] column.
     * Receipt Book Number
     * @param  string $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setOldreceiptno($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oldreceiptno !== $v) {
            $this->oldreceiptno = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::OLDRECEIPTNO;
        }


        return $this;
    } // setOldreceiptno()

    /**
     * Set the value of [blocknumber] column.
     * block no
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setBlocknumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->blocknumber !== $v) {
            $this->blocknumber = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::BLOCKNUMBER;
        }


        return $this;
    } // setBlocknumber()

    /**
     * Set the value of [paidfor] column.
     * RC:reservation charge,FP:fullpayment,PP:partpayment,In:installment
     * @param  string $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setPaidfor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paidfor !== $v) {
            $this->paidfor = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::PAIDFOR;
        }


        return $this;
    } // setPaidfor()

    /**
     * Set the value of [paymenttype] column.
     * paymenttype 1=cash,2=cheque,...
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setPaymenttype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->paymenttype !== $v) {
            $this->paymenttype = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::PAYMENTTYPE;
        }


        return $this;
    } // setPaymenttype()

    /**
     * Set the value of [paidamount] column.
     * paid amount
     * @param  double $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setPaidamount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->paidamount !== $v) {
            $this->paidamount = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::PAIDAMOUNT;
        }


        return $this;
    } // setPaidamount()

    /**
     * Set the value of [installment_no] column.
     * installment number
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setInstallmentNo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->installment_no !== $v) {
            $this->installment_no = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::INSTALLMENT_NO;
        }


        return $this;
    } // setInstallmentNo()

    /**
     * Sets the value of the [deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * Record deleted
     * @param boolean|integer|string $v The new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setDeleted($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->deleted !== $v) {
            $this->deleted = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::DELETED;
        }


        return $this;
    } // setDeleted()

    /**
     * Set the value of [addedby] column.
     * Added by
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setAddedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->addedby !== $v) {
            $this->addedby = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::ADDEDBY;
        }


        return $this;
    } // setAddedby()

    /**
     * Sets the value of [addeddate] column to a normalized version of the date/time value specified.
     * Added date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setAddeddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addeddate !== null || $dt !== null) {
            $currentDateAsString = ($this->addeddate !== null && $tmpDt = new DateTime($this->addeddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addeddate = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::ADDEDDATE;
            }
        } // if either are not null


        return $this;
    } // setAddeddate()

    /**
     * Sets the value of [addedtime] column to a normalized version of the date/time value specified.
     * Added time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setAddedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->addedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->addedtime !== null && $tmpDt = new DateTime($this->addedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->addedtime = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::ADDEDTIME;
            }
        } // if either are not null


        return $this;
    } // setAddedtime()

    /**
     * Set the value of [lastmodifiedby] column.
     * Last modified by
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setLastmodifiedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lastmodifiedby !== $v) {
            $this->lastmodifiedby = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::LASTMODIFIEDBY;
        }


        return $this;
    } // setLastmodifiedby()

    /**
     * Sets the value of [lastmodifieddate] column to a normalized version of the date/time value specified.
     * Last modified date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setLastmodifieddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifieddate !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifieddate !== null && $tmpDt = new DateTime($this->lastmodifieddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifieddate = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::LASTMODIFIEDDATE;
            }
        } // if either are not null


        return $this;
    } // setLastmodifieddate()

    /**
     * Sets the value of [lastmodifiedtime] column to a normalized version of the date/time value specified.
     * Last modified time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setLastmodifiedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lastmodifiedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->lastmodifiedtime !== null && $tmpDt = new DateTime($this->lastmodifiedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lastmodifiedtime = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::LASTMODIFIEDTIME;
            }
        } // if either are not null


        return $this;
    } // setLastmodifiedtime()

    /**
     * Set the value of [deletedby] column.
     * Deleted by
     * @param  int $v new value
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setDeletedby($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deletedby !== $v) {
            $this->deletedby = $v;
            $this->modifiedColumns[] = CustomerreceiptsPeer::DELETEDBY;
        }


        return $this;
    } // setDeletedby()

    /**
     * Sets the value of [deleteddate] column to a normalized version of the date/time value specified.
     * Deleted Date
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setDeleteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deleteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->deleteddate !== null && $tmpDt = new DateTime($this->deleteddate)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deleteddate = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::DELETEDDATE;
            }
        } // if either are not null


        return $this;
    } // setDeleteddate()

    /**
     * Sets the value of [deletedtime] column to a normalized version of the date/time value specified.
     * Deleted Time
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setDeletedtime($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->deletedtime !== null || $dt !== null) {
            $currentDateAsString = ($this->deletedtime !== null && $tmpDt = new DateTime($this->deletedtime)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->deletedtime = $newDateAsString;
                $this->modifiedColumns[] = CustomerreceiptsPeer::DELETEDTIME;
            }
        } // if either are not null


        return $this;
    } // setDeletedtime()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->deleted !== false) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->receiptno = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->salerefno = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->locationcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->projectcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->customercode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->receiptdate = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->oldreceiptno = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->blocknumber = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->paidfor = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->paymenttype = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->paidamount = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->installment_no = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->deleted = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->addedby = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->addeddate = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->addedtime = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->lastmodifiedby = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->lastmodifieddate = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->lastmodifiedtime = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->deletedby = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->deleteddate = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->deletedtime = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = CustomerreceiptsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Customerreceipts object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aSales !== null && $this->salerefno !== $this->aSales->getRefno()) {
            $this->aSales = null;
        }
        if ($this->aLocation !== null && $this->locationcode !== $this->aLocation->getLocationcode()) {
            $this->aLocation = null;
        }
        if ($this->aProject !== null && $this->projectcode !== $this->aProject->getProjectcode()) {
            $this->aProject = null;
        }
        if ($this->aCustomerdetails !== null && $this->customercode !== $this->aCustomerdetails->getCustomercode()) {
            $this->aCustomerdetails = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CustomerreceiptsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CustomerreceiptsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLocation = null;
            $this->aProject = null;
            $this->aCustomerdetails = null;
            $this->aSales = null;
            $this->collCustomerReceiptmethodofpayments = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CustomerreceiptsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CustomerreceiptsQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CustomerreceiptsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CustomerreceiptsPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aLocation !== null) {
                if ($this->aLocation->isModified() || $this->aLocation->isNew()) {
                    $affectedRows += $this->aLocation->save($con);
                }
                $this->setLocation($this->aLocation);
            }

            if ($this->aProject !== null) {
                if ($this->aProject->isModified() || $this->aProject->isNew()) {
                    $affectedRows += $this->aProject->save($con);
                }
                $this->setProject($this->aProject);
            }

            if ($this->aCustomerdetails !== null) {
                if ($this->aCustomerdetails->isModified() || $this->aCustomerdetails->isNew()) {
                    $affectedRows += $this->aCustomerdetails->save($con);
                }
                $this->setCustomerdetails($this->aCustomerdetails);
            }

            if ($this->aSales !== null) {
                if ($this->aSales->isModified() || $this->aSales->isNew()) {
                    $affectedRows += $this->aSales->save($con);
                }
                $this->setSales($this->aSales);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->customerReceiptmethodofpaymentsScheduledForDeletion !== null) {
                if (!$this->customerReceiptmethodofpaymentsScheduledForDeletion->isEmpty()) {
                    CustomerReceiptmethodofpaymentQuery::create()
                        ->filterByPrimaryKeys($this->customerReceiptmethodofpaymentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->customerReceiptmethodofpaymentsScheduledForDeletion = null;
                }
            }

            if ($this->collCustomerReceiptmethodofpayments !== null) {
                foreach ($this->collCustomerReceiptmethodofpayments as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = CustomerreceiptsPeer::RECEIPTNO;
        if (null !== $this->receiptno) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CustomerreceiptsPeer::RECEIPTNO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CustomerreceiptsPeer::RECEIPTNO)) {
            $modifiedColumns[':p' . $index++]  = '`receiptno`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::SALEREFNO)) {
            $modifiedColumns[':p' . $index++]  = '`salerefno`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::LOCATIONCODE)) {
            $modifiedColumns[':p' . $index++]  = '`locationcode`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::PROJECTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`projectcode`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::CUSTOMERCODE)) {
            $modifiedColumns[':p' . $index++]  = '`customercode`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::RECEIPTDATE)) {
            $modifiedColumns[':p' . $index++]  = '`receiptdate`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::OLDRECEIPTNO)) {
            $modifiedColumns[':p' . $index++]  = '`oldreceiptno`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::BLOCKNUMBER)) {
            $modifiedColumns[':p' . $index++]  = '`blocknumber`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::PAIDFOR)) {
            $modifiedColumns[':p' . $index++]  = '`paidfor`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::PAYMENTTYPE)) {
            $modifiedColumns[':p' . $index++]  = '`paymenttype`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::PAIDAMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`paidamount`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::INSTALLMENT_NO)) {
            $modifiedColumns[':p' . $index++]  = '`installment_no`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`deleted`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::ADDEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`addedby`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::ADDEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`addeddate`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::ADDEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`addedtime`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::LASTMODIFIEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedby`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::LASTMODIFIEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifieddate`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::LASTMODIFIEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`lastmodifiedtime`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETEDBY)) {
            $modifiedColumns[':p' . $index++]  = '`deletedby`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`deleteddate`';
        }
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETEDTIME)) {
            $modifiedColumns[':p' . $index++]  = '`deletedtime`';
        }

        $sql = sprintf(
            'INSERT INTO `customerreceipts` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`receiptno`':
                        $stmt->bindValue($identifier, $this->receiptno, PDO::PARAM_INT);
                        break;
                    case '`salerefno`':
                        $stmt->bindValue($identifier, $this->salerefno, PDO::PARAM_INT);
                        break;
                    case '`locationcode`':
                        $stmt->bindValue($identifier, $this->locationcode, PDO::PARAM_INT);
                        break;
                    case '`projectcode`':
                        $stmt->bindValue($identifier, $this->projectcode, PDO::PARAM_INT);
                        break;
                    case '`customercode`':
                        $stmt->bindValue($identifier, $this->customercode, PDO::PARAM_INT);
                        break;
                    case '`receiptdate`':
                        $stmt->bindValue($identifier, $this->receiptdate, PDO::PARAM_STR);
                        break;
                    case '`oldreceiptno`':
                        $stmt->bindValue($identifier, $this->oldreceiptno, PDO::PARAM_STR);
                        break;
                    case '`blocknumber`':
                        $stmt->bindValue($identifier, $this->blocknumber, PDO::PARAM_INT);
                        break;
                    case '`paidfor`':
                        $stmt->bindValue($identifier, $this->paidfor, PDO::PARAM_STR);
                        break;
                    case '`paymenttype`':
                        $stmt->bindValue($identifier, $this->paymenttype, PDO::PARAM_INT);
                        break;
                    case '`paidamount`':
                        $stmt->bindValue($identifier, $this->paidamount, PDO::PARAM_STR);
                        break;
                    case '`installment_no`':
                        $stmt->bindValue($identifier, $this->installment_no, PDO::PARAM_INT);
                        break;
                    case '`deleted`':
                        $stmt->bindValue($identifier, (int) $this->deleted, PDO::PARAM_INT);
                        break;
                    case '`addedby`':
                        $stmt->bindValue($identifier, $this->addedby, PDO::PARAM_INT);
                        break;
                    case '`addeddate`':
                        $stmt->bindValue($identifier, $this->addeddate, PDO::PARAM_STR);
                        break;
                    case '`addedtime`':
                        $stmt->bindValue($identifier, $this->addedtime, PDO::PARAM_STR);
                        break;
                    case '`lastmodifiedby`':
                        $stmt->bindValue($identifier, $this->lastmodifiedby, PDO::PARAM_INT);
                        break;
                    case '`lastmodifieddate`':
                        $stmt->bindValue($identifier, $this->lastmodifieddate, PDO::PARAM_STR);
                        break;
                    case '`lastmodifiedtime`':
                        $stmt->bindValue($identifier, $this->lastmodifiedtime, PDO::PARAM_STR);
                        break;
                    case '`deletedby`':
                        $stmt->bindValue($identifier, $this->deletedby, PDO::PARAM_INT);
                        break;
                    case '`deleteddate`':
                        $stmt->bindValue($identifier, $this->deleteddate, PDO::PARAM_STR);
                        break;
                    case '`deletedtime`':
                        $stmt->bindValue($identifier, $this->deletedtime, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setReceiptno($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aLocation !== null) {
                if (!$this->aLocation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLocation->getValidationFailures());
                }
            }

            if ($this->aProject !== null) {
                if (!$this->aProject->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProject->getValidationFailures());
                }
            }

            if ($this->aCustomerdetails !== null) {
                if (!$this->aCustomerdetails->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCustomerdetails->getValidationFailures());
                }
            }

            if ($this->aSales !== null) {
                if (!$this->aSales->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSales->getValidationFailures());
                }
            }


            if (($retval = CustomerreceiptsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCustomerReceiptmethodofpayments !== null) {
                    foreach ($this->collCustomerReceiptmethodofpayments as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CustomerreceiptsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getReceiptno();
                break;
            case 1:
                return $this->getSalerefno();
                break;
            case 2:
                return $this->getLocationcode();
                break;
            case 3:
                return $this->getProjectcode();
                break;
            case 4:
                return $this->getCustomercode();
                break;
            case 5:
                return $this->getReceiptdate();
                break;
            case 6:
                return $this->getOldreceiptno();
                break;
            case 7:
                return $this->getBlocknumber();
                break;
            case 8:
                return $this->getPaidfor();
                break;
            case 9:
                return $this->getPaymenttype();
                break;
            case 10:
                return $this->getPaidamount();
                break;
            case 11:
                return $this->getInstallmentNo();
                break;
            case 12:
                return $this->getDeleted();
                break;
            case 13:
                return $this->getAddedby();
                break;
            case 14:
                return $this->getAddeddate();
                break;
            case 15:
                return $this->getAddedtime();
                break;
            case 16:
                return $this->getLastmodifiedby();
                break;
            case 17:
                return $this->getLastmodifieddate();
                break;
            case 18:
                return $this->getLastmodifiedtime();
                break;
            case 19:
                return $this->getDeletedby();
                break;
            case 20:
                return $this->getDeleteddate();
                break;
            case 21:
                return $this->getDeletedtime();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Customerreceipts'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Customerreceipts'][$this->getPrimaryKey()] = true;
        $keys = CustomerreceiptsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getReceiptno(),
            $keys[1] => $this->getSalerefno(),
            $keys[2] => $this->getLocationcode(),
            $keys[3] => $this->getProjectcode(),
            $keys[4] => $this->getCustomercode(),
            $keys[5] => $this->getReceiptdate(),
            $keys[6] => $this->getOldreceiptno(),
            $keys[7] => $this->getBlocknumber(),
            $keys[8] => $this->getPaidfor(),
            $keys[9] => $this->getPaymenttype(),
            $keys[10] => $this->getPaidamount(),
            $keys[11] => $this->getInstallmentNo(),
            $keys[12] => $this->getDeleted(),
            $keys[13] => $this->getAddedby(),
            $keys[14] => $this->getAddeddate(),
            $keys[15] => $this->getAddedtime(),
            $keys[16] => $this->getLastmodifiedby(),
            $keys[17] => $this->getLastmodifieddate(),
            $keys[18] => $this->getLastmodifiedtime(),
            $keys[19] => $this->getDeletedby(),
            $keys[20] => $this->getDeleteddate(),
            $keys[21] => $this->getDeletedtime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aLocation) {
                $result['Location'] = $this->aLocation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProject) {
                $result['Project'] = $this->aProject->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCustomerdetails) {
                $result['Customerdetails'] = $this->aCustomerdetails->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSales) {
                $result['Sales'] = $this->aSales->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCustomerReceiptmethodofpayments) {
                $result['CustomerReceiptmethodofpayments'] = $this->collCustomerReceiptmethodofpayments->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CustomerreceiptsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setReceiptno($value);
                break;
            case 1:
                $this->setSalerefno($value);
                break;
            case 2:
                $this->setLocationcode($value);
                break;
            case 3:
                $this->setProjectcode($value);
                break;
            case 4:
                $this->setCustomercode($value);
                break;
            case 5:
                $this->setReceiptdate($value);
                break;
            case 6:
                $this->setOldreceiptno($value);
                break;
            case 7:
                $this->setBlocknumber($value);
                break;
            case 8:
                $this->setPaidfor($value);
                break;
            case 9:
                $this->setPaymenttype($value);
                break;
            case 10:
                $this->setPaidamount($value);
                break;
            case 11:
                $this->setInstallmentNo($value);
                break;
            case 12:
                $this->setDeleted($value);
                break;
            case 13:
                $this->setAddedby($value);
                break;
            case 14:
                $this->setAddeddate($value);
                break;
            case 15:
                $this->setAddedtime($value);
                break;
            case 16:
                $this->setLastmodifiedby($value);
                break;
            case 17:
                $this->setLastmodifieddate($value);
                break;
            case 18:
                $this->setLastmodifiedtime($value);
                break;
            case 19:
                $this->setDeletedby($value);
                break;
            case 20:
                $this->setDeleteddate($value);
                break;
            case 21:
                $this->setDeletedtime($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CustomerreceiptsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setReceiptno($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSalerefno($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLocationcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProjectcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCustomercode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setReceiptdate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOldreceiptno($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBlocknumber($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPaidfor($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPaymenttype($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPaidamount($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setInstallmentNo($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDeleted($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAddedby($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAddeddate($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAddedtime($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLastmodifiedby($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLastmodifieddate($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLastmodifiedtime($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDeletedby($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDeleteddate($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDeletedtime($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CustomerreceiptsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CustomerreceiptsPeer::RECEIPTNO)) $criteria->add(CustomerreceiptsPeer::RECEIPTNO, $this->receiptno);
        if ($this->isColumnModified(CustomerreceiptsPeer::SALEREFNO)) $criteria->add(CustomerreceiptsPeer::SALEREFNO, $this->salerefno);
        if ($this->isColumnModified(CustomerreceiptsPeer::LOCATIONCODE)) $criteria->add(CustomerreceiptsPeer::LOCATIONCODE, $this->locationcode);
        if ($this->isColumnModified(CustomerreceiptsPeer::PROJECTCODE)) $criteria->add(CustomerreceiptsPeer::PROJECTCODE, $this->projectcode);
        if ($this->isColumnModified(CustomerreceiptsPeer::CUSTOMERCODE)) $criteria->add(CustomerreceiptsPeer::CUSTOMERCODE, $this->customercode);
        if ($this->isColumnModified(CustomerreceiptsPeer::RECEIPTDATE)) $criteria->add(CustomerreceiptsPeer::RECEIPTDATE, $this->receiptdate);
        if ($this->isColumnModified(CustomerreceiptsPeer::OLDRECEIPTNO)) $criteria->add(CustomerreceiptsPeer::OLDRECEIPTNO, $this->oldreceiptno);
        if ($this->isColumnModified(CustomerreceiptsPeer::BLOCKNUMBER)) $criteria->add(CustomerreceiptsPeer::BLOCKNUMBER, $this->blocknumber);
        if ($this->isColumnModified(CustomerreceiptsPeer::PAIDFOR)) $criteria->add(CustomerreceiptsPeer::PAIDFOR, $this->paidfor);
        if ($this->isColumnModified(CustomerreceiptsPeer::PAYMENTTYPE)) $criteria->add(CustomerreceiptsPeer::PAYMENTTYPE, $this->paymenttype);
        if ($this->isColumnModified(CustomerreceiptsPeer::PAIDAMOUNT)) $criteria->add(CustomerreceiptsPeer::PAIDAMOUNT, $this->paidamount);
        if ($this->isColumnModified(CustomerreceiptsPeer::INSTALLMENT_NO)) $criteria->add(CustomerreceiptsPeer::INSTALLMENT_NO, $this->installment_no);
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETED)) $criteria->add(CustomerreceiptsPeer::DELETED, $this->deleted);
        if ($this->isColumnModified(CustomerreceiptsPeer::ADDEDBY)) $criteria->add(CustomerreceiptsPeer::ADDEDBY, $this->addedby);
        if ($this->isColumnModified(CustomerreceiptsPeer::ADDEDDATE)) $criteria->add(CustomerreceiptsPeer::ADDEDDATE, $this->addeddate);
        if ($this->isColumnModified(CustomerreceiptsPeer::ADDEDTIME)) $criteria->add(CustomerreceiptsPeer::ADDEDTIME, $this->addedtime);
        if ($this->isColumnModified(CustomerreceiptsPeer::LASTMODIFIEDBY)) $criteria->add(CustomerreceiptsPeer::LASTMODIFIEDBY, $this->lastmodifiedby);
        if ($this->isColumnModified(CustomerreceiptsPeer::LASTMODIFIEDDATE)) $criteria->add(CustomerreceiptsPeer::LASTMODIFIEDDATE, $this->lastmodifieddate);
        if ($this->isColumnModified(CustomerreceiptsPeer::LASTMODIFIEDTIME)) $criteria->add(CustomerreceiptsPeer::LASTMODIFIEDTIME, $this->lastmodifiedtime);
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETEDBY)) $criteria->add(CustomerreceiptsPeer::DELETEDBY, $this->deletedby);
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETEDDATE)) $criteria->add(CustomerreceiptsPeer::DELETEDDATE, $this->deleteddate);
        if ($this->isColumnModified(CustomerreceiptsPeer::DELETEDTIME)) $criteria->add(CustomerreceiptsPeer::DELETEDTIME, $this->deletedtime);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CustomerreceiptsPeer::DATABASE_NAME);
        $criteria->add(CustomerreceiptsPeer::RECEIPTNO, $this->receiptno);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getReceiptno();
    }

    /**
     * Generic method to set the primary key (receiptno column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setReceiptno($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getReceiptno();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Customerreceipts (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSalerefno($this->getSalerefno());
        $copyObj->setLocationcode($this->getLocationcode());
        $copyObj->setProjectcode($this->getProjectcode());
        $copyObj->setCustomercode($this->getCustomercode());
        $copyObj->setReceiptdate($this->getReceiptdate());
        $copyObj->setOldreceiptno($this->getOldreceiptno());
        $copyObj->setBlocknumber($this->getBlocknumber());
        $copyObj->setPaidfor($this->getPaidfor());
        $copyObj->setPaymenttype($this->getPaymenttype());
        $copyObj->setPaidamount($this->getPaidamount());
        $copyObj->setInstallmentNo($this->getInstallmentNo());
        $copyObj->setDeleted($this->getDeleted());
        $copyObj->setAddedby($this->getAddedby());
        $copyObj->setAddeddate($this->getAddeddate());
        $copyObj->setAddedtime($this->getAddedtime());
        $copyObj->setLastmodifiedby($this->getLastmodifiedby());
        $copyObj->setLastmodifieddate($this->getLastmodifieddate());
        $copyObj->setLastmodifiedtime($this->getLastmodifiedtime());
        $copyObj->setDeletedby($this->getDeletedby());
        $copyObj->setDeleteddate($this->getDeleteddate());
        $copyObj->setDeletedtime($this->getDeletedtime());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCustomerReceiptmethodofpayments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerReceiptmethodofpayment($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setReceiptno(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Customerreceipts Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CustomerreceiptsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CustomerreceiptsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Location object.
     *
     * @param                  Location $v
     * @return Customerreceipts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLocation(Location $v = null)
    {
        if ($v === null) {
            $this->setLocationcode(NULL);
        } else {
            $this->setLocationcode($v->getLocationcode());
        }

        $this->aLocation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Location object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomerreceipts($this);
        }


        return $this;
    }


    /**
     * Get the associated Location object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Location The associated Location object.
     * @throws PropelException
     */
    public function getLocation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLocation === null && ($this->locationcode !== null) && $doQuery) {
            $this->aLocation = LocationQuery::create()->findPk($this->locationcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLocation->addCustomerreceiptss($this);
             */
        }

        return $this->aLocation;
    }

    /**
     * Declares an association between this object and a Project object.
     *
     * @param                  Project $v
     * @return Customerreceipts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProject(Project $v = null)
    {
        if ($v === null) {
            $this->setProjectcode(NULL);
        } else {
            $this->setProjectcode($v->getProjectcode());
        }

        $this->aProject = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Project object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomerreceipts($this);
        }


        return $this;
    }


    /**
     * Get the associated Project object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Project The associated Project object.
     * @throws PropelException
     */
    public function getProject(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProject === null && ($this->projectcode !== null) && $doQuery) {
            $this->aProject = ProjectQuery::create()->findPk($this->projectcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProject->addCustomerreceiptss($this);
             */
        }

        return $this->aProject;
    }

    /**
     * Declares an association between this object and a Customerdetails object.
     *
     * @param                  Customerdetails $v
     * @return Customerreceipts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerdetails(Customerdetails $v = null)
    {
        if ($v === null) {
            $this->setCustomercode(NULL);
        } else {
            $this->setCustomercode($v->getCustomercode());
        }

        $this->aCustomerdetails = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Customerdetails object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomerreceipts($this);
        }


        return $this;
    }


    /**
     * Get the associated Customerdetails object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Customerdetails The associated Customerdetails object.
     * @throws PropelException
     */
    public function getCustomerdetails(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCustomerdetails === null && ($this->customercode !== null) && $doQuery) {
            $this->aCustomerdetails = CustomerdetailsQuery::create()->findPk($this->customercode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomerdetails->addCustomerreceiptss($this);
             */
        }

        return $this->aCustomerdetails;
    }

    /**
     * Declares an association between this object and a Sales object.
     *
     * @param                  Sales $v
     * @return Customerreceipts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSales(Sales $v = null)
    {
        if ($v === null) {
            $this->setSalerefno(NULL);
        } else {
            $this->setSalerefno($v->getRefno());
        }

        $this->aSales = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sales object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomerreceipts($this);
        }


        return $this;
    }


    /**
     * Get the associated Sales object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sales The associated Sales object.
     * @throws PropelException
     */
    public function getSales(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSales === null && ($this->salerefno !== null) && $doQuery) {
            $this->aSales = SalesQuery::create()->findPk($this->salerefno, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSales->addCustomerreceiptss($this);
             */
        }

        return $this->aSales;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CustomerReceiptmethodofpayment' == $relationName) {
            $this->initCustomerReceiptmethodofpayments();
        }
    }

    /**
     * Clears out the collCustomerReceiptmethodofpayments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Customerreceipts The current object (for fluent API support)
     * @see        addCustomerReceiptmethodofpayments()
     */
    public function clearCustomerReceiptmethodofpayments()
    {
        $this->collCustomerReceiptmethodofpayments = null; // important to set this to null since that means it is uninitialized
        $this->collCustomerReceiptmethodofpaymentsPartial = null;

        return $this;
    }

    /**
     * reset is the collCustomerReceiptmethodofpayments collection loaded partially
     *
     * @return void
     */
    public function resetPartialCustomerReceiptmethodofpayments($v = true)
    {
        $this->collCustomerReceiptmethodofpaymentsPartial = $v;
    }

    /**
     * Initializes the collCustomerReceiptmethodofpayments collection.
     *
     * By default this just sets the collCustomerReceiptmethodofpayments collection to an empty array (like clearcollCustomerReceiptmethodofpayments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomerReceiptmethodofpayments($overrideExisting = true)
    {
        if (null !== $this->collCustomerReceiptmethodofpayments && !$overrideExisting) {
            return;
        }
        $this->collCustomerReceiptmethodofpayments = new PropelObjectCollection();
        $this->collCustomerReceiptmethodofpayments->setModel('CustomerReceiptmethodofpayment');
    }

    /**
     * Gets an array of CustomerReceiptmethodofpayment objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Customerreceipts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CustomerReceiptmethodofpayment[] List of CustomerReceiptmethodofpayment objects
     * @throws PropelException
     */
    public function getCustomerReceiptmethodofpayments($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCustomerReceiptmethodofpaymentsPartial && !$this->isNew();
        if (null === $this->collCustomerReceiptmethodofpayments || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCustomerReceiptmethodofpayments) {
                // return empty collection
                $this->initCustomerReceiptmethodofpayments();
            } else {
                $collCustomerReceiptmethodofpayments = CustomerReceiptmethodofpaymentQuery::create(null, $criteria)
                    ->filterByCustomerreceipts($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCustomerReceiptmethodofpaymentsPartial && count($collCustomerReceiptmethodofpayments)) {
                      $this->initCustomerReceiptmethodofpayments(false);

                      foreach ($collCustomerReceiptmethodofpayments as $obj) {
                        if (false == $this->collCustomerReceiptmethodofpayments->contains($obj)) {
                          $this->collCustomerReceiptmethodofpayments->append($obj);
                        }
                      }

                      $this->collCustomerReceiptmethodofpaymentsPartial = true;
                    }

                    $collCustomerReceiptmethodofpayments->getInternalIterator()->rewind();

                    return $collCustomerReceiptmethodofpayments;
                }

                if ($partial && $this->collCustomerReceiptmethodofpayments) {
                    foreach ($this->collCustomerReceiptmethodofpayments as $obj) {
                        if ($obj->isNew()) {
                            $collCustomerReceiptmethodofpayments[] = $obj;
                        }
                    }
                }

                $this->collCustomerReceiptmethodofpayments = $collCustomerReceiptmethodofpayments;
                $this->collCustomerReceiptmethodofpaymentsPartial = false;
            }
        }

        return $this->collCustomerReceiptmethodofpayments;
    }

    /**
     * Sets a collection of CustomerReceiptmethodofpayment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $customerReceiptmethodofpayments A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function setCustomerReceiptmethodofpayments(PropelCollection $customerReceiptmethodofpayments, PropelPDO $con = null)
    {
        $customerReceiptmethodofpaymentsToDelete = $this->getCustomerReceiptmethodofpayments(new Criteria(), $con)->diff($customerReceiptmethodofpayments);


        $this->customerReceiptmethodofpaymentsScheduledForDeletion = $customerReceiptmethodofpaymentsToDelete;

        foreach ($customerReceiptmethodofpaymentsToDelete as $customerReceiptmethodofpaymentRemoved) {
            $customerReceiptmethodofpaymentRemoved->setCustomerreceipts(null);
        }

        $this->collCustomerReceiptmethodofpayments = null;
        foreach ($customerReceiptmethodofpayments as $customerReceiptmethodofpayment) {
            $this->addCustomerReceiptmethodofpayment($customerReceiptmethodofpayment);
        }

        $this->collCustomerReceiptmethodofpayments = $customerReceiptmethodofpayments;
        $this->collCustomerReceiptmethodofpaymentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CustomerReceiptmethodofpayment objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CustomerReceiptmethodofpayment objects.
     * @throws PropelException
     */
    public function countCustomerReceiptmethodofpayments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCustomerReceiptmethodofpaymentsPartial && !$this->isNew();
        if (null === $this->collCustomerReceiptmethodofpayments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomerReceiptmethodofpayments) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomerReceiptmethodofpayments());
            }
            $query = CustomerReceiptmethodofpaymentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomerreceipts($this)
                ->count($con);
        }

        return count($this->collCustomerReceiptmethodofpayments);
    }

    /**
     * Method called to associate a CustomerReceiptmethodofpayment object to this object
     * through the CustomerReceiptmethodofpayment foreign key attribute.
     *
     * @param    CustomerReceiptmethodofpayment $l CustomerReceiptmethodofpayment
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function addCustomerReceiptmethodofpayment(CustomerReceiptmethodofpayment $l)
    {
        if ($this->collCustomerReceiptmethodofpayments === null) {
            $this->initCustomerReceiptmethodofpayments();
            $this->collCustomerReceiptmethodofpaymentsPartial = true;
        }

        if (!in_array($l, $this->collCustomerReceiptmethodofpayments->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCustomerReceiptmethodofpayment($l);

            if ($this->customerReceiptmethodofpaymentsScheduledForDeletion and $this->customerReceiptmethodofpaymentsScheduledForDeletion->contains($l)) {
                $this->customerReceiptmethodofpaymentsScheduledForDeletion->remove($this->customerReceiptmethodofpaymentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CustomerReceiptmethodofpayment $customerReceiptmethodofpayment The customerReceiptmethodofpayment object to add.
     */
    protected function doAddCustomerReceiptmethodofpayment($customerReceiptmethodofpayment)
    {
        $this->collCustomerReceiptmethodofpayments[]= $customerReceiptmethodofpayment;
        $customerReceiptmethodofpayment->setCustomerreceipts($this);
    }

    /**
     * @param	CustomerReceiptmethodofpayment $customerReceiptmethodofpayment The customerReceiptmethodofpayment object to remove.
     * @return Customerreceipts The current object (for fluent API support)
     */
    public function removeCustomerReceiptmethodofpayment($customerReceiptmethodofpayment)
    {
        if ($this->getCustomerReceiptmethodofpayments()->contains($customerReceiptmethodofpayment)) {
            $this->collCustomerReceiptmethodofpayments->remove($this->collCustomerReceiptmethodofpayments->search($customerReceiptmethodofpayment));
            if (null === $this->customerReceiptmethodofpaymentsScheduledForDeletion) {
                $this->customerReceiptmethodofpaymentsScheduledForDeletion = clone $this->collCustomerReceiptmethodofpayments;
                $this->customerReceiptmethodofpaymentsScheduledForDeletion->clear();
            }
            $this->customerReceiptmethodofpaymentsScheduledForDeletion[]= clone $customerReceiptmethodofpayment;
            $customerReceiptmethodofpayment->setCustomerreceipts(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->receiptno = null;
        $this->salerefno = null;
        $this->locationcode = null;
        $this->projectcode = null;
        $this->customercode = null;
        $this->receiptdate = null;
        $this->oldreceiptno = null;
        $this->blocknumber = null;
        $this->paidfor = null;
        $this->paymenttype = null;
        $this->paidamount = null;
        $this->installment_no = null;
        $this->deleted = null;
        $this->addedby = null;
        $this->addeddate = null;
        $this->addedtime = null;
        $this->lastmodifiedby = null;
        $this->lastmodifieddate = null;
        $this->lastmodifiedtime = null;
        $this->deletedby = null;
        $this->deleteddate = null;
        $this->deletedtime = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collCustomerReceiptmethodofpayments) {
                foreach ($this->collCustomerReceiptmethodofpayments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aLocation instanceof Persistent) {
              $this->aLocation->clearAllReferences($deep);
            }
            if ($this->aProject instanceof Persistent) {
              $this->aProject->clearAllReferences($deep);
            }
            if ($this->aCustomerdetails instanceof Persistent) {
              $this->aCustomerdetails->clearAllReferences($deep);
            }
            if ($this->aSales instanceof Persistent) {
              $this->aSales->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCustomerReceiptmethodofpayments instanceof PropelCollection) {
            $this->collCustomerReceiptmethodofpayments->clearIterator();
        }
        $this->collCustomerReceiptmethodofpayments = null;
        $this->aLocation = null;
        $this->aProject = null;
        $this->aCustomerdetails = null;
        $this->aSales = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CustomerreceiptsPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
