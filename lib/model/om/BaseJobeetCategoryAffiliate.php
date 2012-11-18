<?php

/**
 * Base class that represents a row from the 'jobeet_category_affiliate' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Nov 18 18:21:51 2012
 *
 * @package    lib.model.om
 */
abstract class BaseJobeetCategoryAffiliate extends BaseObject  implements Persistent {


  const PEER = 'JobeetCategoryAffiliatePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        JobeetCategoryAffiliatePeer
	 */
	protected static $peer;

	/**
	 * The value for the category_id field.
	 * @var        int
	 */
	protected $category_id;

	/**
	 * The value for the affiliate_id field.
	 * @var        int
	 */
	protected $affiliate_id;

	/**
	 * @var        JobeetCategory
	 */
	protected $aJobeetCategory;

	/**
	 * @var        JobeetAffiliate
	 */
	protected $aJobeetAffiliate;

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
	 * Initializes internal state of BaseJobeetCategoryAffiliate object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [category_id] column value.
	 * 
	 * @return     int
	 */
	public function getCategoryId()
	{
		return $this->category_id;
	}

	/**
	 * Get the [affiliate_id] column value.
	 * 
	 * @return     int
	 */
	public function getAffiliateId()
	{
		return $this->affiliate_id;
	}

	/**
	 * Set the value of [category_id] column.
	 * 
	 * @param      int $v new value
	 * @return     JobeetCategoryAffiliate The current object (for fluent API support)
	 */
	public function setCategoryId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->category_id !== $v) {
			$this->category_id = $v;
			$this->modifiedColumns[] = JobeetCategoryAffiliatePeer::CATEGORY_ID;
		}

		if ($this->aJobeetCategory !== null && $this->aJobeetCategory->getId() !== $v) {
			$this->aJobeetCategory = null;
		}

		return $this;
	} // setCategoryId()

	/**
	 * Set the value of [affiliate_id] column.
	 * 
	 * @param      int $v new value
	 * @return     JobeetCategoryAffiliate The current object (for fluent API support)
	 */
	public function setAffiliateId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->affiliate_id !== $v) {
			$this->affiliate_id = $v;
			$this->modifiedColumns[] = JobeetCategoryAffiliatePeer::AFFILIATE_ID;
		}

		if ($this->aJobeetAffiliate !== null && $this->aJobeetAffiliate->getId() !== $v) {
			$this->aJobeetAffiliate = null;
		}

		return $this;
	} // setAffiliateId()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
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
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->category_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->affiliate_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 2; // 2 = JobeetCategoryAffiliatePeer::NUM_COLUMNS - JobeetCategoryAffiliatePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating JobeetCategoryAffiliate object", $e);
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
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aJobeetCategory !== null && $this->category_id !== $this->aJobeetCategory->getId()) {
			$this->aJobeetCategory = null;
		}
		if ($this->aJobeetAffiliate !== null && $this->affiliate_id !== $this->aJobeetAffiliate->getId()) {
			$this->aJobeetAffiliate = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
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
			$con = Propel::getConnection(JobeetCategoryAffiliatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = JobeetCategoryAffiliatePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aJobeetCategory = null;
			$this->aJobeetAffiliate = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseJobeetCategoryAffiliate:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(JobeetCategoryAffiliatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			JobeetCategoryAffiliatePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseJobeetCategoryAffiliate:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
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
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseJobeetCategoryAffiliate:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(JobeetCategoryAffiliatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseJobeetCategoryAffiliate:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			JobeetCategoryAffiliatePeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
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
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aJobeetCategory !== null) {
				if ($this->aJobeetCategory->isModified() || $this->aJobeetCategory->isNew()) {
					$affectedRows += $this->aJobeetCategory->save($con);
				}
				$this->setJobeetCategory($this->aJobeetCategory);
			}

			if ($this->aJobeetAffiliate !== null) {
				if ($this->aJobeetAffiliate->isModified() || $this->aJobeetAffiliate->isNew()) {
					$affectedRows += $this->aJobeetAffiliate->save($con);
				}
				$this->setJobeetAffiliate($this->aJobeetAffiliate);
			}


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = JobeetCategoryAffiliatePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setNew(false);
				} else {
					$affectedRows += JobeetCategoryAffiliatePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
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
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aJobeetCategory !== null) {
				if (!$this->aJobeetCategory->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aJobeetCategory->getValidationFailures());
				}
			}

			if ($this->aJobeetAffiliate !== null) {
				if (!$this->aJobeetAffiliate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aJobeetAffiliate->getValidationFailures());
				}
			}


			if (($retval = JobeetCategoryAffiliatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = JobeetCategoryAffiliatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCategoryId();
				break;
			case 1:
				return $this->getAffiliateId();
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
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = JobeetCategoryAffiliatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCategoryId(),
			$keys[1] => $this->getAffiliateId(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = JobeetCategoryAffiliatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCategoryId($value);
				break;
			case 1:
				$this->setAffiliateId($value);
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
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = JobeetCategoryAffiliatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCategoryId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAffiliateId($arr[$keys[1]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(JobeetCategoryAffiliatePeer::DATABASE_NAME);

		if ($this->isColumnModified(JobeetCategoryAffiliatePeer::CATEGORY_ID)) $criteria->add(JobeetCategoryAffiliatePeer::CATEGORY_ID, $this->category_id);
		if ($this->isColumnModified(JobeetCategoryAffiliatePeer::AFFILIATE_ID)) $criteria->add(JobeetCategoryAffiliatePeer::AFFILIATE_ID, $this->affiliate_id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(JobeetCategoryAffiliatePeer::DATABASE_NAME);

		$criteria->add(JobeetCategoryAffiliatePeer::CATEGORY_ID, $this->category_id);
		$criteria->add(JobeetCategoryAffiliatePeer::AFFILIATE_ID, $this->affiliate_id);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();

		$pks[0] = $this->getCategoryId();

		$pks[1] = $this->getAffiliateId();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{

		$this->setCategoryId($keys[0]);

		$this->setAffiliateId($keys[1]);

	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of JobeetCategoryAffiliate (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCategoryId($this->category_id);

		$copyObj->setAffiliateId($this->affiliate_id);


		$copyObj->setNew(true);

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     JobeetCategoryAffiliate Clone of current object.
	 * @throws     PropelException
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
	 * @return     JobeetCategoryAffiliatePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new JobeetCategoryAffiliatePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a JobeetCategory object.
	 *
	 * @param      JobeetCategory $v
	 * @return     JobeetCategoryAffiliate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setJobeetCategory(JobeetCategory $v = null)
	{
		if ($v === null) {
			$this->setCategoryId(NULL);
		} else {
			$this->setCategoryId($v->getId());
		}

		$this->aJobeetCategory = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the JobeetCategory object, it will not be re-added.
		if ($v !== null) {
			$v->addJobeetCategoryAffiliate($this);
		}

		return $this;
	}


	/**
	 * Get the associated JobeetCategory object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     JobeetCategory The associated JobeetCategory object.
	 * @throws     PropelException
	 */
	public function getJobeetCategory(PropelPDO $con = null)
	{
		if ($this->aJobeetCategory === null && ($this->category_id !== null)) {
			$c = new Criteria(JobeetCategoryPeer::DATABASE_NAME);
			$c->add(JobeetCategoryPeer::ID, $this->category_id);
			$this->aJobeetCategory = JobeetCategoryPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aJobeetCategory->addJobeetCategoryAffiliates($this);
			 */
		}
		return $this->aJobeetCategory;
	}

	/**
	 * Declares an association between this object and a JobeetAffiliate object.
	 *
	 * @param      JobeetAffiliate $v
	 * @return     JobeetCategoryAffiliate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setJobeetAffiliate(JobeetAffiliate $v = null)
	{
		if ($v === null) {
			$this->setAffiliateId(NULL);
		} else {
			$this->setAffiliateId($v->getId());
		}

		$this->aJobeetAffiliate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the JobeetAffiliate object, it will not be re-added.
		if ($v !== null) {
			$v->addJobeetCategoryAffiliate($this);
		}

		return $this;
	}


	/**
	 * Get the associated JobeetAffiliate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     JobeetAffiliate The associated JobeetAffiliate object.
	 * @throws     PropelException
	 */
	public function getJobeetAffiliate(PropelPDO $con = null)
	{
		if ($this->aJobeetAffiliate === null && ($this->affiliate_id !== null)) {
			$c = new Criteria(JobeetAffiliatePeer::DATABASE_NAME);
			$c->add(JobeetAffiliatePeer::ID, $this->affiliate_id);
			$this->aJobeetAffiliate = JobeetAffiliatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aJobeetAffiliate->addJobeetCategoryAffiliates($this);
			 */
		}
		return $this->aJobeetAffiliate;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aJobeetCategory = null;
			$this->aJobeetAffiliate = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseJobeetCategoryAffiliate:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseJobeetCategoryAffiliate::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseJobeetCategoryAffiliate
