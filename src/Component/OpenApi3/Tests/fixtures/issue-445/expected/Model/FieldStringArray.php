<?php

namespace PicturePark\API\Model;

class FieldStringArray extends FieldBase
{
    /**
     * The field ID. It can be a slug; it must be unique within the schema hierarchy (ancestors / descendants); it must be begin with lower case.
     *
     * @var string
     */
    protected $id;
    /**
     * The index ID is auto generated by the system.
     *
     * @var string|null
     */
    protected $indexId;
    /**
     * The field namespace is auto generated by the system: it carries the hierarchy information.
     *
     * @var string|null
     */
    protected $fieldNamespace;
    /**
     * Language specific field names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Language specific field descriptions.
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * Defines if a field value is mandatory or not.
     *
     * @var bool
     */
    protected $required;
    /**
     * Defines if the field can be edited or not.
     *
     * @var bool
     */
    protected $fixed;
    /**
     * Field is stored for filtering.
     *
     * @var bool
     */
    protected $index;
    /**
     * Field is stored for simple search.
     *
     * @var bool
     */
    protected $simpleSearch;
    /**
     * Field is stored for sorting.
     *
     * @var bool
     */
    protected $sortable;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     *
     * @var string|null
     */
    protected $template;
    /**
     * Contains a regex validation pattern.
     *
     * @var string|null
     */
    protected $pattern;
    /**
     * The minimum string's lenght.
     *
     * @var int|null
     */
    protected $minimumLength;
    /**
     * The maximum string's length.
     *
     * @var int|null
     */
    protected $maximumLength;
    /**
    * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the Index property is set to true.
    *
    * @var AnalyzerBase[]|null
    */
    protected $indexAnalyzers;
    /**
    * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the SimpleSearch property is set to true.
    *
    * @var AnalyzerBase[]|null
    */
    protected $simpleSearchAnalyzers;
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @var bool
     */
    protected $multiLine;
    /**
     * If values are stored in this list, field values are limited to these ones.
     *
     * @var string[]|null
     */
    protected $grantedValues;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    protected $boost = 1;
    /**
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    protected $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    protected $minimumItems;
    /**
     * The field ID. It can be a slug; it must be unique within the schema hierarchy (ancestors / descendants); it must be begin with lower case.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The field ID. It can be a slug; it must be unique within the schema hierarchy (ancestors / descendants); it must be begin with lower case.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The index ID is auto generated by the system.
     *
     * @return string|null
     */
    public function getIndexId() : ?string
    {
        return $this->indexId;
    }
    /**
     * The index ID is auto generated by the system.
     *
     * @param string|null $indexId
     *
     * @return self
     */
    public function setIndexId(?string $indexId) : self
    {
        $this->indexId = $indexId;
        return $this;
    }
    /**
     * The field namespace is auto generated by the system: it carries the hierarchy information.
     *
     * @return string|null
     */
    public function getFieldNamespace() : ?string
    {
        return $this->fieldNamespace;
    }
    /**
     * The field namespace is auto generated by the system: it carries the hierarchy information.
     *
     * @param string|null $fieldNamespace
     *
     * @return self
     */
    public function setFieldNamespace(?string $fieldNamespace) : self
    {
        $this->fieldNamespace = $fieldNamespace;
        return $this;
    }
    /**
     * Language specific field names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific field names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * Language specific field descriptions.
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * Language specific field descriptions.
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions) : self
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * Defines if a field value is mandatory or not.
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * Defines if a field value is mandatory or not.
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Defines if the field can be edited or not.
     *
     * @return bool
     */
    public function getFixed() : bool
    {
        return $this->fixed;
    }
    /**
     * Defines if the field can be edited or not.
     *
     * @param bool $fixed
     *
     * @return self
     */
    public function setFixed(bool $fixed) : self
    {
        $this->fixed = $fixed;
        return $this;
    }
    /**
     * Field is stored for filtering.
     *
     * @return bool
     */
    public function getIndex() : bool
    {
        return $this->index;
    }
    /**
     * Field is stored for filtering.
     *
     * @param bool $index
     *
     * @return self
     */
    public function setIndex(bool $index) : self
    {
        $this->index = $index;
        return $this;
    }
    /**
     * Field is stored for simple search.
     *
     * @return bool
     */
    public function getSimpleSearch() : bool
    {
        return $this->simpleSearch;
    }
    /**
     * Field is stored for simple search.
     *
     * @param bool $simpleSearch
     *
     * @return self
     */
    public function setSimpleSearch(bool $simpleSearch) : self
    {
        $this->simpleSearch = $simpleSearch;
        return $this;
    }
    /**
     * Field is stored for sorting.
     *
     * @return bool
     */
    public function getSortable() : bool
    {
        return $this->sortable;
    }
    /**
     * Field is stored for sorting.
     *
     * @param bool $sortable
     *
     * @return self
     */
    public function setSortable(bool $sortable) : self
    {
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     *
     * @return string|null
     */
    public function getTemplate() : ?string
    {
        return $this->template;
    }
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     *
     * @param string|null $template
     *
     * @return self
     */
    public function setTemplate(?string $template) : self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * Contains a regex validation pattern.
     *
     * @return string|null
     */
    public function getPattern() : ?string
    {
        return $this->pattern;
    }
    /**
     * Contains a regex validation pattern.
     *
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern) : self
    {
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * The minimum string's lenght.
     *
     * @return int|null
     */
    public function getMinimumLength() : ?int
    {
        return $this->minimumLength;
    }
    /**
     * The minimum string's lenght.
     *
     * @param int|null $minimumLength
     *
     * @return self
     */
    public function setMinimumLength(?int $minimumLength) : self
    {
        $this->minimumLength = $minimumLength;
        return $this;
    }
    /**
     * The maximum string's length.
     *
     * @return int|null
     */
    public function getMaximumLength() : ?int
    {
        return $this->maximumLength;
    }
    /**
     * The maximum string's length.
     *
     * @param int|null $maximumLength
     *
     * @return self
     */
    public function setMaximumLength(?int $maximumLength) : self
    {
        $this->maximumLength = $maximumLength;
        return $this;
    }
    /**
    * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the Index property is set to true.
    *
    * @return AnalyzerBase[]|null
    */
    public function getIndexAnalyzers() : ?array
    {
        return $this->indexAnalyzers;
    }
    /**
    * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the Index property is set to true.
    *
    * @param AnalyzerBase[]|null $indexAnalyzers
    *
    * @return self
    */
    public function setIndexAnalyzers(?array $indexAnalyzers) : self
    {
        $this->indexAnalyzers = $indexAnalyzers;
        return $this;
    }
    /**
    * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the SimpleSearch property is set to true.
    *
    * @return AnalyzerBase[]|null
    */
    public function getSimpleSearchAnalyzers() : ?array
    {
        return $this->simpleSearchAnalyzers;
    }
    /**
    * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the SimpleSearch property is set to true.
    *
    * @param AnalyzerBase[]|null $simpleSearchAnalyzers
    *
    * @return self
    */
    public function setSimpleSearchAnalyzers(?array $simpleSearchAnalyzers) : self
    {
        $this->simpleSearchAnalyzers = $simpleSearchAnalyzers;
        return $this;
    }
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @return bool
     */
    public function getMultiLine() : bool
    {
        return $this->multiLine;
    }
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @param bool $multiLine
     *
     * @return self
     */
    public function setMultiLine(bool $multiLine) : self
    {
        $this->multiLine = $multiLine;
        return $this;
    }
    /**
     * If values are stored in this list, field values are limited to these ones.
     *
     * @return string[]|null
     */
    public function getGrantedValues() : ?array
    {
        return $this->grantedValues;
    }
    /**
     * If values are stored in this list, field values are limited to these ones.
     *
     * @param string[]|null $grantedValues
     *
     * @return self
     */
    public function setGrantedValues(?array $grantedValues) : self
    {
        $this->grantedValues = $grantedValues;
        return $this;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @return float
     */
    public function getBoost() : float
    {
        return $this->boost;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @param float $boost
     *
     * @return self
     */
    public function setBoost(float $boost) : self
    {
        $this->boost = $boost;
        return $this;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @return int|null
     */
    public function getMaximumItems() : ?int
    {
        return $this->maximumItems;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @param int|null $maximumItems
     *
     * @return self
     */
    public function setMaximumItems(?int $maximumItems) : self
    {
        $this->maximumItems = $maximumItems;
        return $this;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @return int|null
     */
    public function getMinimumItems() : ?int
    {
        return $this->minimumItems;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @param int|null $minimumItems
     *
     * @return self
     */
    public function setMinimumItems(?int $minimumItems) : self
    {
        $this->minimumItems = $minimumItems;
        return $this;
    }
}