<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Mailing/MailingAB.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:12d9514d27712e3d9ad545ca6c2bfe91)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Mailing_DAO_MailingAB constructor.
 */
class CRM_Mailing_DAO_MailingAB extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_mailing_abtest';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name of the A/B test
   *
   * @var string
   */
  public $name;
  /**
   * Status
   *
   * @var string
   */
  public $status;
  /**
   * The first experimental mailing ("A" condition)
   *
   * @var int unsigned
   */
  public $mailing_id_a;
  /**
   * The second experimental mailing ("B" condition)
   *
   * @var int unsigned
   */
  public $mailing_id_b;
  /**
   * The final, general mailing (derived from A or B)
   *
   * @var int unsigned
   */
  public $mailing_id_c;
  /**
   * Which site is this mailing for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   *
   * @var string
   */
  public $testing_criteria;
  /**
   *
   * @var string
   */
  public $winner_criteria;
  /**
   * What specific url to track
   *
   * @var string
   */
  public $specific_url;
  /**
   * In how much time to declare winner
   *
   * @var datetime
   */
  public $declare_winning_time;
  /**
   *
   * @var int unsigned
   */
  public $group_percentage;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * When was this item created
   *
   * @var timestamp
   */
  public $created_date;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_mailing_abtest';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('MailingAB ID') ,
          'required' => true,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name') ,
          'description' => 'Name of the A/B test',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'status' => array(
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status') ,
          'description' => 'Status',
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
          'pseudoconstant' => array(
            'callback' => 'CRM_Mailing_PseudoConstant::abStatus',
          )
        ) ,
        'mailing_id_a' => array(
          'name' => 'mailing_id_a',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing ID (A)') ,
          'description' => 'The first experimental mailing ("A" condition)',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'mailing_id_b' => array(
          'name' => 'mailing_id_b',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing ID (B)') ,
          'description' => 'The second experimental mailing ("B" condition)',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'mailing_id_c' => array(
          'name' => 'mailing_id_c',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing ID (C)') ,
          'description' => 'The final, general mailing (derived from A or B)',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain ID') ,
          'description' => 'Which site is this mailing for',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'testing_criteria' => array(
          'name' => 'testing_criteria',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Testing Criteria') ,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
          'pseudoconstant' => array(
            'callback' => 'CRM_Mailing_PseudoConstant::abTestCriteria',
          )
        ) ,
        'winner_criteria' => array(
          'name' => 'winner_criteria',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Winner Criteria') ,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
          'pseudoconstant' => array(
            'callback' => 'CRM_Mailing_PseudoConstant::abWinnerCriteria',
          )
        ) ,
        'specific_url' => array(
          'name' => 'specific_url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('URL for Winner Criteria') ,
          'description' => 'What specific url to track',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'declare_winning_time' => array(
          'name' => 'declare_winning_time',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Declaration Time') ,
          'description' => 'In how much time to declare winner',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'group_percentage' => array(
          'name' => 'group_percentage',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Group Percentage') ,
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('AB Test Created By') ,
          'description' => 'FK to Contact ID',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('AB Test Created Date') ,
          'description' => 'When was this item created',
          'required' => false,
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_mailing_abtest',
          'entity' => 'MailingAB',
          'bao' => 'CRM_Mailing_BAO_MailingAB',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_abtest', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_abtest', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array();
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}