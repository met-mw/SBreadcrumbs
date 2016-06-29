<?php
namespace SBreadcrumbs;


/**
 * Class Breadcrumbs
 * @package SBreadcrumbs
 */
class Breadcrumbs extends BreadcrumbsAbstract
{

    /**
     * Render breadcrumbs
     *
     * @return void
     */
    public function render()
    {
        $breadcrumbs = $this->breadcrumbs;
        ?><ol class="breadcrumb"><?
        /** @var Breadcrumb $breadcrumb */
        while ($breadcrumb = array_shift($breadcrumbs)) {
            if (empty($breadcrumbs)) {
                $breadcrumb->activate();
            }

            $breadcrumb->render();
        }
        ?></ol><?
    }

}