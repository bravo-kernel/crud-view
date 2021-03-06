<?php
namespace CrudView\Menu;

class MenuDropdown
{
    /**
     * The name of the dropdown
     *
     * @var string
     **/
    protected $title;

    /**
     * Array of MenuDivider|MenuItem entries
     *
     * @var array
     **/
    protected $entries = [];

    /**
     * Contains an HTML link.
     *
     * @param string $title The name of the dropdown
     * @param array $options Array of MenuDivider|MenuItem entries
     * @return void
     */
    public function __construct($title, array $entries = [])
    {
        $this->title = $title;
        $this->entries = $entries;
    }

    /**
     * Returns the menu item dropdown title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the menu item dropdown entries
     *
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }
}
