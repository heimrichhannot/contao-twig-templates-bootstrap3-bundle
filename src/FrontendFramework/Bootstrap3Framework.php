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


use HeimrichHannot\TwigTemplatesBundle\FrontendFramework\AbstractFrontendFramework;
use HeimrichHannot\TwigTemplatesBundle\FrontendFramework\FrontendFrameworkInterface;
use HeimrichHannot\TwigTemplatesBundle\Twig\AbstractTemplate;

class Bootstrap3Framework extends AbstractFrontendFramework implements FrontendFrameworkInterface
{

    /**
     * Return the framework alias. Is used for template suffix and database identification.
     * Example: bs4 for Bootstrap 4
     *
     * @return string
     */
    public function getAlias(): string
    {
        return 'bs3';
    }

    public static function getIdentifier(): string
    {
        return 'bs3';
    }

    /**
     * Return the name of the framework. Can be an translation alias.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'huh.twig.templates.framework.bs3';
    }

    /**
     * Prepare template data at the applyTwigTemplate method
     *
     * @param string $templateName
     * @param array $templateData
     */
    public function generate(string &$templateName, array &$templateData): void
    {
        $this->prepareAccordeons($templateName, $templateData);
    }

    public function compile(string &$templateName, array &$templateData, AbstractTemplate $entity): void
    {
        // TODO: Implement prepareData() method.
    }

    protected function prepareAccordeons(string &$templateName, array &$data)
    {
        // prepare template data for bootstrap
        switch ($templateName) {
            case 'ce_accordionSingle':
                $this->container->get('huh.utils.accordion')->structureAccordionSingle($data);
                break;

            case 'ce_accordionStart':
            case 'ce_accordionStop':
                $this->container->get('huh.utils.accordion')->structureAccordionStartStop($data);
                break;
        }
    }
}