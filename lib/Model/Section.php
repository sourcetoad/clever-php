<?php
/**
 * Section
 *
 * PHP version 5
 *
 * @category Class
 * @package  Clever
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Clever API
 *
 * The Clever API
 *
 * OpenAPI spec version: 2.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Clever\Model;

use \ArrayAccess;
use \Clever\ObjectSerializer;

/**
 * Section Class Doc Comment
 *
 * @category Class
 * @package  Clever
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Section implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Section';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course' => 'string',
        'created' => 'string',
        'district' => 'string',
        'grade' => 'string',
        'id' => 'string',
        'last_modified' => 'string',
        'name' => 'string',
        'period' => 'string',
        'school' => 'string',
        'section_number' => 'string',
        'sis_id' => 'string',
        'students' => 'string[]',
        'subject' => 'string',
        'teacher' => 'string',
        'teachers' => 'string[]',
        'term_id' => 'string',
        'ext' => 'object',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course' => null,
        'created' => 'datetime',
        'district' => null,
        'grade' => null,
        'id' => null,
        'last_modified' => 'datetime',
        'name' => null,
        'period' => null,
        'school' => null,
        'section_number' => null,
        'sis_id' => null,
        'students' => null,
        'subject' => null,
        'teacher' => null,
        'teachers' => null,
        'term_id' => null,
        'ext' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'course' => 'course',
        'created' => 'created',
        'district' => 'district',
        'grade' => 'grade',
        'id' => 'id',
        'last_modified' => 'last_modified',
        'name' => 'name',
        'period' => 'period',
        'school' => 'school',
        'section_number' => 'section_number',
        'sis_id' => 'sis_id',
        'students' => 'students',
        'subject' => 'subject',
        'teacher' => 'teacher',
        'teachers' => 'teachers',
        'term_id' => 'term_id',
        'ext' => 'ext',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'course' => 'setCourse',
        'created' => 'setCreated',
        'district' => 'setDistrict',
        'grade' => 'setGrade',
        'id' => 'setId',
        'last_modified' => 'setLastModified',
        'name' => 'setName',
        'period' => 'setPeriod',
        'school' => 'setSchool',
        'section_number' => 'setSectionNumber',
        'sis_id' => 'setSisId',
        'students' => 'setStudents',
        'subject' => 'setSubject',
        'teacher' => 'setTeacher',
        'teachers' => 'setTeachers',
        'term_id' => 'setTermId',
        'ext' => 'setExt',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'course' => 'getCourse',
        'created' => 'getCreated',
        'district' => 'getDistrict',
        'grade' => 'getGrade',
        'id' => 'getId',
        'last_modified' => 'getLastModified',
        'name' => 'getName',
        'period' => 'getPeriod',
        'school' => 'getSchool',
        'section_number' => 'getSectionNumber',
        'sis_id' => 'getSisId',
        'students' => 'getStudents',
        'subject' => 'getSubject',
        'teacher' => 'getTeacher',
        'teachers' => 'getTeachers',
        'term_id' => 'getTermId',
        'ext' => 'getExt',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const GRADE__1 = '1';
    const GRADE__2 = '2';
    const GRADE__3 = '3';
    const GRADE__4 = '4';
    const GRADE__5 = '5';
    const GRADE__6 = '6';
    const GRADE__7 = '7';
    const GRADE__8 = '8';
    const GRADE__9 = '9';
    const GRADE__10 = '10';
    const GRADE__11 = '11';
    const GRADE__12 = '12';
    const GRADE__13 = '13';
    const GRADE_PRE_KINDERGARTEN = 'PreKindergarten';
    const GRADE_TRANSITIONAL_KINDERGARTEN = 'TransitionalKindergarten';
    const GRADE_KINDERGARTEN = 'Kindergarten';
    const GRADE_INFANT_TODDLER = 'InfantToddler';
    const GRADE_PRE_SCHOOL = 'Preschool';
    const GRADE_POST_GRADUATE = 'PostGraduate';
    const GRADE_UNGRADED = 'Ungraded';
    const GRADE_OTHER = 'Other';
    const GRADE_BLANK = '';
    const SUBJECT_ENGLISHLANGUAGE_ARTS = 'english/language arts';
    const SUBJECT_MATH = 'math';
    const SUBJECT_SCIENCE = 'science';
    const SUBJECT_SOCIAL_STUDIES = 'social studies';
    const SUBJECT_LANGUAGE = 'language';
    const SUBJECT_HOMEROOMADVISORY = 'homeroom/advisory';
    const SUBJECT_INTERVENTIONSONLINE_LEARNING = 'interventions/online learning';
    const SUBJECT_TECHNOLOGY_AND_ENGINEERING = 'technology and engineering';
    const SUBJECT_PE_AND_HEALTH = 'PE and health';
    const SUBJECT_ARTS_AND_MUSIC = 'arts and music';
    const SUBJECT_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGradeAllowableValues()
    {
        return [
            self::GRADE__1,
            self::GRADE__2,
            self::GRADE__3,
            self::GRADE__4,
            self::GRADE__5,
            self::GRADE__6,
            self::GRADE__7,
            self::GRADE__8,
            self::GRADE__9,
            self::GRADE__10,
            self::GRADE__11,
            self::GRADE__12,
            self::GRADE__13,
            self::GRADE_PRE_KINDERGARTEN,
            self::GRADE_TRANSITIONAL_KINDERGARTEN,
            self::GRADE_KINDERGARTEN,
            self::GRADE_INFANT_TODDLER,
            self::GRADE_PRE_SCHOOL,
            self::GRADE_POST_GRADUATE,
            self::GRADE_UNGRADED,
            self::GRADE_OTHER,
            self::GRADE_BLANK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubjectAllowableValues()
    {
        return [
            self::SUBJECT_ENGLISHLANGUAGE_ARTS,
            self::SUBJECT_MATH,
            self::SUBJECT_SCIENCE,
            self::SUBJECT_SOCIAL_STUDIES,
            self::SUBJECT_LANGUAGE,
            self::SUBJECT_HOMEROOMADVISORY,
            self::SUBJECT_INTERVENTIONSONLINE_LEARNING,
            self::SUBJECT_TECHNOLOGY_AND_ENGINEERING,
            self::SUBJECT_PE_AND_HEALTH,
            self::SUBJECT_ARTS_AND_MUSIC,
            self::SUBJECT_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['school'] = isset($data['school']) ? $data['school'] : null;
        $this->container['section_number'] = isset($data['section_number']) ? $data['section_number'] : null;
        $this->container['sis_id'] = isset($data['sis_id']) ? $data['sis_id'] : null;
        $this->container['students'] = isset($data['students']) ? $data['students'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['teacher'] = isset($data['teacher']) ? $data['teacher'] : null;
        $this->container['teachers'] = isset($data['teachers']) ? $data['teachers'] : null;
        $this->container['term_id'] = isset($data['term_id']) ? $data['term_id'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGradeAllowableValues();
        if (!in_array($this->container['grade'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'grade', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubjectAllowableValues();
        if (!in_array($this->container['subject'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subject', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        $allowedValues = $this->getGradeAllowableValues();
        if (!in_array($this->container['grade'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSubjectAllowableValues();
        if (!in_array($this->container['subject'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets course
     *
     * @return string
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param string $course course
     *
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district district
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
     * Sets grade
     *
     * @param string $grade grade
     *
     * @return $this
     */
    public function setGrade($grade)
    {
        $allowedValues = $this->getGradeAllowableValues();
        if (!is_null($grade) && !in_array($grade, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'grade', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['grade'] = $grade;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     *
     * @param string $school school
     *
     * @return $this
     */
    public function setSchool($school)
    {
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets section_number
     *
     * @return string
     */
    public function getSectionNumber()
    {
        return $this->container['section_number'];
    }

    /**
     * Sets section_number
     *
     * @param string $section_number section_number
     *
     * @return $this
     */
    public function setSectionNumber($section_number)
    {
        $this->container['section_number'] = $section_number;

        return $this;
    }

    /**
     * Gets sis_id
     *
     * @return string
     */
    public function getSisId()
    {
        return $this->container['sis_id'];
    }

    /**
     * Sets sis_id
     *
     * @param string $sis_id sis_id
     *
     * @return $this
     */
    public function setSisId($sis_id)
    {
        $this->container['sis_id'] = $sis_id;

        return $this;
    }

    /**
     * Gets students
     *
     * @return string[]
     */
    public function getStudents()
    {
        return $this->container['students'];
    }

    /**
     * Sets students
     *
     * @param string[] $students students
     *
     * @return $this
     */
    public function setStudents($students)
    {
        $this->container['students'] = $students;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $allowedValues = $this->getSubjectAllowableValues();
        if (!is_null($subject) && !in_array($subject, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subject', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets teacher
     *
     * @return string
     */
    public function getTeacher()
    {
        return $this->container['teacher'];
    }

    /**
     * Sets teacher
     *
     * @param string $teacher teacher
     *
     * @return $this
     */
    public function setTeacher($teacher)
    {
        $this->container['teacher'] = $teacher;

        return $this;
    }

    /**
     * Gets teachers
     *
     * @return string[]
     */
    public function getTeachers()
    {
        return $this->container['teachers'];
    }

    /**
     * Sets teachers
     *
     * @param string[] $teachers teachers
     *
     * @return $this
     */
    public function setTeachers($teachers)
    {
        $this->container['teachers'] = $teachers;

        return $this;
    }

    /**
     * Gets term_id
     *
     * @return string
     */
    public function getTermId()
    {
        return $this->container['term_id'];
    }

    /**
     * Sets term_id
     *
     * @param string $term_id term_id
     *
     * @return $this
     */
    public function setTermId($term_id)
    {
        $this->container['term_id'] = $term_id;

        return $this;
    }


    /**
     * Gets ext.
     *
     * @return string
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext.
     *
     * @param string $ext ext
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
