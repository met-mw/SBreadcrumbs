<?php
namespace SBreadcrumbs;


/**
 * Class Breadcrumb
 * @package SBreadcrumbs
 */
class Breadcrumb extends BreadcrumbAbstract
{

    /**
     * Render breadcrumb
     *
     * @return void
     */
    public function render()
    {
        ?><li<? if ($this->active) {?> class="active"<?}?>><?
        if (!is_null($this->getURI()) && !$this->active) {
            ?><a href="<?= $this->getURI() ?>"><?= $this->getName() ?></a><?
        } else {
            echo $this->getName();
        }
        ?></li><?
    }

}