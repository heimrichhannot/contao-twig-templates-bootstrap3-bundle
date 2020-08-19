<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2019 Heimrich & Hannot GmbH
 *
 * @author  Thomas Körner <t.koerner@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */


namespace HeimrichHannot\ContaoTwigTemplatesBootstrap3Bundle\FrontendFramework;


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
}