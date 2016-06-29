<?php
namespace SBreadcrumbs;


/**
 * Interface BreadcrumbInterface
 * @package SBreadcrumbs
 */
interface BreadcrumbInterface
{

    /**
     * Activate breadcrumb
     *
     * @return $this
     */
    public function activate();

    /**
     * Deactivate breadcrumb
     *
     * @return $this
     */
    public function deactivate();

    /**
     * Get rendered breadcrumb as string
     *
     * @return string
     */
    public function get();

    /**
     * Get breadcrumb name
     *
     * @return string
     */
    public function getName();

    /**
     * Get breadcrumb URI
     *
     * @return string
     */
    public function getURI();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @param string|null $uri
     * @return $this
     */
    public function setURI($uri = null);

    /**
     * Render breadcrumb
     *
     * @return void
     */
    public function render();

}