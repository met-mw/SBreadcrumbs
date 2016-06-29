<?php
namespace SBreadcrumbs;


use InvalidArgumentException;

/**
 * Class BreadcrumbAbstract
 * @package SBreadcrumbs
 */
abstract class BreadcrumbAbstract implements BreadcrumbInterface
{

    /** @var string */
    protected $name = null;
    /** @var string|null */
    protected $uri = null;
    /** @var bool */
    protected $active = false;


    /**
     * BreadcrumbAbstract constructor.
     *
     * @param string $name
     * @param string|null $uri
     */
    public function __construct($name, $uri = null)
    {
        $this->setName($name)
            ->setURI($uri);
    }

    /**
     * Activate breadcrumb
     *
     * @return $this
     */
    public function activate()
    {
        $this->active = true;
        return $this;
    }

    /**
     * Deactivate breadcrumb
     *
     * @return $this
     */
    public function deactivate()
    {
        $this->active = false;
        return $this;
    }

    /**
     * Get rendered breadcrumb as string
     *
     * @return string
     */
    public function get()
    {
        ob_start();
        $this->render();
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    /**
     * Get breadcrumb name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get breadcrumb URI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uri;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Breadcrumb name must be a string.');
        }

        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $uri
     * @return $this
     */
    public function setURI($uri = null)
    {
        if (!is_null($uri) && !is_string($uri)) {
            throw new InvalidArgumentException('Breadcrumb URI must be a string or null.');
        }

        $this->uri = $uri;
        return $this;
    }

}