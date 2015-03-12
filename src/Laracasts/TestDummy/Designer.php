<?php namespace Laracasts\TestDummy;


class Designer
{

    /**
     * List of registered definitions.
     *
     * @var array
     */
    private $definitions = [];

    /**
     * Define a new factory type.
     *
     * @param  string $name
     * @param  string $shortName
     * @param  array  $attributes
     * @return self
     */
    public function define($name, $shortName = '', $attributes = [])
    {
        // The short name is optional. So we'll do a quick
        // check to make the API as simple as possible to use.
        if (is_array($shortName)) {
            $attributes = $shortName;
            $shortName = '';
        }

        $this->definitions[] = new Definition($name, $shortName, $attributes);

        return $this;
    }

    /**
     * Get all registered definitions.
     *
     * @return array
     */
    public function definitions()
    {
        return $this->definitions;
    }

}
