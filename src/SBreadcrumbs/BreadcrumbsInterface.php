<?php
namespace SBreadcrumbs;


/**
 * Interface BreadcrumbsInterface
 * @package SBreadcrumbs
 */
interface BreadcrumbsInterface
{

    /**
     * Add new breadcrumb
     *
     * @param string $name
     * @param string|null $uri
     * @return $this
     */
    public function addBreadcrumb($name, $uri = null);

    /**
     * Get rendered breadcrumbs as string
     *
     * @return string
     */
    public function get();

    /**
     * Render breadcrumbs
     *
     * @return void
     */
    public function render();

}