<?php
namespace SBreadcrumbs;


/**
 * Class BreadcrumbsAbstract
 * @package SBreadcrumbs
 */
abstract class BreadcrumbsAbstract implements BreadcrumbsInterface
{

    /** @var BreadcrumbsInterface[] */
    protected $breadcrumbs = [];

    /**
     * Add new breadcrumb
     *
     * @param string $name
     * @param string|null $uri
     * @return $this
     */
    public function addBreadcrumb($name, $uri = null)
    {
        $this->breadcrumbs[] = new Breadcrumb($name, $uri);
        return $this;
    }

    /**
     * Get rendered breadcrumbs as string
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

}