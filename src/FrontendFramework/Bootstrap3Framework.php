<?php

/*
 * Copyright (c) 2021 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\TwigTemplatesBootstrap3Bundle\FrontendFramework;

use HeimrichHannot\TwigTemplatesBundle\Event\BeforeRenderCallback;
use HeimrichHannot\TwigTemplatesBundle\Event\PrepareTemplateCallback;
use HeimrichHannot\TwigTemplatesBundle\FrontendFramework\FrontendFrameworkInterface;
use HeimrichHannot\UtilsBundle\Accordion\AccordionUtil;

class Bootstrap3Framework implements FrontendFrameworkInterface
{
    /**
     * @var AccordionUtil
     */
    protected $accordionUtil;

    /**
     * Bootstrap3Framework constructor.
     */
    public function __construct(AccordionUtil $accordionUtil)
    {
        $this->accordionUtil = $accordionUtil;
    }

    public static function getIdentifier(): string
    {
        return 'bs3';
    }

    public static function getLabel(): string
    {
        return 'huh.twig.templates.framework.bs3';
    }

    public function prepare(PrepareTemplateCallback $callback): PrepareTemplateCallback
    {
        $templateName = $callback->getTemplateName();
        $templateData = $callback->getData();
        $this->prepareAccordeons($templateName, $templateData);
        $callback->setData($templateData);

        return $callback;
    }

    public function beforeRender(BeforeRenderCallback $callback): BeforeRenderCallback
    {
        return $callback;
    }

    protected function prepareAccordeons(string &$templateName, array &$data)
    {
        // prepare template data for bootstrap
        switch ($templateName) {
            case 'ce_accordionSingle':
                $this->accordionUtil->structureAccordionSingle($data);

                break;

            case 'ce_accordionStart':
            case 'ce_accordionStop':
                $this->accordionUtil->structureAccordionStartStop($data);

                break;
        }
    }
}
